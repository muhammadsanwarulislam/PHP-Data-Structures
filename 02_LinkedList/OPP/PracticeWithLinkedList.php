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

    public function display() {
        $currentNode = $this->_firstNode;
        echo "Total node :" .$this->_totalNodes."\n";
        while($currentNode !== NULL) {
            echo  $currentNode->data ."\n";
            $currentNode    = $currentNode->next;
        }
    }
}