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

    public function deleteFirst()
    {
        if($this->_firstNode !== NULL) {
            if($this->_firstNode->next !==NULL) {
                $this->_firstNode = $this->_firstNode->next;
            }else{
                $this->_firstNode = NULL;
            }
            $this->_totalNodes--;
            return TRUE;
        }
        return FALSE;
    }

    public function deleteLast()
    {
        if($this->_firstNode !== NULL) {
            $currentNode = $this->_firstNode;
            if($currentNode === NULL) {
                $this->_firstNode = NULL;
            }else {
                $previousNode = NULL;
                while($currentNode->next !== NULL) {
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }
                $previousNode->next = NULL;
                $this->_totalNodes--;
                return TRUE;
            }
        }
        return FALSE;
    }

    public function delete(string $query)
    {
        if($this->_firstNode) {
            $previous = NULL;
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL) {
                if($currentNode->data === $query) {
                    if($currentNode->next === NULL) {
                        $previous->next = NULL;
                    }else {
                        $previous->next = $currentNode->next;
                    }
                    $this->_totalNodes--;
                    break;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function search(string $data)
    {
        if($this->_totalNodes) {
            $currentNode = $this->_firstNode;
            while($currentNode !== NULL) {
                if($currentNode->data === $data) {
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
        }
        return FALSE;
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
