<?php

namespace Algo_08;

use Algo_06\SingleLinkedList;
use Algo_06\SingleLinkedListNode;

class StackOnLinkedList
{
    public $head;
    public $length;
    public function __construct()
    {
        $this->head = new SingleLinkedListNode();
        $this->length = 0;
    }
    public function pop()
    {
        if (0 == $this->length) {
            return false;
        }
        $this->head->next = $this->head->next->next;
        $this->length--;
        return true;
    }
    public function push($data)
    {
        return $this->pushData($data);
    }
    public function pushNode($node)
    {
        if (null == $node) {
            return false;
        }
        $node->next = $this->head->next;
        $this->head->next = $node;
        $this->length++;
        return true;
    }
    public function pushData($data)
    {
        $node = new SingleLinkedListNode($data);
        if (!$this->pushNode($node)) {
            return false;
        }
        return true;
    }
    public function top()
    {
        if (0 == $this->length) {
            return false;
        }
        return $this->head->next;
    }
    public function printSelf()
    {
        if (0 == $this->length) {
            echo 'empty stack' . PHP_EOL;
            return;
        }
        echo 'head.next -> ';
        $curNode = $this->head;
        while ($curNode->next) {
            echo $curNode->next->data . ' -> ';
            $curNode = $curNode->next;
        }
        echo 'NULL' . PHP_EOL;
    }
    public function getLength()
    {
        return $this->length;
    }
    public function isEmpty()
    {
        return $this->length > 0 ? false : true;
    }
}