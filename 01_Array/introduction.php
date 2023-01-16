<?php

function findABook(Array $bookList, string $bookName) {
    $found = FALSE;
    
    foreach($bookList as $index => $book) {
        if($book === $bookName) {
             $found = $index;
             break;
        }
    }
    return $found;        
}

function placeAllBooks(Array $orderedBooks, Array &$bookList) {
    foreach ($orderedBooks as $book) {
        $bookFound = findABook($bookList, $book);
        if($bookFound !== FALSE) {
            array_splice($bookList, $bookFound, 1);
        }
  }
}

$bookList = ['PHP','MySQL','PGSQL','Oracle','Java'];
$orderedBooks = ['MySQL','PGSQL','Java'];

placeAllBooks($orderedBooks, $bookList);
echo implode(",", $bookList);