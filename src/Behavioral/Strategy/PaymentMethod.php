<?php

namespace DesignPatterns\Behavioral\Strategy;

interface PaymentMethod
{
    public function pay(float $amount): void;
}
