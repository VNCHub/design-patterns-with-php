<?php

namespace DesignPatterns\Behavioral\Observer;

class Order implements Subject
{
    /** @var array<int, Observer> */
    private array $observers = [];

    private string $status = 'Created';

    public function __construct(private readonly string $number)
    {
    }

    public function number(): string
    {
        return $this->number;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function attach(Observer $observer): void
    {
        $this->observers[spl_object_id($observer)] = $observer;
    }

    public function detach(Observer $observer): void
    {
        unset($this->observers[spl_object_id($observer)]);
    }

    public function changeStatus(string $newStatus): void
    {
        $previousStatus = $this->status;

        if ($previousStatus === $newStatus) {
            return;
        }

        $this->status = $newStatus;
        $this->notify($previousStatus, $newStatus);
    }

    public function notify(string $previousStatus, string $currentStatus): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this, $previousStatus, $currentStatus);
        }
    }
}
