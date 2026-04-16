<?php

namespace DesignPatterns\Behavioral\Observer\Observers;

use DesignPatterns\Behavioral\Observer\Observer;
use DesignPatterns\Behavioral\Observer\Order;

class OrderLogger implements Observer
{
    public function update(Order $order, string $previousStatus, string $currentStatus): void
    {
        $timestamp = date('Y-m-d H:i:s');
        echo "[Log {$timestamp}] Pedido {$order->number()}: {$previousStatus} -> {$currentStatus}" . PHP_EOL;
    }
}
