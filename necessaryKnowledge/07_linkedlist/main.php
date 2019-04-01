<?php

namespace Algo_07;


//require '../06_linkedlist/SingleLinkedList.php';

use Algo_06\SingleLinkedListNode;
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
        }
        return false;
    }

    public function mergeSortedList(SingleLinkedList $listA, SingleLinkedList $listB)
    {
        if (null == $listA) {
            return $listB;
        }
        if (null == $listB) {
            return $listA;
        }
        $pListA = $listA->head->next;
        $pListB = $listB->head->next;
        $newList = new SingleLinkedList();
        $newHead = $newList->head;
        if ($pListA->data <= $pListB->data) {
            $newHead = $pListA;
            $pListA = $pListA->next;
        } else {
            $newHead = $pListB;
            $pListB = $pListB->next;
        }
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
        // 如果第一个链表未处理完，拼接到新链表后面
        if ($pListA != null) {
            $newRootNode->next = $pListA;
        }
        // 如果第二个链表未处理完，拼接到新链表后面
        if ($pListB != null) {
            $newRootNode->next = $pListB;
        }
        $newList->head->next = $newHead;
        return $newList;
    }

    //自己写的，比原作者的代码少了一次while使用
    public function deleteLastKth($index)
    {
        if ($this->list == null || $this->list->head == null || $this->list->head->next == null) {
            return false;
        }
        $i = 0;
        $headA = $this->list->head->next;
        $headB = $this->list->head->next;
        while ($headA != null) {
            $i++;
            $headA = $headA->next;
            if ($index > 0) {
                $index--;
            } else {
                $headB = $headB->next;
            }
        }
        if ($index == 0) {
            $this->list->head->next = $this->list->head->next->next;
            return true;
        }
        if ($index > 0) return true;
        $headB->next = $headB->next->next;
        return false;
    }

    public function findMiddleNode()
    {
        if ($this->list == null || $this->list->head == null || $this->list->head->next == null) {
            return false;
        }
        $fast = $this->list->head->next;
        $slow = $this->list->head->next;

        while ($fast != null && $fast->next != null) {
            $fast = $fast->next->next;
            $slow = $slow->next;
        }
        return $slow;
    }

}


echo '---------------------- 单链表反转 ----------------------' . PHP_EOL . PHP_EOL;
$list = new SingleLinkedList();
$list->insert(1);
$list->insert(2);
$list->insert(3);
$list->insert(6);
$list->insert(5);
$list->insert(6);
$list->insert(7);
// 单链表反转
$listAlgo = new SingleLinkedListAlgo($list);
$listAlgo->list->printList();
$listAlgo->reverse();
$listAlgo->list->printList();
echo '--------------------------------------------------------' . PHP_EOL . PHP_EOL;
echo '---------------------- 链表中环的检测 ----------------------'. PHP_EOL . PHP_EOL;
// 链表中环的检测
$listCircle = new SingleLinkedList();
$listCircle->buildCycleList();
$listAlgo->setList($listCircle);
//$listAlgo->list->printList();
var_dump($listAlgo->checkCycle());
echo '------------------------------------------------------------' . PHP_EOL . PHP_EOL;
echo '---------------------- 两个有序的链表合并 ----------------------' . PHP_EOL . PHP_EOL;
// 两个有序的链表合并
$listA = new SingleLinkedList();
$listA->insert(9);
$listA->insert(7);
$listA->insert(5);
$listA->insert(3);
$listA->insert(1);
$listA->printList();
$listB = new SingleLinkedList();
$listB->insert(10);
$listB->insert(8);
$listB->insert(6);
$listB->insert(4);
$listB->insert(2);
$listB->printList();
$listAlgoMerge = new SingleLinkedListAlgo();
$newList = $listAlgoMerge->mergeSortedList($listA, $listB);
$newList->printList();
echo '----------------------------------------------------------------'. PHP_EOL . PHP_EOL;
echo '---------------------- 删除链表倒数第n个结点 ----------------------' . PHP_EOL . PHP_EOL;
// 删除链表倒数第n个结点
$listDelete = new SingleLinkedList();
$listDelete->insert(1);
$listDelete->insert(2);
$listDelete->insert(3);
$listDelete->insert(4);
$listDelete->insert(5);
$listDelete->insert(6);
$listDelete->insert(7);
$listDelete->printList();
$listAlgo->setList($listDelete);
$listAlgo->deleteLastKth(3);
$listDelete->printList();
echo '------------------------------------------------------------------'. PHP_EOL . PHP_EOL;
echo '---------------------- 求链表的中间结点 ----------------------' . PHP_EOL . PHP_EOL;
// 求链表的中间结点
$listAlgo->list->printList();
$middleNode = $listAlgo->findMiddleNode();
var_dump($middleNode->data);
echo '-------------------------------------------------------------'. PHP_EOL . PHP_EOL;