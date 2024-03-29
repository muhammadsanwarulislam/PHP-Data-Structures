## Tree ##

A tree is a data structure that consists of nodes and edges, where each node has a parent (except for the root node) and zero or more children. It is a hierarchical structure that can be used to represent hierarchical relationships, such as the structure of a file system, the organization of a company, or the family tree of a person. A tree can be represented in memory as an abstract data type (ADT) with operations to insert, delete, and search for nodes. The tree is a widely used data structure in computer science and can be implemented in various algorithms, including searching (e.g., binary search tree) and sorting (e.g., heap sort).

![image](https://user-images.githubusercontent.com/29992994/216742362-23bec387-9fa3-4d93-9215-0e00317a8c0c.png)


### Why Tree is considered a non-linear data structure? ###
The data in a tree are not stored in a sequential manner i.e, they are not stored linearly. Instead, they are arranged on multiple levels or we can say it is a hierarchical structure. For this reason, the tree is considered to be a non-linear data structure.

## Tree properties ##
  * **Parent node:** The node which is a predecessor of a node is called the parent node of that node. {B} is the parent node of {D, E}.
  * **Child node:** The node which is the immediate successor of a node is called the child node of that node. Examples: {D, E} are the child nodes of {B}.
  * **Sibling:** Children of the same parent node are called siblings. {D,E} are called siblings.
  * **Root node:** The topmost node of a tree or the node which does not have any parent node is called the root node. {A} is the root node of the tree. A non-empty tree must contain exactly one root node and exactly one path from the root to all other nodes of the tree.
  * **Descendent:** This is a node that can be reached from a parent node by repeated processing. {E,I} are the descendants of the node {B}.
  * **Ancestor:** This is a node that can be reached from a child node to a parent node by a repeated way. {A,B} are the ancestor nodes of the node {E}
  * **Degree:** The total number of child nodes of a particular parent node is known as its degree.
  * **Path:** The sequence of nodes and edges from a source node to a target node is known as a path between two nodes. The length ofthe path is the number of nodes in the path. The path between {A to I} is {A-B-E-I} and the length of the path is 4
  * **Height of node:** The height of a node is defined by the number of edges between the node and the deepest level of the descendent node.
  * **Level:** The level represents the generation of nodes. If a parent node is in level n, its child node will be n+1 level.
  *  **Height of tree:** The height of tree defined by the height of its root node.
  *  **Forest:** A forest is a set of zero or more disjoint trees. 
## Types of tree structures ##
There are several types of tree structures in computer science, including:
 * **Binary Tree:** where each node has at most two child nodes.
 * **Binary search Tree:** where the nodes are store in a sorted manner. 
 * **AVL Tree:** a self-balancing binary search tree.
 * **Trie (Prefix Tree):** used to store a collection of strings, where each node represents a single character in a string.
 * **B-Tree:** used in databases and file systems to store large amounts of data more efficiently than a binary tree.
 * **K-D Tree:** used for nearest neighbor search in high-dimensional spaces.
 * **Segment Tree:** used for efficiently querying and modifying ranges in an array.
 * **Fenwick Tree (Binary Indexed Tree):** used for efficiently querying and modifying prefix sums in an array.
 * **Heap:** a complete binary tree that satisfies the heap property, either min-heap or max-heap.
 * **Huffman Tree:** used in data compression algorithms to represent a set of characters and their frequencies.

**These are some of the most commonly used tree structures in computer science.**

## Implementing a tree using PHP ##
Let's develope a tree with real life example, we can consider our organization structure or family tree to represent the data structure. For an organization structure, there is one root node that can be CEO of the company, Followed by CEO-level employees. Here, we are not restricting any degree for a particular node. This mens a node can have multiple children. So let's think of a node structure where we can define the node property.
```
class TreeNode
{

  public $data = NULL;
  public $children = [];

  public function __construct(string $data = NULL)
  {
    $this->data = $data;
  }

  public function addChildren(TreeNode $node)
  {
    $this->children[] = $node;
  }
}
```
Let's explore the code, the following code have two public properties for ```data``` and ```children```. We have ```addChildren``` method to add a particular node. We will appending the new child node at the end of the array. As a tree is a recursive structure, it will help us build a tree recursively and aslo travers the tree in a recursive manner.

Let's build a tree structure that will define the root node of the tree and also a method to traverse the whole tree. So the basic tree structure look like this:

```
class Tree
{

  public $root = NULL;
  public function __construct(TreeNode $node)
  {
    $this->root = $node;
  }

  public function traverse(TreeNode $node, int $level = 0)
  {

    if ($node) {
      echo str_repeat("-", $level);
      echo $node->data . "\n";

      foreach ($node->children as $childNode) {
        $this->traverse($childNode, $level + 1);
      }
    }
  }
}
```
The following code have  a simple ```Tree``` class to store the root node reference and also traverse the tree from any node. In ```traverse``` method we are go throw each node and calling ```traverse``` method recursively to get children node as current node. We are appending dash(-) at the beginning to point out the level of node so that we can easily find out the child level.

So let's create root node and assign it to the tree as root.
```
$ceo = new TreeNode("CEO");
$tree = new Tree($ceo);
```
Here, we create the first node as CEO, and then created the tree and assigined the CEO node as the root node of the tree. Now, it is time to go grow our from root to node. We will now add CXO s other employee under the CEO.
```
$cto    = new TreeNode("CTO");
$cfo    = new TreeNode("CFO");
$cmo   = new TreeNode("CMO");
$coo    = new TreeNode("COO");

$ceo->addChildren($cto);
$ceo->addChildren($cfo);
$ceo->addChildren($cmo);
$ceo->addChildren($coo);

$seniorArchitect    = new TreeNode("Senior Architect");
$softwareEngineer    = new TreeNode("Software Engineer");
$userInterfaceDesigner  = new TreeNode("User Interface Designer");
$qualityAssuranceEngineer  = new TreeNode("Quality Assurance Engineer");

$cto->addChildren($seniorArchitect);
$seniorArchitect->addChildren($softwareEngineer);
$cto->addChildren($qualityAssuranceEngineer);
$cto->addChildren($userInterfaceDesigner);

$tree->traverse($tree->root);
```

**Binary Tree:**
A binary tree is a tree data structure in which each node has at most two children, referred to as the left child and the right child. Binary trees are widely used in computer science for various purposes, such as searching, sorting, and storing data efficiently.

The root node is the topmost node in the tree and is the first node that is traversed. From the root, we can move down to the left child or the right child, creating a branch in the tree. This process is repeated until we reach a leaf node, which is a node without any children.

Binary trees have several important properties that make them useful for various algorithms. For example, binary trees can be used to efficiently implement search algorithms, such as binary search. In addition, binary trees can be used to store hierarchical data structures, such as file systems and organization charts, where each node represents an item in the hierarchy and its children represent subitems.

```
      6
    /   \
   4     9
  / \   / \
 2   5 7   11

```

In this diagram, the root node is 6. The left child of the root is 4 and the right child is 9. The left child of 4 is 2 and the right child is 5. The left child of 9 is 7 and the right child is 11. The leaves of the tree are 2, 5, 7, and 11, which are the nodes without any children.

In a binary tree, each node has at most two children, and each child is either a left child or a right child. The diagram is a visual representation of the relationships between the nodes in the tree.

### Binary search Tree: ###
A binary search tree (BST) is a tree data structure in which each node has at most two children, named left and right. The left child node has a value less than its parent node, and the right child node has a value greater than its parent node. This property ensures that the values in the left subtree of a node are less than the node value and the values in the right subtree of a node are greater than the node value. This structure allows for efficient searching, insertion, and deletion of elements in the tree.

Here is an example of a binary search tree diagram:
```
      8
     / \
    3   10
   / \    \
  1   6    14
 / \  / \
N  N  N   N

```
In this diagram, the root node is 8, and its left child is 3 and right child is 10. The left subtree of the root node has elements 1 and 6, and the right subtree has elements 14. The leaf nodes (N) do not have any children.

## Implementating a binary tree ##
Let's create a binary tree where key factor to a binary tree is we must have two placeholders for the left child node and right child node. There is a simple binary node:
```
class BinaryNode {
  public $data;
  public $right;
  public $left;
  public function __construct(string $data = NULL)
  {
    $this->data = $data;
    $this->right = NULL;
    $this->left = NULL;   
  }

  public function addChildren(BinaryNode $left, BinaryNode $right)
  {
    $this->right = $left;
    $this->right = $right;  
  }
}
```
The following code shows that we have a class ```BinarryNode``` with tree properties to store data, left and right. When we are constructing a new node, we are adding the node value to the data property, left and right kept ```NULL``` as we are not sure if we need those or not. We have ```addChildren``` method to add left children and right children to a particular node. 



