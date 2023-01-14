<?php
require_once '../OPP/stackInterface.php';

class Books implements Stack {
    private $limit;
    private $stack;

    public function __construct(int $limit)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    public function push(string $item)
    {
        if(count($this->stack) < $this->limit) {
            array_push($this->stack, $item);
        }else {
            throw new OverflowException('Stack is full');
        }
    }

    public function pop()
    {
        if($this->isEmpty()) {
            throw new UnderflowException('Stack is empty');
        }else {
            return array_pop($this->stack);
        }
    }

    public function top():string
    {
        return end($this->stack);
    }

    public function isEmpty():bool
    {
        return empty($this->stack);
    }

    public function display()
    {
        foreach($this->stack as $s) {
            echo $s."\n";
        }
    }
}