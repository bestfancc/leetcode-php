<?php
namespace Algo_09;

class LoopQueue
{
    private $maxSize;
    private $data = [];
    private $head = 0;
    private $tail = 0;

    public function __construct($size = 10)
    {
        $this->maxSize = ++$size;
    }
    public function enQueue($data)
    {
        if (($this->tail + 1) % $this->maxSize == $this->head) {
            return false;
        }
        $this->data[$this->tail] = $data;
        $this->tail = (++$this->tail) % $this->maxSize;
        return true;
    }
    public function isFull()
    {
        if ($this->tail >= $this->maxSize) {
            return true;
        }
        return false;
    }
    public function deQueue()
    {
        if ($this->tail == $this->head) {
            return null;
        }
        $data = $this->data[$this->head];
        unset($this->data[$this->head]);
        $this->head = (++$this->head) % $this->maxSize;
        return $data;
    }
    public function getLength()
    {
        return ($this->tail - $this->head + $this->maxSize) % $this->maxSize;
    }


}

$queue = new LoopQueue(4);
// var_dump($queue);
$queue->enQueue(1);
//var_dump($queue);
$queue->enQueue(2);
//var_dump($queue);
$queue->enQueue(3);
$queue->enQueue(4);
// $queue->enQueue(5);
var_dump($queue->getLength());
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
var_dump($queue);
