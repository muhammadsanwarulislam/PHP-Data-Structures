<?php
require_once '../OPP/Node.php';

class LinkedList {
    Private $_firstNode = NULL;
    private $_totalNodes     = 0;

    public function inserAtFirst(string $data = NULL): LinkedList 
    {
        $newNode    =   new NodeList($data);

        if($this->_firstNode === NULL) {
            $this->_firstNode   =   &$newNode;
        }else {
            $currentNode = $this->_firstNode;
            $this->_firstNode = $newNode;
            $newNode->next = $currentNode;
        }
        $this->_totalNodes++;
        return $this;
    }

    public function insertAtLast(string $data = NULL): LinkedList 
    {
        $newNode = new NodeList($data);

        if($this->_firstNode === NULL) {
            $this->_firstNode = &$newNode;
        }else{
            $currentNode = $this->_firstNode;
            while($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNodes++;
        return $this;
    }

    public function insertBefore(string $data = NULL, string $query = NULL): LinkedList
    {
        $newNode = new NodeList($data);
        
        if($this->_firstNode) {
            $previousNode = NULL;
            $currentNode = $this->_firstNode;

            while($currentNode !== NULL) {
                if($currentNode->data === $query) {
                    $newNode->next = $currentNode;
                    $previousNode->next = $newNode;
                    $this->_totalNodes++;
                    break;
                }
                $previousNode = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
        return $this;
    }

    public function reverse(): LinkedList
    {
        if ($this->_firstNode !== NULL) {
            if ($this->_firstNode->next !== NULL) {
                $reversedList = NULL;
                $next = NULL;
                $currentNode = $this->_firstNode;

                while ($currentNode !== NULL) {
                    $next = $currentNode->next;
                    $currentNode->next = $reversedList;
                    $reversedList = $currentNode;
                    $currentNode = $next;
                }
                $this->_firstNode = $reversedList;
            }
        }
        return $this;
    }

    public function getNthNode(int $n = 0) 
    {
        $count = 1;
        if($this->_firstNode !== NULL) {
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL) {
                if($count === $n) {
                    return $currentNode;
                }
                $count++;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function display() {
        $currentNode = $this->_firstNode;
        echo "Total node :" .$this->_totalNodes."\n";
        while($currentNode !== NULL) {
            echo  $currentNode->data ."\n";
            $currentNode    = $currentNode->next;
        }
    }
}