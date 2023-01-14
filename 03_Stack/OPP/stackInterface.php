<?php

interface Stack {
    public function push(string $data);

    public function pop();

    public function isEmpty();

    public function top();

    public function showStack();
}