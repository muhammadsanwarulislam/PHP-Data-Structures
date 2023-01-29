### Stack ###

A stack is a linear data structure that follows **the Last In First Out (LIFO) principle**. This means that the last element added to the stack will be the first one to be removed.

It can be implemented using an array or a linked list. The basic operations that can be performed on a stack are push, pop and peek. 
**Push operation is used to insert an element at the top of the stack, Pop operation is used to remove an element from the top of the stack and peek operation is used to look at the top element of the stack without removing it**.

The main advantage of a stack is that it's very efficient for inserting and removing elements from the top of the stack. This makes it a good choice for implementing undo/redo functionality or for keeping track of function calls in a program.
It is important to note that stack has a fixed size and can become full, this is called overflow, and when there are no elements in the stack, it is called underflow.

A common example of using a stack is to demonstrate the process of evaluating **postfix expressions (also known as reverse Polish notation)**. In postfix notation, operators come after the operands, rather than before them as in infix notation.

For example, the expression "3 4 + 5 × 6 -" would be evaluated as follows:

Start with an empty stack.
Read the 3 and push it onto the stack.
Read the 4 and push it onto the stack.
Read the + operator and pop the two most recent operands (4 and 3), add them together, and push the result (7) back onto the stack.
Read the 5 and push it onto the stack.
Read the × operator and pop the two most recent operands (5 and 7), multiply them together, and push the result (35) back onto the stack.
Read the 6 and push it onto the stack.
Read the - operator and pop the two most recent operands (6 and 35), subtract the first from the second, and push the result (29) back onto the stack.
The final value on the stack is the result of the expression (29).
This example shows how a stack can be used to keep track of intermediate results and operators in a mathematical expression.

### Let's implement a stack using array ###

First, we will create an interface for the stack with push, pop, isEmpty and top methods. Define an interface like that:
```
interface Stack {
    public function push(string $item);

    public function pop();

    public function top();

    public function isEmpty();
}
```
Defining interface content all the stack functions and whenever we implementing the interface we have to implement all the functions otherwise we will get fatal error.
Since we are implementing the stack using PHP array, we will use some common PHP functions like push, pop, top.

There will have some following condition which is associated with the stack
  * we can define the fix size of stack.
  * If the stack has no item but we will try to pop up the item from stack then it will throw an **underflow exception**.
  * If the stack is full or define limit exceed but we will we try to push the item in the stack then it will throw **overflow exception**.
  
Here is the code for stack implementation using **array**.
```
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
```
Define ```Books``` class use to implement the stack functionality, ```__construct``` method use to limit the stack to store the item. The next method push operation:
```
public function push(string $newItem) {
        if(count($this->stack) < $this->limit) {
            array_push($this->stack, $newItem);
        }else {
            throw new OverflowException('Stack is full');
        }
    }
```
First, we check whether or not the stack is full. It it is not, the item add at the end of the stack using ```array_push``` function. If the stack is full then it will 
throw an ```OverflowException``` exception.

```
public function pop() {
        if($this->isEmpty()) {
            throw new UnderflowException('Stack is empty');
        }else {
            return array_pop($this->stack);
        }
    }
```

The ```pop``` method will remove the item from stack. To remove the item from stack, first we will check the stack is empty or not using ```isEmpty``` method. If the stack is empty and we will try to remove the item from stack, it will throw an ```UnderflowException``` from SPL. If the stack is not empty, we use the ```array_pop()``` function from PHP to return the last item from the array.

To make usefull our stack, let's write down block of code. Here is the code for this:
```
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
```
We have create an instance for our ```Book``` class to store the item in it. We have push three item using push function.


