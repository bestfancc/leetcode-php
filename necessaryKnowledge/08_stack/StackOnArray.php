<?php
namespace Algo_08;

class StackOnArray
{
    public $container = array();
    public $length = 0;

    public function __construct()
    {

    }
    public function pop()
    {
        if ($this->isEmpty()) return false;
        $length = $this->getLength();
        $data = $this->container[$length-1];
        $this->length--;
        return $data;
    }
    public function push($data)
    {
        $this->container[$this->length] = $data;
        $this->length++;
        return true;
    }
    public function top()
    {
        return $this->container[$this->length-1];
    }
    public function getLength()
    {
        return $this->length;
    }
    public function isEmpty()
    {
        if (0 == $this->length) return true;
        return false;
    }
    public function printSelf()
    {
        if ($this->isEmpty()) {
            echo ' empty stack ' . PHP_EOL;
            return false;
        }
        echo 'head.next -> ';
        $container = $this->container;
        for ($i = 0; $i < $this->length; $i++) {
            echo $container[$i] . ' -> ';
        }
        echo 'NULL' . PHP_EOL;
        return true;
    }
}