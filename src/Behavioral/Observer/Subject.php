<?php

namespace DesignPatterns\Behavioral\Observer;

interface Subject
{
    public function attach(Observer $observer): void;

    public function detach(Observer $observer): void;

    public function notify(string $previousStatus, string $currentStatus): void;
}
