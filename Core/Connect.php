<?php

namespace Core;

use PDO;

class Connect{

    public $connect;

    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        

        // $dsn = "mysql:host=localhost;port=3306;dbname=laracast";
        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";

        //read on the parameters of http_build_query
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connect = new PDO($dsn, $username, $password, [
            //sets a default fetch method on queries
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        // $this->connect = new PDO($dsn, 'root', '', [
        //     //sets a default fetch method on queries
        //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        // ]);
    }

    public function query($query, $params = []){

        $this->statement = $this->connect->prepare($query);
        // $query = $this->connect->prepare($query);

        $this->statement->execute($params);
        // $query->execute($params);

        return $this;
        // return $query;
        // return $query->fetchAll(PDO::FETCH_ASSOC);

        // dd($posts);
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function fetch(){
        return $this->statement->fetchAll();
    }

    public function findOrFail()
    {
        $result = $this->find();

        // dd($result);

        if(! $result){
            abort();
        }

        return $result;
    }
}