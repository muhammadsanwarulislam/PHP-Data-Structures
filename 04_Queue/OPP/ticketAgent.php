<?php
require_once '../OPP/queueInterface.php';
require_once '../OPP/linkedList.php';

class TicketQueue implements Queue {
    private $limit;
    private $queue;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->queue = new LinkedList();
    }

    public function enqueue(string $item)
    {
        if($this->queue->getSize() < $this->limit) {
            $this->queue->insert($item);
        }else {
            throw new OverflowException('Queue full');
        }
    }

    public function dequeue()
    {
        if($this->isEmpty()) {
            throw new UnderflowException('Queue is Empty');
        }else {
            $this->queue->deleteFirst();
        }
    }

    public function peek(): string
    {
        return $this->queue->getNthNode(1)->data;
    }

    public function isEmpty(): bool
    {
        return $this->queue->getSize() == 0;
    }

    public function show()
    {
        return $this->queue->display();
    }

}