<?php
namespace MyApp\Calculator;
class SumCalculator implements CalculatorInterface
{

    public function calculate(array $product): int
    {
        $sum = 0;
        foreach ($product as $product) {
    /** @var Product  $product */

            $sum += $product->getPrice();

        }
        return $sum;
    }
}

