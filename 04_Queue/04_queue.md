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
 * **array_push()** function use to add new data at the end of the array.
 * **array_shift()** function use to remove the first element or data from array.
 * 
