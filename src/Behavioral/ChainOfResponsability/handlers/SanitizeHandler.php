<?php

namespace DesignPatterns\Behavioral\ChainOfResponsability\handlers;

use DesignPatterns\Behavioral\ChainOfResponsability\Handler;
use DesignPatterns\Behavioral\ChainOfResponsability\Request;

class SanitizeHandler extends Handler
{
    public function handle(Request $request)
    {
        foreach ($request->data as $key => $value) {
            $request->data[$key] = trim(strip_tags($value));
        }

        echo "SanitizeHandler executado" . PHP_EOL;

        return parent::handle($request);
    }
}