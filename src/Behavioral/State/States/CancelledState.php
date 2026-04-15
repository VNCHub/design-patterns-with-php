<?php

namespace DesignPatterns\Behavioral\State\States;

use DesignPatterns\Behavioral\State\Order;
use DesignPatterns\Behavioral\State\OrderState;
use LogicException;

class CancelledState implements OrderState
{
    public function pay(Order $order): void
    {
        throw new LogicException('Pedido cancelado nao pode ser pago.');
    }

    public function ship(Order $order): void
    {
        throw new LogicException('Pedido cancelado nao pode ser enviado.');
    }

    public function deliver(Order $order): void
    {
        throw new LogicException('Pedido cancelado nao pode ser entregue.');
    }

    public function cancel(Order $order): void
    {
        throw new LogicException('Pedido ja esta cancelado.');
    }

    public function name(): string
    {
        return 'Cancelado';
    }
}
