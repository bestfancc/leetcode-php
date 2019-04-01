<?php
namespace Algo_09;

use Algo_06\SingleLinkedListNode;

class QueueOnLinkedList
{
    public $head;
    public $tail;
    public $length;

    public function __construct()
    {
        $this->head = new SingleLinkedListNode();
        $this->tail = $this->head;
        $this->length = 0;
    }

    public function enqueue($data)
    {
        $newNode = new SingleLinkedListNode($data);

        $newNode->next = $this->tail->next;
        $this->tail = $newNode;
        $this->length++;
    }

    public function dequeue()
    {
        if (0 == $this->length) {
            return false;
        }
        $node = $this->head->next;
        $this->head->next = $this->head->next->next;
        $this->length--;
        return$node;
    }
    public function getLength()
    {
        return $this->length;
    }

    public function printSelt()
    {
        if (0 == $this->length) {
            echo 'empty queue' . PHP_EOL;
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
}
