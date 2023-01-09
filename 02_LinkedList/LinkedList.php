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

    public function insertBefore(string $data = NULL, string $query = NULL)
    {
        $newNode = new NodeList($data);
        if($this->__firstNode){
            $previousNode = NULL;
            $currentNode  = $this->__firstNode;
            while($currentNode !== NULL) {
                if($currentNode->data === $query) {
                    $newNode->next = $currentNode;
                    $previousNode->next = $newNode;
                    $this->__totalNodes++;
                    break;
                }
                $previousNode = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function insertAfter(string $data = NULL, string $query = NULL) {
        $newNode = new NodeList($data);

        if ($this->__firstNode) {
            $nextNode = NULL;
            $currentNode = $this->__firstNode;
            while ($currentNode !== NULL) {
                if ($currentNode->data === $query) {
                    if ($nextNode !== NULL) {
                        $newNode->next = $nextNode;
                    }
                    $currentNode->next = $newNode;
                    $this->__totalNodes++;
                    break;
                }
                $currentNode = $currentNode->next;
                $nextNode = $currentNode->next;
            }
        }
    }

    public function search(string $data)
    {
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

    public function getNthNode(int $n = 0)
    {
        $count = 1;
        if($this->__firstNode !== NULL) {
            $currentNode = $this->__firstNode;
            while($currentNode !== NULL) {
                if($count === $n) {
                    return $currentNode;
                }
                $count++;
                $currentNode = $currentNode->next;
            }
        }
    }
}

$programmingBooks = new LinkedList();
$programmingBooks->insertAtLast("Introduction to PHP7");
$programmingBooks->insertAtLast("Mastering JavaScript");
$programmingBooks->insertAtLast("MySQL Workbench tutorial");
// $programmingBooks->search("Introduction to PHP7");
// $programmingBooks->display();


$programmingBooks->insertBefore("Python programming language", "MySQL Workbench tutorial");

$programmingBooks->insertAfter("ABD programming language", "Mastering JavaScript");
$programmingBooks->display();

echo "2nd Item is: ".$programmingBooks->getNthNode(2)->data;

// $programmingBooks = new LinkedList();
// $programmingBooks->insertAtFirst("Introduction to PHP7");
// $programmingBooks->insertAtFirst("Mastering JavaScript");
// $programmingBooks->insertAtFirst("MySQL Workbench tutorial");
// $programmingBooks->display();