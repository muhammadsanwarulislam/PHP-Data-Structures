## Tree ##

A tree is a data structure that consists of nodes and edges, where each node has a parent (except for the root node) and zero or more children. It is a hierarchical structure that can be used to represent hierarchical relationships, such as the structure of a file system, the organization of a company, or the family tree of a person. A tree can be represented in memory as an abstract data type (ADT) with operations to insert, delete, and search for nodes. The tree is a widely used data structure in computer science and can be implemented in various algorithms, including searching (e.g., binary search tree) and sorting (e.g., heap sort).

### Why Tree is considered a non-linear data structure? ###
The data in a tree are not stored in a sequential manner i.e, they are not stored linearly. Instead, they are arranged on multiple levels or we can say it is a hierarchical structure. For this reason, the tree is considered to be a non-linear data structure.

## Tree properties ##
  * **Descendent:** This is a node that can be reached from a parent node by repeated processing.
  * **Ancestor:** This is a node that can be reached from a child node to a parent node by a repeated way.
  * **Degree:** The total number of child nodes of a particular parent node is known as its degree.
  * **Path:** The sequence of nodes and edges from a source node to a target node is known as a path between two nodes.
  * **Height of node:** The height of a node is defined by the number of edges between the node and the deepest level of the descendent node.
  * **Level:** The level represents the generation of nodes. If a parent node is in level n, its child node will be n+1 level.
  *  **Height of tree:** The height of tree defined by the height of its root node.
