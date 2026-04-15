<?php

namespace DesignPatterns\Behavioral\State;

interface OrderState
{
    public function pay(Order $order): void;

    public function ship(Order $order): void;

    public function deliver(Order $order): void;

    public function cancel(Order $order): void;

    public function name(): string;
}
