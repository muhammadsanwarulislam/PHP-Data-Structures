<?php
require_once '../OPP/node.php';

class DoublyLinkedList {
    private $_firstNode = NULL;
    private $_lastNode  = NULL;
    private $_totalNode = 0;

    public function insertAtFirst(string $data):DoublyLinkedList 
    {
        $newNode  = new NodeList($data);
        if($this->_firstNode === NULL) {
            $this->_firstNode   = &$newNode;
            $this->_lastNode    = $newNode;
        }else {
            $currentNode        = $this->_firstNode;
            $this->_firstNode   = &$newNode;
            $newNode->next      = $currentNode;
            $currentNode->prev  = $newNode;
        }
        return $this;
    }

    public function displayBackward() 
    {
        echo "Total Data : " . $this->_totalNode . "\n";
        $currentNode = $this->_lastNode;
        while ($currentNode !== NULL) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->prev;
        }
    }
}