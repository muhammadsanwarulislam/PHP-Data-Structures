<?php

require_once '../OPP/PracticeWithLinkedList.php';

// $nodeObject = (new LinkedList())
                // ->inserAtFirst('Introduction to PHP7')
                // ->inserAtFirst('Mastering JavaScript')

                // ->insertAtLast('MySQL Workbench tutorial')
                // ->insertAtLast('Computer Fundamentals')
                // ->insertAtLast('PHP OPP')
                // ->insertAtLast('Database Management')

                // ->delete('PHP OPP')
                // ->reverse()

                // ->insertBefore('Working','PHP OPP')
                // ->display();

$obj = new LinkedList();
$obj->inserAtFirst('working 1');
$obj->inserAtFirst('working 2');
$obj->inserAtFirst('working 3');
// $obj->deleteLast();
// $obj->deleteFirst();
// $obj->delete('working 1');
$obj->search('working 2');
$obj->display();
// echo "2nd Item is: ".$obj->getNthNode(1)->data;
