## Queue ##
The queue is a linear data structure that follows the **First-In, First-Out(FIFO)** principle. There are two ends for the operation, One to append to the queue and another one will be remove from the queue. This means that the first item added to the queue is the first one to be removed, just like in a real-life queue.

Queues are used in various applications, such as:
  * In computer systems, queues are used for scheduling and executing tasks in order, for example, a print queue, where the first document sent to be printed will be the first one to be printed.
  * In networking, queues are used to store incoming messages or packets waiting to be processed.
  * In operating systems, queues are used for inter-process communication and synchronization.

In queue data structure we can perform some of the operations:
  * **Enqueue:** The process of adding new element of the queue is known as enqueue.
  * **Dequeue:** The process of removing an element from queue is known as dequeue.
  * **Peek:** The process of looking at the front element of the queue without removing the element is known as a peek.

## Let's implement a queue using PHP array ##
We are going to implement the queue data structure using PHP array. The process almost similar with stack and we are using some build in PHP function to implement the queue data structure.
 * **array_push()** function use to add new element or data at the end of the array.
 * **array_shift()** function use to remove the first element or data from array.
 * **current()** function returns the value of the current element in an array.

Here is the code:
```
<?php

interface Queue {
    public function enqueue(string $item);

    public function dequeue();

    public function peek();

    public function isEmpty();
}

class TicketQueue implements Queue {
    private $limit;
    private $queue;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->queue = [];
    }

    public function enqueue(string $item)
    {
        if(count($this->queue) < $this->limit) {
            array_push($this->queue, $item);
        }else {
            throw new OverflowException('Queue is full');
        }
    }

    public function dequeue()
    {
        if($this->isEmpty()) {
            throw new UnderflowException('Queue is empty');
        }else{
            array_shift($this->queue);
        }
    }

    public function peek()
    {
       return current($this->queue);
    }

    public function isEmpty():bool
    {
        return empty($this->queue);
    }
}

try {
    $ticket = new TicketQueue(5);
    $ticket->enqueue('Ticket counter 1');
    $ticket->enqueue('Ticket counter 2');
    $ticket->enqueue('Ticket counter 3');
    $ticket->enqueue('Ticket counter 4');
    $ticket->enqueue('Ticket counter 5');
    // $ticket->enqueue('Ticket counter 6');
    echo $ticket->peek();
} catch (Exception $e) {
    echo $e->getMessage();
}

```
Here, the coding pattern almost similar with stack where we use an interface to define some functions. The queue define with fixd-size and checking purpose we are useing ```UnderflowException``` and ```OverflowException```.

## Priority Queue ##
A priority queue is a data structure that stores elements with associated priorities, and provides access to the element with the highest priority. It is a type of queue that is different from a standard queue in the sense that elements are processed in order of their priority, rather than the order in which they were added.

In a priority queue, elements are inserted using an operation called enqueue, and the highest-priority element is removed using an operation called dequeue. The dequeue operation retrieves and removes the element with the highest priority. The priority of elements can be based on any criteria, such as their value, weight, or any other relevant factor.

There are two common implementations of a priority queue: a binary heap and a Fibonacci heap. A binary heap is a binary tree with the property that the parent node has a higher priority than its children, while a Fibonacci heap is a data structure that can efficiently perform insertions and deletions, as well as finding the element with the highest priority.

Priority queues have a wide range of applications, including scheduling and resource allocation, graph algorithms, and solving search problems, among others.

In summary, a priority queue is a data structure that allows elements to be inserted and retrieved based on their priority, rather than the order in which they were added.

