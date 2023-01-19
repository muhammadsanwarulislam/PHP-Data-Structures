<?php
require_once '../OPP/queueInterface.php';

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
            throw new OverflowException('Queue full');
        }
    }

    public function dequeue()
    {
        if($this->isEmpty()) {
            throw new UnderflowException('Queue is Empty');
        }else {
            array_shift($this->queue);
        }
    }

    public function peek(): string
    {
        return current($this->queue);
    }

    public function isEmpty(): bool
    {
        return empty($this->queue);
    }

    public function show()
    {
        foreach($this->queue as $queue)
        {
            echo $queue."\n";
        }
    }
}