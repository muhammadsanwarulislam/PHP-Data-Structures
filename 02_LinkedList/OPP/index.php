<?php

require_once '../OPP/PracticeWithLinkedList.php';

$nodeObject = (new LinkedList())
                // ->inserAtFirst('Introduction to PHP7')
                // ->inserAtFirst('Mastering JavaScript')

                ->insertAtLast('MySQL Workbench tutorial')
                ->insertAtLast('Computer Fundamentals')
                ->insertAtLast('PHP OPP')
                ->insertAtLast('Database Management')

                // ->reverse()

                // ->insertBefore('Working','PHP OPP')
                ->display();

