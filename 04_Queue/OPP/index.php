<?php

require_once '../OPP/ticketAgent.php';
require_once '../OPP/linkedList.php';

$linkedListObj = new LinkedList();
$linkedListObj->insert('Ticket counter 1');
$linkedListObj->insert('Ticket counter 2');
$linkedListObj->display();

// try {
//     $ticket = new TicketQueue(5);
//     $ticket->enqueue('Ticket counter 1');
//     $ticket->enqueue('Ticket counter 2');
//     $ticket->enqueue('Ticket counter 3');
//     $ticket->enqueue('Ticket counter 4');
//     $ticket->enqueue('Ticket counter 5');
//     // $ticket->enqueue('Ticket counter 6');
//     $ticket->show();
//     echo $ticket->peek();
// } catch (Exception $e) {
//     echo $e->getMessage();
// }