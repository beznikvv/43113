<?php
namespace MyApp\Model;
use MyApp\Storage\StockStorage;


class VirtualProduct extends Product
{
    private bool $isSubscription;


    public function __construct(int $id, string $name, Brand $brand, int $price, StockStorage $stockStorage, bool $isSubscription)
    {
        parent::__construct($id, $name, $brand, $price, $stockStorage);
        $this->isSubscription = $isSubscription;
    }

    public function isAvailable(): bool
    {
        return true;
    }

    public function isSubscription(): bool
    {
        return $this->isSubscription;
    }

}