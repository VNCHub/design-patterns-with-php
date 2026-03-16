<?php 

namespace DesignPatterns\Behavioral\Strategy;

class Checkout
{
    private PaymentMethod $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function completePurchase(float $amount): void
    {
        $this->paymentMethod->pay($amount);
    }
}
