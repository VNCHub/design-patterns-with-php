<?php

namespace DesignPatterns\Behavioral\Observer;

require './vendor/autoload.php';

use DesignPatterns\Behavioral\Observer\Observers\EmailNotifier;
use DesignPatterns\Behavioral\Observer\Observers\InventoryUpdater;
use DesignPatterns\Behavioral\Observer\Observers\OrderLogger;

$order = new Order('PED-2026-0042');

$order->attach(new EmailNotifier());
$order->attach(new OrderLogger());
$order->attach(new InventoryUpdater());

echo "Status inicial: {$order->status()}" . PHP_EOL;

echo PHP_EOL . 'Alterando para Paid...' . PHP_EOL;
$order->changeStatus('Paid');

echo PHP_EOL . 'Alterando para Shipped...' . PHP_EOL;
$order->changeStatus('Shipped');

echo PHP_EOL . 'Alterando para Delivered...' . PHP_EOL;
$order->changeStatus('Delivered');
