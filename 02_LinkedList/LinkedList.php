<?php
/* 
 * Example code for: Linked List
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

class LinkedList
{
    private $__firstNode    = NULL;
    private $__totalNodes   = 0;

    public function insertAtFirst(string $data  = NULL)
    {
        $newNode    = new NodeList($data);

        if($this->__firstNode === NULL){
            $this->__firstNode = &$newNode;
        }else{
           $currentNode = $this->__firstNode;
           $this->__firstNode = &$newNode;
           $newNode->next = $currentNode; 
        }
    }

    public function insertAtLast(string $data = NULL)
    {
        $newNode    = new NodeList($data);

        if($this->__firstNode === NULL){
            $this->__firstNode  = &$newNode;
        }else{
           $currentNode = $this->__firstNode;
           
           while($currentNode->next !== NULL){
            $currentNode = $currentNode->next;
           }
           
           $currentNode->next   = $newNode;
           $this->__totalNodes++;
           return TRUE; 
        }
    }

    public function search(string $data) {
        $currentNode = $this->__firstNode;
        while($currentNode != NULL) {
            if($currentNode->data === $data) {
                return $currentNode;
            }
            $currentNode = $currentNode->next;
        }
        return FALSE;
    }

    public function display()
    {
        echo "Total book titles: ".$this->__totalNodes."\n";
        $currentNode    = $this->__firstNode;
        while($currentNode  !==NULL)
        {
            echo $currentNode->data ."\n";
            $currentNode    = $currentNode->next;
        }
    }
}

$programmingBooks = new LinkedList();
$programmingBooks->insertAtLast("Introduction to PHP7");
$programmingBooks->insertAtLast("Mastering JavaScript");
$programmingBooks->insertAtLast("MySQL Workbench tutorial");
$programmingBooks->search("Introduction to PHP7");
$programmingBooks->display();


// $programmingBooks = new LinkedList();
// $programmingBooks->insertAtFirst("Introduction to PHP7");
// $programmingBooks->insertAtFirst("Mastering JavaScript");
// $programmingBooks->insertAtFirst("MySQL Workbench tutorial");
// $programmingBooks->display();