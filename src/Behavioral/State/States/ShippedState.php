<?php

namespace DesignPatterns\Behavioral\State\States;

use DesignPatterns\Behavioral\State\Order;
use DesignPatterns\Behavioral\State\OrderState;
use LogicException;

class ShippedState implements OrderState
{
    public function pay(Order $order): void
    {
        throw new LogicException('Pedido ja foi pago e enviado.');
    }

    public function ship(Order $order): void
    {
        throw new LogicException('Pedido ja foi enviado.');
    }

    public function deliver(Order $order): void
    {
        $order->transitionTo(new DeliveredState());
    }

    public function cancel(Order $order): void
    {
        throw new LogicException('Pedido enviado nao pode ser cancelado.');
    }

    public function name(): string
    {
        return 'Enviado';
    }
}
