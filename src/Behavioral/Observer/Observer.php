<?php

namespace DesignPatterns\Behavioral\Observer;

interface Observer
{
    public function update(Order $order, string $previousStatus, string $currentStatus): void;
}
