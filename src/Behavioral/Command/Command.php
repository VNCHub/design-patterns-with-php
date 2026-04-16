<?php

namespace DesignPatterns\Behavioral\Command;

interface Command
{
    public function execute(): void;

    public function undo(): void;
}
