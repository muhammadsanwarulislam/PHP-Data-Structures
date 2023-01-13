<?php

require_once '../OPP/PracticeWithLinkedList.php';

$nodeObject = (new LinkedList())
                ->inserAtFirst('Introduction to PHP7')
                ->inserAtFirst('Mastering JavaScript')

                ->insertAtLast('MySQL Workbench tutorial')
                ->insertAtLast('Computer Fundamentals')
                ->insertAtLast('PHP OPP')
                ->insertAtLast('Database Management')

                ->insertBefore('Working','PHP OPP')
                ->display();
<<<<<<< HEAD

// $obj = new LinkedList();
// $obj->inserAtFirst('woking 2');
// $obj->inserAtFirst('woking 3');
// echo "2nd Item is: ".$obj->getNthNode(2)->data;
=======
>>>>>>> 3e9221e0809fad2b571ca79ba7107f8a472e02c0
