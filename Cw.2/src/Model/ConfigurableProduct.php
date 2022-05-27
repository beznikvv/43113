<?php
namespace MyApp\Model;
use MyApp\Storage\StockStorage;

class ConfigurableProduct extends Product{

    private string $color;
    private string $size;

    public function __construct(int $id, string $name, Brand $brand, int $price,StockStorage $stockStorage, string $color, string $size)
    {
        parent::__construct($id, $name, $brand, $price, $stockStorage);
        $this->color = $color;
        $this->size = $size;
    }

    public function getColor(): string
    {
        return $this->color;
    }


    public function getSize(): string
    {
        return $this->size;
    }





    public function isAvailable(): bool
    {
        return $this->stockStorage->checkIfIsAvailable();
    }
}


