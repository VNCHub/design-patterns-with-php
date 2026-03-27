<?php

namespace DesignPatterns\Behavioral\TemplateMethod\Loggers;

use DesignPatterns\Behavioral\TemplateMethod\Logger;

class DatabaseLogger extends Logger
{
    protected function write(string $formattedMessage): void
    {
        echo "Salvando no banco: " . $formattedMessage . PHP_EOL;
    }
}
