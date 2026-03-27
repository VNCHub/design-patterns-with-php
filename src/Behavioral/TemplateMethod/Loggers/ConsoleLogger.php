<?php

namespace DesignPatterns\Behavioral\TemplateMethod\Loggers;

use DesignPatterns\Behavioral\TemplateMethod\Logger;

class ConsoleLogger extends Logger
{
    protected function write(string $formattedMessage): void
    {
        echo "Enviando para o console: " . $formattedMessage . PHP_EOL;
    }
}
