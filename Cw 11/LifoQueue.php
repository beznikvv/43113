<?php
require_once 'LifoInterface.php';
class LifoQueue implements LifoInterface
{
    private $values;


    public function __construct()
    {
        $this->values = array();


    }

    public function push($item)
    {


        $this->values[]=$item;


    }

    public function pop()
    {
        return array_pop($this->values);
    }
}
$lifo = new LifoQueue();
$lifo->push('1');
$lifo->push('2');
$lifo->push('3');
$lifo->push('4');
$lifo->pop();
print_r($lifo);
