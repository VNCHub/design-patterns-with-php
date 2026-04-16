<?php

namespace DesignPatterns\Behavioral\Observer\Observers;

use DesignPatterns\Behavioral\Observer\Observer;
use DesignPatterns\Behavioral\Observer\Order;

class EmailNotifier implements Observer
{
    public function update(Order $order, string $previousStatus, string $currentStatus): void
    {
        echo "[Email] Pedido {$order->number()} mudou de {$previousStatus} para {$currentStatus}." . PHP_EOL;
    }
}
