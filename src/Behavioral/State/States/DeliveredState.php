<?php

namespace DesignPatterns\Behavioral\State\States;

use DesignPatterns\Behavioral\State\Order;
use DesignPatterns\Behavioral\State\OrderState;
use LogicException;

class DeliveredState implements OrderState
{
    public function pay(Order $order): void
    {
        throw new LogicException('Pedido ja foi entregue.');
    }

    public function ship(Order $order): void
    {
        throw new LogicException('Pedido ja foi entregue.');
    }

    public function deliver(Order $order): void
    {
        throw new LogicException('Pedido ja foi entregue.');
    }

    public function cancel(Order $order): void
    {
        throw new LogicException('Pedido entregue nao pode ser cancelado.');
    }

    public function name(): string
    {
        return 'Entregue';
    }
}
