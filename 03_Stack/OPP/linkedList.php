<?php
require_once '../OPP/node.php';

class LinkedList implements Iterator {
    private $_firstNode         = NULL;
    private $_totalNode         = 0;
    private $_currentNode       = NULL;
    private $_currentPosition   = 0;

    public function insert(string $data) 
    {
        $newNode = new NodeList($data);

        if($this->_firstNode === NULL){
            $this->_firstNode = &$newNode;
        }else{
            $currentNode = $this->_firstNode;
            while($currentNode->next !== NULL){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
            $this->_totalNode ++;
            return TRUE;
        }
    }

    public function deleteLast() {
        if ($this->_firstNode !== NULL) {
            $currentNode = $this->_firstNode;
            if ($currentNode->next === NULL) {
                $this->_firstNode = NULL;
            } else {
                $previousNode = NULL;

                while ($currentNode->next !== NULL) {
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }

                $previousNode->next = NULL;
                $this->_totalNode--;
                return TRUE;
            }
        }
        return FALSE;
    }

    public function getNthNode(int $n = 0) {
        $count = 1;
        if ($this->_firstNode !== NULL && $n <= $this->_totalNode) {
            $currentNode = $this->_firstNode;
            while ($currentNode !== NULL) {
                if ($count === $n) {
                    return $currentNode;
                }
                $count++;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function display() {
        echo "Total book titles: " . $this->_totalNode . "\n";
        $currentNode = $this->_firstNode;
        while ($currentNode !== NULL) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }

    public function getSize() 
    {
        return $this->_totalNode;
    }

    public function current():mixed
    {
        return $this->_currentNode->data;
    }

    public function next(): void
    {
        $this->_currentPosition++;
        $this->_currentNode = $this->_currentNode->next;
    }

    public function key():mixed
    {
        return $this->_currentPosition;
    }

    public function rewind():void 
    {
        $this->_currentPosition = 0;
        $this->_currentNode = $this->_firstNode;
    }

    public function valid():bool 
    {
        return $this->_currentNode !== NULL;
    }
}