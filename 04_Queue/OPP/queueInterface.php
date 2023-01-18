<?php

interface Queue {
    public function enqueue(string $data);

    public function dequeue();

    public function peek();

    public function isEmpty();

    public function show();
}
