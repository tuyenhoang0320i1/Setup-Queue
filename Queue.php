<?php

namespace myQueue;

use NodeQ\Node;

include_once "Node.php";

class Queue
{
    protected $front = null;
    protected $back = null;

    public function __construct()
    {
    }

    public function isEmpty()
    {
        return $this->front = null;
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;

        } else {
            $oldBack->pointer = $this->back;

        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->front->value;
        $this->front = $this->front->pointer;
        return $removedValue;
    }
}