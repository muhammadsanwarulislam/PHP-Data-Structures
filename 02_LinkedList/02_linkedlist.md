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
 
 Let's demonstrate a simple code that store some name using linked list:
 ```
 class NodeList 
{
    public $data    = NULL;
    public $next    = NULL;

    public function __construct(string $data = NULL)
    {
        $this->data = $data;
    }
}
 ```
 As we mentioned a linked list consists of nodes. We have created a class for our node. The ```NodeList``` class has two properties: one that will store the data and the other will call next node using ```next``` property. Now let's implement a linked list using ```NodeList``` class. For simplicity, we will just have two operations: ```insert``` and ```display```.
 
 ```
 class LinkedList
{
    private $__firstNode    = NULL;
    private $__totalNodes   = 0;

    public function insert(string $data  = NULL)
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

    public function display()
    {
        echo "Total book titles: ".$this->_totalNodes."\n";
        $currentNode    = $this->_firstNode;
        while($currentNode  !==NULL)
        {
            echo $currentNode->data ."\n";
            $currentNode    = $currentNode->next;
        }
    }
}
 ```
The following implementation as we define our two basic operations for insert and display nodes. In the LinkedList class, we have two private properties: ```$_firstNode``` and ```$_totalNodes```. Both have the default value of ```NULL``` and ```0```, respectively. We need to mark the head node or first node, so that we always know where we have to start from. We can also call it the front node. Whatever name we provide, it will be mainly used to indicate the start of the linked list. Now, let's move to the insert operation code.

The insert method takes one argument, which is the data itself. We will create a new node with the data using the ```ListNode``` class. Before inserting a book title in our linked list, we have to consider two possibilities:
  * The list is empty and we are inserting the first title
  * The list is not empty and the title is going to be added at the end
 
 Why do we need to consider both cases? The answer is pretty simple. If we do not know whether the list is empty or not, we might get different results for our operations. We might also create invalid linking between the nodes. So, the idea is if the list is empty, our insert item is going to be the first item of the list. This is what the first part of the code is doing:
 
 ```
 $newNode    = new NodeList($data);

  if($this->__firstNode === NULL)
  {
      $this->__firstNode = &$newNode;
  }
 ```
We can see from the preceding code segment that we are creating a new node with the data and naming the node object ```$newNode```. After that, it checks whether ```$_firstNode``` is ```NULL``` or not. If it is ```NULL```, then the list is empty. If it is empty, then we assign the ```$newNode``` object to the ```$_firstNode ```property. Now, the remaining part of the ```insert``` method represents our second condition, which is that the list is not empty, and we have to add the new item at the end of the list:

```
$currentNode = $this->__firstNode;     
while($currentNode->next !== NULL){
 $currentNode = $currentNode->next;
}

$currentNode->next   = $newNode;
$this->__totalNodes++;
return TRUE; 
```
Here, we get the first node of the list from the ```$_firstNode``` property. Now, we are going to iterate from the first node until the end of the list. We will ensure this by checking the condition that the next link for the current node is not NULL. If it is NULL, then we have reached the end of the list. In order to make sure that we are not looping to the same node all the time, we set the next node on from the current node as the current item during the iteration process. The while loop code implements the logic. Once we get out of the while loop, we set the last node of the linked list as ```$currentNode```. Now, we have to assign the next link of the current last node to the newly created node named ```$newNode```, so we simply put the object to the next link of the node. This object reference will work as a link between two node objects. At the end, we also increment the total node count value by 1 by post incrementing the ```$_totalNode``` property.

If we look at our display method, we can see that we are using almost similar logic to iterate through each of the nodes and displaying its content. We first get the head item for the linked list. Then, we iterate through the list until the list item is NULL. Inside the loop, we display the node data by showing its $data property. Now, we have a node class ListNode to create individual nodes for the linked list, and we have the LinkedList class to do basic insert and display operations. Let's write a small code to utilize the LinkedList class to create a linked list for book titles:

```
$programmingBooks = new LinkedList();
$programmingBooks->insert("Introduction to PHP7");
$programmingBooks->insert("Mastering JavaScript");
$programmingBooks->insert("MySQL Workbench tutorial");
$programmingBooks->display();
```
Here, we create a new object for LinkedList and name it ```$programmingBooks```. Then, we insert new book items using the ```insert``` method. We add three books, and
then, we are displaying the book names using the ```display``` method. If we run the preceding code, we will see following output:

```
Total book titles: 3
Introduction to PHP7
Mastering JavaScript
MySQL Workbench tutorial
```
### Inserting at the first node ###
To insert a new node at the front of a singly linked list, you can follow these steps:
   * Create a new node with the desired data.
   * Set the next pointer of the new node to point to the current head of the list.
   * Update the head of the list to point to the new node.

