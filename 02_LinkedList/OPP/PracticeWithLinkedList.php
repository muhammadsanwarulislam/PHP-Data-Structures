<?php

class NodeList {
    public $data = NULL;
    public $next = NULL;

    public function __construct($data)
    {
        $this->data = $data;
    }
}

class LinkedList {
    Private $_firstNode = NULL;
    private $_total     = 0;

    public function inserAtFirst(string $data) {
        $newNode    =   new NodeList($data);

        if($this->_firstNode === NULL) {
            $this->_firstNode   =   &$newNode;
        }else {
            $currentNode = $this->_firstNode;
            $this->_firstNode = $newNode;
            $newNode->next = $currentNode;
        }
    }

    public function display() {
        $currentNode = $this->_firstNode;

        while($currentNode !== NULL) {
            echo  $currentNode->data ."\n";
            $currentNode    = $currentNode->next;
        }
    }
}