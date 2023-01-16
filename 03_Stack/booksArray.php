<?php
/* 
 * Example code for: Stack
 * 
 * Author: Muhammad Sanwarul Islam <muhammad.sanwarul94@gmail.com>
 * 
 */

interface Stack {
    public function push(string $item);

    public function pop();

    public function top();

    public function isEmpty();
}

class Books implements Stack {
    private $limit;
    private $stack;

    public function __construct(int $limit = 10) {
        $this->limit = $limit;
        $this->stack = [];  
    }

    public function push(string $newItem) {
        if(count($this->stack) < $this->limit) {
            array_push($this->stack, $newItem);
        }else {
            throw new OverflowException('Stack is full');
        }
    }

    public function pop() {
        if($this->isEmpty()) {
            throw new UnderflowException('Stack is empty');
        }else {
            return array_pop($this->stack);
        }
    }

    public function top() : string {
        return end($this->stack);
    }

    public function isEmpty() : bool{
        return empty($this->stack);
    }
}

try {
    $programmingBooks = new Books(10);
    $programmingBooks->push("Introduction to PHP7");
    $programmingBooks->push("Mastering JavaScript");
    $programmingBooks->push("MySQL Workbench tutorial");
    echo $programmingBooks->pop()."\n";
    echo $programmingBooks->top()."\n"; 
} catch (Exception $e) {
    echo $e->getMessage();
}
