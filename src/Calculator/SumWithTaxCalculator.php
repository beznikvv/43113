<?php
namespace MyApp\Calculator;
class SumWithTaxCalculator implements  CalculatorInterface
{
    private const TAX_RATE=1.23;
    public function calculate(array $product): int
    {
        $sum = 0;
        foreach ($product as $product) {
            /** @var Product  $product */
            $priceWithTax=(int)($product->getPrice()*100*self::TAX_RATE)/100;
            $sum += $priceWithTax;

        }
        return $sum;
    }
}

