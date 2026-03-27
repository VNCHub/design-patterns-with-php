<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

require './vendor/autoload.php';

use DesignPatterns\Behavioral\TemplateMethod\Loggers\ConsoleLogger;
use DesignPatterns\Behavioral\TemplateMethod\Loggers\DatabaseLogger;
use DesignPatterns\Behavioral\TemplateMethod\Loggers\FileLogger;

$fileLogger = new FileLogger();
$fileLogger->log("Usuário logado");

$consoleLogger = new ConsoleLogger();
$consoleLogger->log("Erro na API");

$databaseLogger = new DatabaseLogger();
$databaseLogger->log("Pagamento aprovado");