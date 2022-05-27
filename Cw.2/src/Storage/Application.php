<?php
namespace MyApp\Storage;
use MyApp\Calculator\SumCalculator;
use MyApp\Calculator\SumWithTaxCalculator;
use MyApp\Factory\ObjectFactory;
class Application{
    public function run(): void
    {
        $sumCalculator= new SumCalculator();
        $taxCalculator=new SumWithTaxCalculator();
        $factory = new ObjectFactory();
        $storage = new StockStorage();
        $products = $factory->create();
        foreach ($products as $product) {
            $storage->addProduct($product,10);
        }
print sprintf('Suma produktów: %d',$sumCalculator->calculate($products)) ;
        print sprintf('Suma produktów + podatek: %d', $taxCalculator->calculate($products)) ;
        print sprintf('Ilość produktów: %d', $storage->getTotalStockAmount());
    }
}

