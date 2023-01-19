<?php

require_once '../OPP/node.php';

class LinkedList {
    private $_firstNode = NULL;
    private $_totalNode = 0;

    public function insert($data)
    {
        $newNode = new NodeList($data);

        if($this->_firstNode === NULL) {
            $this->_firstNode = &$newNode;
        }else {
            $currentNode    = $this->_firstNode;
            while($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNode++;
        return TRUE;
    }

    public function display() 
    {
        echo "Total Ticket: " . $this->_totalNode . "\n";
        $currentNode = $this->_firstNode;
        while($currentNode !== NULL) {
            echo $currentNode->data."\n";
            $currentNode = $currentNode->next;
        }
    }
}