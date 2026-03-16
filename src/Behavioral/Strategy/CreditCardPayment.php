<?php

namespace DesignPatterns\Behavioral\Strategy;

class CreditCardPayment implements PaymentMethod
{
    public function pay(float $amount): void
    {
        echo "Payment of $$amount made with credit card" . PHP_EOL;
    }
}
