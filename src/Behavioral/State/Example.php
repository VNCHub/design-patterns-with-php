<?php

namespace DesignPatterns\Behavioral\State;

require './vendor/autoload.php';

use LogicException;

$order = new Order('PED-2026-0001');

echo "Status inicial: {$order->status()}" . PHP_EOL;

$order->pay();
$order->ship();

try {
    $order->cancel();
} catch (LogicException $e) {
    echo "Erro: {$e->getMessage()}" . PHP_EOL;
}

$order->deliver();

echo "Status final: {$order->status()}" . PHP_EOL;
