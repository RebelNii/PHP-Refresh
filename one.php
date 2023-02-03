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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <ul>
        <?php foreach($books as $book) : ?>
            <?php if($book['Author'] === 'Nai') : ?>
                <li>
                    <a href="<?= $book['link'] ?>">
                        <?= $book['Author'] ?> (<?= $book['Year'] ?>)
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul> -->
    <ul>
        <?php foreach($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['link'] ?>">
                    <?= $book['Author'] ?> (<?= $book['Year'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>