<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class Logger
{
    final public function log(string $message): void
    {
        $timestamp = $this->addTimestamp();
        $formatted = $this->formatMessage($timestamp, $message);
        $this->write($formatted);
    }

    protected function addTimestamp(): string
    {
        return date('Y-m-d H:i:s');
    }

    protected function formatMessage(string $timestamp, string $message): string
    {
        return "[{$timestamp}] {$message}";
    }

    abstract protected function write(string $formattedMessage): void;
}
