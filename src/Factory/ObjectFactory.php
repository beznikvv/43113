<?php
namespace MyApp\Factory;
use MyApp\Model\Brand;
use MyApp\Model\ConfigurableProduct;
use MyApp\Model\Producer;
use MyApp\Model\SimpleProduct;
use MyApp\Model\VirtualProduct;
use MyApp\Storage\StockStorage;
class ObjectFactory

{
   public function create(): array
   {
    $producer= new Producer('producer','website.com');
    $brand = new Brand('Brand', $producer);
$stockStorage= new StockStorage();
    $product1=new SimpleProduct(1,'Koszulka',$brand,999,$stockStorage);
    $product2=new VirtualProduct(2,'Nazwa nazwa',$brand,550,$stockStorage, true);
    $product3= new ConfigurableProduct(3,'sukienka',$brand, 2000,$stockStorage,'GREEN','S');

    return [
       $product1,
        $product2,
        $product3,
    ];
   }

}
