<?php
namespace Algo_07;

use Algo_06\SingleLinkedList;

class SingleLinkedListAlgo
{
    public $list;

    public function __construct(SingleLinkedList $list = null)
    {
        $this->list = $list;
    }

    public function setList(SingleLinkedList $list)
    {
        $this->list = $list;
    }

    public function reverse()
    {
        if ($this->list == null || $this->list->head == null || $this->list->head->next == null) {
            return false;
        }
        $preNode = null;
        $curNode = $this->list->head->next;
        $remainNode = null;
        $headNode = $this->list->head;
        $this->list->head->next = null;

        while ($curNode != null) {
            $remainNode = $curNode->next;
            $curNode->next = $preNode;
            $preNode = $curNode;
            $curNode = $remainNode;
        }
        $headNode->next = $preNode;
        return true;
    }

    public function  checkCycle()
    {
        if ($this->list == null || $this->list->head == null || $this->list->head->next == null) {
            return false;
        }
        $slow = $this->list->head->next;
        $fast = $this->list->head->next;

        while ($fast != null && $fast->next != null) {
            $fast = $fast->next->next;
            $slow = $slow->next;
            if ($fast == $slow) {
                return true;
            }
            return false;
        }
    }

    public function mergeSortedList(SingleLinkedList $listA, SingleLinkedList $listB)
    {
        if ($listA == null) {
            return $listB;
        }
        if ($listB == null) {
            return $listA;
        }

    }

}