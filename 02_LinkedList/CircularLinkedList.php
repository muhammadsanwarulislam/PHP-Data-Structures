<?php
/* 
 * Example code for: Circular Linked List
 * 
 * Author: Muhammad Sanwarul Islam <muhammad.sanwarul94@gmail.com>
 * 
 */

 class NodeList 
 {
     public $data    = NULL;
     public $next    = NULL;
 
     public function __construct(string $data = NULL)
     {
         $this->data = $data;
     }
 }

 class CircularLinkedList {
    private $_firstNode = NULL;
    private $_totalNode = 0;

    public function insertAtEnd($newData = NULL)
    {
        $newNode = new NodeList($newData);

        if($this->_firstNode === NULL) {
            $this->_firstNode = &$newNode;
        }else {
            $currentNode = $this->_firstNode;
            while($currentNode->next !== $this->_firstNode) {
                $currentNode = $currentNode->next;
            }
        }
        $newNode->next = $this->_firstNode;
        $this->_totalNode++;
        return TRUE;
    }

    public function display() {
        echo "Total book titles: " . $this->_totalNode . "\n";
        $currentNode = $this->_firstNode;
        while ($currentNode->next !== $this->_firstNode) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }

        if ($currentNode) {
            echo $currentNode->data . "\n";
        }
    }
 }

$BookTitles = new CircularLinkedList();
$BookTitles->insertAtEnd("Introduction to Algorithm");
$BookTitles->insertAtEnd("Introduction to PHP and Data structures");
$BookTitles->insertAtEnd("Programming Intelligence");
$BookTitles->insertAtEnd("Mediawiki Administrative tutorial guide");
$BookTitles->display();