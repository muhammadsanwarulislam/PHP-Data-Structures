<?php

require_once '../OPP/singleLinkedList.php';
require_once '../OPP/doublyLinkedList.php';

//Using method chaining
// $nodeObject = (new SingleLinkedList())
//                 ->inserAtFirst(3)
//                 ->inserAtFirst(6)
//                 ->inserAtFirst(2)
//                 ->inserAtFirst(1)
//                 ->inserAtFirst(4)

//                 ->insertAtLast('MySQL Workbench tutorial')
//                 ->insertAtLast('Computer Fundamentals')
//                 ->insertAtLast('PHP OPP')
//                 ->insertAtLast('Database Management')

//                 ->delete('PHP OPP')
//                 ->reverse()

//                 ->insertBefore('Working','PHP OPP')
//                 ->insertionSortList()
//                 ->display();

// $obj = new SingleLinkedList();
// $obj->inserAtFirst(4);
// $obj->inserAtFirst(5);
// $obj->inserAtFirst(3);
// $obj->inserAtFirst(6);
// // $obj->deleteLast();
// // $obj->deleteFirst();
// // $obj->delete('working 1');
// // $obj->search('working 2');
// $obj->insertionSortList();
// $obj->display();
// // echo "2nd Item is: ".$obj->getNthNode(1)->data;


$nodeObject = (new DoublyLinkedList())
                ->insertAtFirst(3)
                ->insertAtFirst(6)
                ->insertAtFirst(2)
                ->insertAtFirst(1)
                ->insertAtFirst(4)

                // ->displayForward();
                ->displayBackward();
