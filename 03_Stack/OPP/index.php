<?php
require_once '../OPP/Books.php';

try {
    $programmingBooks = new Books(5);
    $programmingBooks->push("Introduction to PHP7");
    $programmingBooks->push("Mastering JavaScript");
    $programmingBooks->push("MySQL Workbench tutorial");
    // $programmingBooks->display();
    // echo $programmingBooks->pop()."\n";
    echo $programmingBooks->top()."\n"; 
} catch (Exception $e) {
    echo $e->getMessage();
}