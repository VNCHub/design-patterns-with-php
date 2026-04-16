<?php

namespace DesignPatterns\Behavioral\Observer\Observers;

use DesignPatterns\Behavioral\Observer\Observer;
use DesignPatterns\Behavioral\Observer\Order;

class InventoryUpdater implements Observer
{
    public function update(Order $order, string $previousStatus, string $currentStatus): void
    {
        $action = match ($currentStatus) {
            'Paid' => 'reservar itens para separacao',
            'Cancelled' => 'devolver itens reservados ao estoque',
            'Shipped' => 'baixar itens do estoque fisico',
            default => 'nenhuma acao no estoque',
        };

        echo "[Estoque] Pedido {$order->number()}: {$action}." . PHP_EOL;
    }
}
