<?php
namespace Algo_07;

use Algo_06\SingleLinkdListNode;
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
        $pListA = $listA->head->next;
        $pListB = $listB->head->next;
        $newList = new SingleLinkdList();
        $newHead = $newList->head;
        $newRootNode = $newHead;
        while ($pListA != null && $pListB != null) {
            if ($pListA->data <= $pListB->data) {
                $newRootNode->next = $pListA;
                $pListA = $pListA->next;
            } else {
                $newRootNode->next = $pListB;
                $pListB = $pListB->next;
            }
            $newRootNode = $newRootNode->next;
        }
        if ($pListA != null) {
            $newRootNode->next = $pListA;
        }
        if ($pListB != null) {
            $newRootNode->next = $pListB;
        }
        return $newList;
    }

    //自己写的，比原作者的代码少了一次while使用
    public function deleteLastKth($index)
    {
        if ($this->list == null || $this->list->head || $this->list->head->next) {
            return false;
        }
        $i = 0;
        $headA = $this->list->head->next;
        $headB = $this->list->head->next;
        while ($headA != null) {
            $i++;
            $headA = $headA->next;
            if ($index >= 0) {
                $index--;
            } else {
                $headB = $headB->next;
            }
        }
        if ($index == 0) return $this->list->head->next->next;
        $headB->next = $headB->next->next;
        return $this->list->head->next;
    }

    public function findMiddleNode()
    {
        if ($this->list == null || $this->list->head == null || $this->list->head->next == null) {
            return false;
        }
        $fast = $this
    }

}