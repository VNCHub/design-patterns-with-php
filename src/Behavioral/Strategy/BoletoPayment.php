<?php

namespace DesignPatterns\Behavioral\Strategy;

class BoletoPayment implements PaymentMethod
{
    public function pay(float $amount): void
    {
        echo "Generated boleto for $$amount" . PHP_EOL;
    }
}
