<?php

interface FifoInterface
{
    public function enqueue($item);
    public function dequeue();

}