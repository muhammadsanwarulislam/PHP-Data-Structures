<?php
/* 
 * Example code for: Queue
 * 
 * Author: Muhammad Sanwarul Islam <muhammad.sanwarul94@gmail.com>
 * 
 */
interface Queue {
    public function enqueue(string $item);

    public function dequeue();

    public function peek();

    public function isEmpty();
}

class TicketQueue implements Queue {
    private $limit;
    private $queue;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->queue = [];
    }

    public function enqueue(string $item)
    {
        if(count($this->queue) < $this->limit) {
            array_push($this->queue, $item);
        }else {
            throw new OverflowException('Queue is full');
        }
    }

    public function dequeue()
    {
        if($this->isEmpty()) {
            throw new UnderflowException('Queue is empty');
        }else{
            array_shift($this->queue);
        }
    }

    public function peek()
    {
       return current($this->queue);
    }

    public function isEmpty():bool
    {
        return empty($this->queue);
    }
}

try {
    $ticket = new TicketQueue(5);
    $ticket->enqueue('Ticket counter 1');
    $ticket->enqueue('Ticket counter 2');
    $ticket->enqueue('Ticket counter 3');
    $ticket->enqueue('Ticket counter 4');
    $ticket->enqueue('Ticket counter 5');
    // $ticket->enqueue('Ticket counter 6');
    echo $ticket->peek();
} catch (Exception $e) {
    echo $e->getMessage();
}
