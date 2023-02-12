<?php

class Node{
    public ?string $data = NULL;
    public $next = NULL;
    public ?int $priority = NULL;

    public function __construct(string $data = NULL, int $priority = NULL)
    {
        $this->data = $data;
        $this->priority = $priority;
    }
}

class PriorityQueue {

    private $_firstNode = NULL;
    private $_totalNode = 0;
    
    public function insert(string $data = NULL, int $priority = NULL)
    {
        $newNode = new Node($data, $priority);
        $this->_totalNode++;

        if($this->_firstNode === NULL) {
            $this->_firstNode = &$newNode;
        }else {
            $previous = $this->_firstNode;
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL) {
                if($currentNode->priority < $priority) {
                    if($currentNode == $this->_firstNode) {
                        $previous = $this->_firstNode;
                        $this->_firstNode = $newNode;
                        $newNode->next = $previous;
                        return;
                    }
                    $newNode->next = $currentNode;
                    $previous->next = $newNode;
                    return;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
        return TRUE;
    }

    public function display() 
    {
        echo "Total Data: " . $this->_totalNode . "\n";
        $currentNode = $this->_firstNode;
        while($currentNode !== NULL) {
            echo $currentNode->data."\n";
            $currentNode = $currentNode->next;
        }
    }
}

try {
    $queue = new PriorityQueue(5);
    $queue->insert('Ticket counter 1',1);
    $queue->insert('Ticket counter 2',3);
    $queue->insert('Ticket counter 3',2);
    $queue->insert('Ticket counter 4',5);
    $queue->insert('Ticket counter 5',4);
    $queue->display();
} catch (Exception $e) {
    echo $e->getMessage();
}