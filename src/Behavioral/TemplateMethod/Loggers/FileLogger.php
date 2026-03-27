<?php

namespace DesignPatterns\Behavioral\TemplateMethod\Loggers;

use DesignPatterns\Behavioral\TemplateMethod\Logger;

class FileLogger extends Logger
{
    protected function write(string $formattedMessage): void
    {
        echo "Salvando no arquivo: " . $formattedMessage . PHP_EOL;
        file_put_contents("app.log", $formattedMessage . PHP_EOL, FILE_APPEND);
    }
}
