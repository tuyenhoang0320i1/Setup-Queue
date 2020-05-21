<?php
use myQueue\Queue;
include_once 'Node.php';
include_once 'Queue.php';

$myQueue = new Queue();
$myQueue->enqueue(1);
$myQueue->enqueue(2);
$myQueue->enqueue(4);
$myQueue->enqueue(6);


    echo "<pre>";
    print_r($myQueue);
    echo "</pre>";


