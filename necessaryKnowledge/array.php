<?php
//手打代码学习基础数据结构，来自 https://github.com/wangzheng0822/algo/blob/master/php/05_array/array.php
/**
 * 简单的数组类
 */
class MyArray
{
    
    //数据
    private $data;
    //容量
    private $capacity;
    //长度
    private $length;

    /**
     * MyArray constructor.
     * @param $capacity
     */
    public function __construct($capacity)
    {
        $capacity = intval($capacity);
        if ($capacity <= 0) {
            return null;
        }
        $this->data = array();
        $this->capacity = $capacity;
        $this->length = 0;
    }

    /**
     * 检查数组是否已满
     * @return bool
     */
    public function checkIfFull()
    {
        if ($this->capacity == $this->length) {
            return true;
        }
        return false;
    }

    /**
     * 索引index是否超出数组的范围
     * @param $index
     * @return bool
     */
    public function checkOutOfRange($index)
    {
        if ($index > $this->length+1) {
            return true;
        }
        return false;
    }

    /**
     * 在索引index位置插入value，返回错误码，0为插入成功
     * @param $index
     * @param $value
     * @return int
     */
    public function insert($index, $value)
    {
        $index = intval($index);
        $value = intval($value);
        if ($index < 0) {
            return 1;   //索引值不合规
        }
        if ($this->checkIfFull()) {
            return 2;   //数组已满
        }
        if ($this->checkOutOfRange($index)) {
            return 3;   //索引超出数组的范围
        }
        $this->data[$index] = $value;
        $this->length++;
        return 0;
    }

    /**
     * 删除索引index上的值，并返回
     * @param $index
     * @return array
     */
    public function delete($index)
    {
        $value = 0;
        $index = intval($index);
        if ($index < 0) {
            $code = 1;
            return array($code, $value);
        }
        if ($index != $this->length + 1 && $this->checkOutOfRange($index)) {  //为什么有个index != this->length + 1  的判断
            $code = 2;
            return array($code, $value);
        }
        $value = $this->data[$index];
        for ($i = $index; $i < $this->length-1; $i++) {
            $this->data[$i] = $this->data[$i+1];
        }
        $this->length--;
        return array(0, $value);
    }

    /**
     * 查找索引index的值
     * @param $index
     * @return array
     */
    public function find($index)
    {
        $value = 0;
        $index = intval($index);
        if ($index < 0) {
            $code = 1;
            return array($code, $value);
        }
        if ($this->checkOutOfRange($index)) {
            $code = 2;
            return array($code, $value);
        }
        return array(0, $this->data[$index]);
    }

    public function printData()
    {
        $format = "";
        for ($i = 0; $i < $this->length; $i++) {
            $format .= "|" . $this->data[$i];
        }
        print_r($format.'\n');
    }
}