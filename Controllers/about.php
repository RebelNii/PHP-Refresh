<?php

$books = [
    [
        'Name' => 'Book 1',
        'Author' => 'Nii',
        'Year' => '1994',
        'link' => 'google.com'
    ],
    [
        'Name' => 'Book 2',
        'Author' => 'Nii',
        'Year' => '1994',
        'link' => 'google.com'
    ],
    [
        'Name' => 'Book 3',
        'Author' => 'Nai',
        'Year' => '1984',
        'link' => 'google.com'
    ],
    [
        'Name' => 'Book 4',
        'Author' => 'Nai',
        'Year' => '1985',
        'link' => 'google.com'
    ],
    [
        'Name' => 'Book 5',
        'Author' => 'Nai',
        'Year' => '1986',
        'link' => 'google.com'
    ],
];

// function filter($arrays, $key, $value){
//     $filtered = [];

//     foreach($arrays as $array){
//         if($array[$key] === $value){
//             $filtered[] = $array;
//         }
//     }

//     return $filtered;
// };

function filter($arrays, $fn){
    $filtered = [];

    foreach($arrays as $array){
        if($fn($array)){
            $filtered[] = $array;
        }
    }

    return $filtered;
};

$filteredBooks = filter($books, function($book){
    return $book['Year'] >= 1986;
});

$heading = "About";

// require_once('../Helpers/helpsFunc.php');

require_once(base_path('./views/about.view.php'));
// require_once('./views/about.view.php');