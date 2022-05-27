<?php
require_once 'FifoInterface.php';
class FifoQueue implements FifoInterface
{
    private $values;


    public function __construct()
    {
        $this->values = array();


    }

    public function enqueue($item)
    {

        array_unshift($this->values, $item);


    }

    public function dequeue()
    {
        return array_pop($this->values);
    }
}
$fifo= new FifoQueue();
$fifo->enqueue('1');
$fifo->enqueue('2');
$fifo->enqueue('3');
$fifo->enqueue('4');
$fifo->dequeue(); 
print_r($fifo);
