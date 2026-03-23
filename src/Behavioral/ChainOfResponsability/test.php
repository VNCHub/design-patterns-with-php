<?php

namespace DesignPatterns\Behavioral\ChainOfResponsability;

require './vendor/autoload.php';

use DesignPatterns\Behavioral\ChainOfResponsability\handlers\AuthValidationHandler;
use DesignPatterns\Behavioral\ChainOfResponsability\handlers\FinalHandler;
use DesignPatterns\Behavioral\ChainOfResponsability\handlers\SanitizeHandler;
use DesignPatterns\Behavioral\ChainOfResponsability\handlers\SqlInjectionCheckHandler;
use DesignPatterns\Behavioral\ChainOfResponsability\handlers\XssCheckHandler;

$request = new Request([
    'username' => ' Vinicius ',
    'message' => 'Hello World',
    'token' => '123'
]);

$sanitize = new SanitizeHandler();
$sqlCheck = new SqlInjectionCheckHandler();
$xssCheck = new XssCheckHandler();
$auth = new AuthValidationHandler();
$final = new FinalHandler();

$sanitize
    ->setNext($sqlCheck)
    ->setNext($xssCheck)
    ->setNext($auth)
    ->setNext($final);

$sanitize->handle($request);
