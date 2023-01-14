<?php
require_once '../OPP/Books.php';

try {
    $programmingBooks = new Books();
    $programmingBooks->push("Introduction to PHP7");
    $programmingBooks->push("Mastering JavaScript");
    $programmingBooks->push("MySQL Workbench tutorial");
    $programmingBooks->push("Computer fundamental");
    $programmingBooks->showStack();
    // echo $programmingBooks->pop()."\n";
    echo 'Top of the item in the stack : '.$programmingBooks->top()."\n"; 
} catch (Exception $e) {
    echo $e->getMessage();
}