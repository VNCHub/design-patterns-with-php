<?php 

namespace DesignPatterns\Behavioral\Strategy;

require 'vendor/autoload.php';

$checkout = new Checkout(new PixPayment());

$checkout->completePurchase(150);
