<?php

namespace DesignPatterns\Behavioral\ChainOfResponsability\handlers;

use DesignPatterns\Behavioral\ChainOfResponsability\Handler;
use DesignPatterns\Behavioral\ChainOfResponsability\Request;

class SqlInjectionCheckHandler extends Handler
{
    public function handle(Request $request)
    {
        foreach ($request->data as $value) {

            if (preg_match('/(select|drop|insert|delete|--)/i', $value)) {
                echo "Possível SQL Injection detectado!\n";
                exit;
            }
        }

        echo "SqlInjectionCheckHandler executado\n";

        return parent::handle($request);
    }
}