<?php
namespace Algo_08;

require_once '../../vendor/autoload.php';


//$stack = new StackOnLinkedList();
$stack = new StackOnArray();
//exit;


$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
var_dump($stack->getLength());
$stack->printSelf();
$topNode = $stack->top();
var_dump($topNode);
$stack->pop();
$stack->printSelf();
$stack->pop();
$stack->printSelf();
var_dump($stack->getLength());
$stack->pop();
$stack->pop();
$stack->printSelf();