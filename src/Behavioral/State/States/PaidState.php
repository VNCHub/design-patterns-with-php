<?php

namespace DesignPatterns\Behavioral\State\States;

use DesignPatterns\Behavioral\State\Order;
use DesignPatterns\Behavioral\State\OrderState;
use LogicException;

class PaidState implements OrderState
{
    public function pay(Order $order): void
    {
        throw new LogicException('Pedido ja foi pago.');
    }

    public function ship(Order $order): void
    {
        $order->transitionTo(new ShippedState());
    }

    public function deliver(Order $order): void
    {
        throw new LogicException('Pedido precisa ser enviado antes de ser entregue.');
    }

    public function cancel(Order $order): void
    {
        $order->transitionTo(new CancelledState());
    }

    public function name(): string
    {
        return 'Pago';
    }
}
