<?php

require_once '../OPP/PracticeWithLinkedList.php';

// $nodeObject = (new LinkedList())
//                 // ->inserAtFirst('Introduction to PHP7')
//                 // ->inserAtFirst('Mastering JavaScript')

//                 ->insertAtLast('MySQL Workbench tutorial')
//                 ->insertAtLast('Computer Fundamentals')
//                 ->insertAtLast('PHP OPP')
//                 ->insertAtLast('Database Management')

//                 // ->reverse()

//                 // ->insertBefore('Working','PHP OPP')
//                 ->display();

$obj = new LinkedList();
$obj->inserAtFirst('woking 1');
$obj->inserAtFirst('woking 2');
$obj->inserAtFirst('woking 3');
$obj->deleteLast();
// $obj->deleteFirst();
$obj->display();
// echo "2nd Item is: ".$obj->getNthNode(1)->data;
