<?php
require_once '../OPP/stackInterface.php';
require_once '../OPP/linkedList.php';
class Books implements Stack {
    private $stack;

    public function __construct()
    {
        $this->stack = new LinkedList();
    }

    public function push(string $item)
    {
        $this->stack->insert($item);
    }

    public function pop():string
    {
        if ($this->isEmpty()) {
            throw new UnderflowException('Stack is empty');
        } else {
            $lastItem = $this->top();
            $this->stack->deleteLast();
            return $lastItem;
        }
    }

    public function top():string
    {
        return $this->stack->getNthNode($this->stack->getSize())->data;
    }

    public function isEmpty():bool
    {
        return $this->stack->getSize() == 0;
    }

    public function showStack()
    {
        print_r($this->stack);
        $this->stack->display();
    }
}
