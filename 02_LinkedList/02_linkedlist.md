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

