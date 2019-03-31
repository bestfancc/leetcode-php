<?php
//手打代码学习基础数据结构，来自 https://github.com/bestfancc/algo/blob/master/php/06_linkedlist/SingleLinkedList.php


namespace Algo_06;

//use Algo_06\SingleLinkedListNode;
//require 'SingleLinkedListNode.php';

class SingleLinkedList
{
    /**
     * @var SingleLinkedListNode
     */
    public $head;
    /**
     * @var int
     */
    private $length;

    /**
     * SingleLinkedList constructor.
     * @param null $head
     */
    public function __construct($head = null)
    {
        if ($head == null) {
            $this->head = new SingleLinkedListNode();
        } else {
            $this->head = $head;
        }
        $this->length = 0;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param $data
     */
    public function insert($data)
    {
        $this->insertDataAfter($this->head, $data);
    }

    public function delete(SingleLinkedListNode $node)
    {
        if ($node == null) {
            return false;
        }
        $preNode = $this->getPreNode($node);
        if ($preNode == false) {
            return false;
        }
        $preNode->next = $node->next;
        unset($node);
        $this->length--;
        return true;
    }

    /**
     * @param $index
     * @return null
     */
    public function getNodeByIndex($index)
    {
        if ($index >= $this->length) {
            return null;
        }
        $curNode = $this->head->next;
        for ($i = 0; $i < $index; $i++) {
            $curNode = $curNode->next;
        }
        return $curNode;
    }

    /**
     * @return bool
     */
    public function printList()
    {
        if ($this->head == null) {
            return false;
        }
        $curNode = $this->head;
        $listLength = $this->getLength();
        while ($curNode != null) {
            echo $curNode->data . ' -> ';
            $curNode = $curNode->next;
        }
        echo 'NULL' . PHP_EOL;
        return true;
    }

    /**
     * @param SingleLinkedListNode $originNode
     * @param $data
     * @return bool
     */
    public function insertDataBefore(SingleLinkedListNode $originNode, $data)
    {
        if ($originNode == null) {
            return false;
        }
        $preNode = $this->getPreNode($originNode);
        return $this->insertDataAfter($preNode, $data);
    }

    /**
     * @param SingleLinkedListNode $node
     * @return SingleLinkedListNode|bool|null
     */
    public function getPreNode(SingleLinkedListNode $node)
    {
        if ($node == null) {
            return false;
        }
        $curNode = $this->head;
        $preNode = $this->head;
        while ($preNode != $node && $curNode != null) {
            $preNode = $curNode;
            $curNode = $curNode->next;
        }
        return $preNode;
    }

    /**
     * @param SingleLinkedListNode $originNode
     * @param $data
     * @return bool
     */
    public function insertDataAfter(SingleLinkedListNode $originNode, $data)
    {
        if ($originNode == null) {
            return false;
        }
        $newNode  = new SingleLinkedListNode();
        $newNode->data = $data;
        $newNode->next = $originNode->next;
        $originNode->next = $newNode;
        $this->length++;
        return true;
    }

    public function buildCycleList()
    {
        $data = [1, 2, 3, 4, 5, 6, 7, 8];
        $node0 = new SingleLinkedListNode($data[0]);
        $node1 = new SingleLinkedListNode($data[1]);
        $node2 = new SingleLinkedListNode($data[2]);
        $node3 = new SingleLinkedListNode($data[3]);
        $node4 = new SingleLinkedListNode($data[4]);
        $node5 = new SingleLinkedListNode($data[5]);
        $node6 = new SingleLinkedListNode($data[6]);
        $node7 = new SingleLinkedListNode($data[7]);
        $this->head->next = $node0;
        $node0->next = $node1;
        $node1->next = $node2;
        $node2->next = $node3;
        $node3->next = $node4;
        $node4->next = $node5;
        $node5->next = $node6;
        $node6->next = $node7;
        $node7->next = $node4;
    }




}