<?php

namespace DesignPatterns\Behavioral\State\States;

use DesignPatterns\Behavioral\State\Order;
use DesignPatterns\Behavioral\State\OrderState;
use LogicException;

class PendingPaymentState implements OrderState
{
    public function pay(Order $order): void
    {
        $order->transitionTo(new PaidState());
    }

    public function ship(Order $order): void
    {
        throw new LogicException('Pedido ainda nao foi pago.');
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
        return 'Aguardando pagamento';
    }
}
