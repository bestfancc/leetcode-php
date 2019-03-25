<?php
//手打代码学习基础数据结构，来自 https://github.com/wangzheng0822/algo/blob/master/php/06_linkedlist/SingleLinkedListNode.php

//namespace Algo_06;

class SingleLinkedListNode
{
    public $data;
    public $next;
    public function __construct($data = null)
    {
        $this->data = $data;
        $this->next = null;
    }
}