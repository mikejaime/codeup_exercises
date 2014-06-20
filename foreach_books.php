<?php 

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

// Construct a loop that iterates through each book and then each 
// book's keys and values. Have it output the book's title, then 
// list the key value pairs for the data about each book.
foreach ($books as $book => $properties) {
    //asked foreach loop to print books published only after 1950
    if(isset($properties[published]){   
        echo $book . PHP_EOL;
        foreach ($properties as $detail => $value) {
            echo "{$detail}: {$value}\n"
        }
    }
}


// Update your loop to only show books that were written after 1950.
foreach ($books as $book => $properties) {
    //asked foreach loop to print books published only after 1950
    if(isset($properties[published]) && $properties[published] > 1950){   
        echo $book . PHP_EOL;
        foreach ($properties as $detail => $value) {
            echo "{$detail}: {$value}\n"
        }
    }
}

 ?>