Here is the code:
```
public function insertAtFirst(string $data  = NULL)
 {
     $newNode    = new NodeList($data);

     if($this->_firstNode === NULL){
         $this->_firstNode = &$newNode;
     }else{
        $currentNode = $this->_firstNode;
        $this->_firstNode = &$newNode;
        $newNode->next = $currentNode; 
     }
 }
```
### Searching for node ###
Searching for a node in a linked list typically involves iterating through the list, starting at the head, and comparing the value of each node to the target value. If the value is found, the node can be returned or its position in the list can be returned. If the value is not found, the search can return null or a specific value indicating that the node was not found.

Here is the code:
```
public function search(string $data)
 {
     $currentNode = $this->_firstNode;
     while($currentNode != NULL) {
         if($currentNode->data === $data) {
             return $currentNode;
         }
         $currentNode = $currentNode->next;
     }
     return FALSE;
 }
```
### Inserting before a specific node ###
Inserting a new node before a specific node in a singly linked list, involves the following steps:
  * Create a new node with the desired data.
  * Iterate through the list starting at the head, and locate the node that comes immediately before the specific node.
  * Update the next pointer of the new node to point to the specific node.
  * Update the next pointer of the node that comes immediately before the specific node to point to the new node.
 
 ![image](https://user-images.githubusercontent.com/29992994/214015826-40389a2a-a9a5-4b59-8619-2e3eba62f634.png)

Here is the code:
```
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
```

### Searching a node for delete ###
To delete a specific node using deleting operation, first we will search the node from linked list and then remove the node by removing references. Here is the code:

```
public function delete(string $query): LinkedList
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
        return $this;
    }
```

### Getting the Nth position node ###
To get Nth position node we will iterate the linked list. Here is the code:

```
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
```

### Circular Linked List ###
In circular linked list, the last node's next reference will indicate first node and yeah!! we will get a circular linked list. Let's implement a circular linked list. It's pretty simple as like ```insertAtLast``` function where data will inserted at the end of the list.

```
public function circularLinkedList(string $data = NULL): LinkedList
    {
        $newNode = new NodeList($data);
        
        if($this->_firstNode === NULL) {
            $this->_firstNode = &$newNode;
        }else {
            $currentNode = $this->_firstNode;
            while($currentNode->next !== $this->_firstNode) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $newNode->next = $this->_firstNode;
        $this->_totalNodes++;
        return $this;
    }
```
If we go throw the preceding code, it only one diffrence the newly created node next reference pointed to the first node ```$newNode->next = $this->_firstNode```. To prevent infinity loop we are comparing ```$currentNode->next``` to ```$this->_firstNode```. The same condition will be apply whenever we try to display all data from circular linked list.

### Insertion Sort List ###
Given the head of a singly linked list, sort the list using insertion sort, and return the sorted list's head.

The steps of the insertion sort algorithm:

Insertion sort iterates, consuming one input element each repetition and growing a sorted output list. At each iteration, insertion sort removes one element from the input data, finds the location it belongs within the sorted list and inserts it there. It repeats until no input elements remain. The following is a graphical example of the insertion sort algorithm. The partially sorted list (black) initially contains only the first element in the list. One element (red) is removed from the input data and inserted in-place into the sorted list with each iteration.

![](https://github.com/muhammadsanwarulislam/PHP-Data-Structures/blob/main/02_LinkedList/Insertion-sort-example-300px.gif)


### Example 1: ###
![image](https://user-images.githubusercontent.com/29992994/215148385-b0ef9745-bfbb-4024-8e53-f221be0e3a7e.png)

```
Input: head = [4,2,1,3]
Output: [1,2,3,4]
```
### Example 2: ###
![image](https://user-images.githubusercontent.com/29992994/215148645-f67b42fa-09a5-4f6d-9a18-5053ef97367c.png)
```
Input: head = [-1,5,3,4,0]
Output: [-1,0,3,4,5]
```

**Yeah**,i have done basic operations in ```LinkedList``` linked list class. Now let's run the program with different operations.
```
//Using method chaining
$nodeObject = (new LinkedList())
                ->inserAtFirst(3)
                ->inserAtFirst(6)
                ->inserAtFirst(2)
                ->inserAtFirst(1)
                ->inserAtFirst(4)

                ->insertAtLast('MySQL Workbench tutorial')
                ->insertAtLast('Computer Fundamentals')
                ->insertAtLast('PHP OPP')
                ->insertAtLast('Database Management')

                ->delete('PHP OPP')
                ->reverse()

                ->insertBefore('Working','PHP OPP')
                ->insertionSortList()
                ->circularLinkedList('MySQL Workbench tutorial')
                ->circularLinkedList('Computer Fundamentals')
                ->circularLinkedList('PHP OPP')
                ->circularLinkedList('Database Management')
                ->circularLinkedList('Algorithm')
                // ->display()
                ->displayCircularLinkedListData();
```

