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

    public function deleteFirst()
    {
        if($this->_firstNode !== NULL) {
            if($this->_firstNode->next !== NULL) {
                $this->_firstNode = $this->_firstNode->next;
            } else {
                $this->_firstNode = NULL;
            }
            $this->_totalNode--;
            return TRUE;
        }
        return FALSE;
    }

    public function getNthNode(int $n)
    {
        $count = 0;
        if($this->_firstNode !== NULL && $n <= $this->_totalNode) {
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