<?php

namespace DesignPatterns\Behavioral\ChainOfResponsability\handlers;

use DesignPatterns\Behavioral\ChainOfResponsability\Handler;
use DesignPatterns\Behavioral\ChainOfResponsability\Request;

class FinalHandler extends Handler
{
    public function handle(Request $request)
    {
        echo "Request tratada com sucesso!\n";
        print_r($request->data);
    }
}
