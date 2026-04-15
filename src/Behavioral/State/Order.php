<?php

namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\States\PendingPaymentState;

class Order
{
    private OrderState $state;

    public function __construct(private readonly string $number)
    {
        $this->state = new PendingPaymentState();
    }

    public function number(): string
    {
        return $this->number;
    }

    public function status(): string
    {
        return $this->state->name();
    }

    public function pay(): void
    {
        $this->state->pay($this);
    }

    public function ship(): void
    {
        $this->state->ship($this);
    }

    public function deliver(): void
    {
        $this->state->deliver($this);
    }

    public function cancel(): void
    {
        $this->state->cancel($this);
    }

    public function transitionTo(OrderState $state): void
    {
        $from = $this->state->name();
        $this->state = $state;

        echo "Pedido {$this->number}: {$from} -> {$this->state->name()}" . PHP_EOL;
    }
}
