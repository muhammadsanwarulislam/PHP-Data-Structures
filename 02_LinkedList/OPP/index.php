<?php

require_once '../OPP/PracticeWithLinkedList.php';

$nodeObject = (new LinkedList())
                // ->inserAtFirst('Introduction to PHP7')
                // ->inserAtFirst('Mastering JavaScript')
                // ->inserAtFirst('2')
                // ->inserAtFirst('0')
                // ->inserAtFirst('3')

                ->insertAtLast('MySQL Workbench tutorial')
                ->insertAtLast('Computer Fundamentals')
                ->insertAtLast('PHP OPP')
                ->insertAtLast('Database Management')

                ->reverse()

                // ->insertBefore('Working','PHP OPP')
                ->display();

// $obj = new LinkedList();
// $obj->inserAtFirst('woking 2');
// $obj->inserAtFirst('woking 3');
// echo "2nd Item is: ".$obj->getNthNode(2)->data;
