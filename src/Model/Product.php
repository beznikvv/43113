<?php
namespace MyApp\Model;

use MyApp\Storage\StockStorage;
abstract class Product {
    private int $id;
    private string $name;
    private Brand $brand;
    private int $price;
    protected StockStorage $stockStorage;

    function __construct(int $id, string $name, Brand $brand, int $price, StockStorage $stockStorage) {
        $this->id=$id;
        $this->name=$name;
        $this->brand=$brand;
        $this->price=$price;
        $this->stockStorage = $stockStorage;
    }


    public function getPrice(): int
    {
        return $this->price;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getName($name): string
    {
        return $this->name = $name;
    }
    public function getBrand($brand): Brand
    {
        return $this->brand = $brand;
    }
    public function getFullName():string
    {
        return $this->name.$this->brand->getName(). $this->brand->getProducer()->getName();
    }
    abstract public function isAvailable() : bool;

}



