## Linked List
**A linked list is a linear collection of data elements, called nodes, each pointing to the next node by means of a pointer.** It is a dynamic data structure, as opposed to an array, which has a fixed size. Each node contains two fields: a data field to store the element and a next field to store the reference to the next node. The last node has a reference to null, indicating the end of the list. Linked lists are often used to implement other data structures such as stacks, queues, and associative arrays.
```
+-----+    +-----+    +-----+    +-----+
|  1  |    |  2  |    |  3  |    |  4  |
+-----+    +-----+    +-----+    +-----+
|  o---->| o----> | o----> | o----> | null
+-----+    +-----+    +-----+    +-----+
```
Each box represents a node in the linked list, with the number inside representing the data stored in that node. The arrow (o---->) represents the next pointer, which points to the next node in the list. The last node in the list has a next pointer that points to null, indicating the end of the list.

In this example, the linked list contains 4 nodes, each storing an integer value. The first node (1) points to the second node (2) which in turn points to the third node (3) and so on. The last node (4) points to null, indicating the end of the list.

We can also perform a wide variety of operations on a linked list, such as
the following ones:
  * Checking whether the list is empty
  * Displaying all items in the list
  * Searching an item in the list
  * Getting the size of the list
  * Inserting a new item at the beginning or end of the list
  * Removing an item from the beginning or end of the list
  * nserting a new item at a specific place or before/after an item
  * Reversing a list
  These are only some of the operations that can be performed on a linked list.
  
  ## Different types of linked list
  There are several types of linked lists, including:
  * Singly linked list: A linked list in which each node points to the next node in the list.
  * Doubly linked list: A linked list in which each node points to the next node and the previous node in the list.
  * Circular linked list: A linked list in which the last node points to the first node, creating a loop.
  * Multiply linked list: A linked list in which each node can have multiple links, rather than just one.
## Let's explore some available linked list operation
 * Inserting at the first node.
 * Searching for a node.
 * Inserting before a specific node.
 * Inserting after a specific node.
 * Deleting the first node.
 * Deleting the last node.
 * Getting Nth position element.
 * Reverseing a linked ist.

