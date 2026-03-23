<?php

namespace DesignPatterns\Behavioral\ChainOfResponsability\handlers;

use DesignPatterns\Behavioral\ChainOfResponsability\Handler;
use DesignPatterns\Behavioral\ChainOfResponsability\Request;

class AuthValidationHandler extends Handler
{
    public function handle(Request $request)
    {
        if (!isset($request->data['token']) || $request->data['token'] !== '123') {
            echo "Token inválido!\n";
            exit;
        }

        echo "AuthValidationHandler executado\n";

        return parent::handle($request);
    }
}
