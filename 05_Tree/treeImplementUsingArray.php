<?php
class Node {
  public $data;
  public $children;

  public function __construct($data) {
    $this->data = $data;
    $this->children = [];
  }
}

class Tree {
  public $root;

  public function __construct($data) {
    $this->root = new Node($data);
  }

  public function addChild($node, $data) {
    $newNode = new Node($data);
    array_push($node->children, $newNode);
    return $newNode;
  }

  public function display() {
    $this->displayNode($this->root);
  }

  private function displayNode($node) {
    echo $node->data . "\n";
    foreach ($node->children as $child) {
      $this->displayNode($child);
    }
  }
}

$rootNode = new Node("Root");
$tree = new Tree($rootNode);

$childNode1 = $tree->addChild($tree->root, "Child 1");
$childNode2 = $tree->addChild($tree->root, "Child 2");

$grandChildNode1 = $tree->addChild($childNode1, "Grandchild 1");
$grandChildNode2 = $tree->addChild($childNode1, "Grandchild 2");

$tree->display();
