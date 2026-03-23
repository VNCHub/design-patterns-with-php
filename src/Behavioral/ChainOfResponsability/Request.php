<?php

namespace DesignPatterns\Behavioral\ChainOfResponsability;

class Request
{
    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}