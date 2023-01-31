<?php

class NodeList {
    public $data = NULL;
    public $next = NULL;
    public $prev = NULL;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
