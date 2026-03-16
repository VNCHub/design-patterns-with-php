<?php

namespace DesignPatterns\Behavioral\Strategy;

class PixPayment implements PaymentMethod
{
    public function pay(float $amount): void
    {
        echo "Payment of $$amount made using PIX" . PHP_EOL;
    }
}
