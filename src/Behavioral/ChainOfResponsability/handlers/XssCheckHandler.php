<?php

namespace DesignPatterns\Behavioral\ChainOfResponsability\handlers;

use DesignPatterns\Behavioral\ChainOfResponsability\Handler;
use DesignPatterns\Behavioral\ChainOfResponsability\Request;

class XssCheckHandler extends Handler
{
    public function handle(Request $request)
    {
        foreach ($request->data as $value) {

            if (preg_match('/<script.*?>/i', $value)) {
                echo "Possível XSS detectado!\n";
                exit;
            }
        }

        echo "XssCheckHandler executado\n";

        return parent::handle($request);
    }
}
