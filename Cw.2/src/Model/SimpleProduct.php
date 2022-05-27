<?php
namespace MyApp\Model;
class SimpleProduct extends Product{

    public function isAvailable(): bool
    {
        return $this->stockStorage->checkIfIsAvailable();
    }
}


?>