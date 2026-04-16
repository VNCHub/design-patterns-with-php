<?php

namespace DesignPatterns\Behavioral\Command\Commands;

use DesignPatterns\Behavioral\Command\Command;
use DesignPatterns\Behavioral\Command\TextEditor;

class CopyCommand implements Command
{
    private string $previousClipboard = '';

    public function __construct(
        private readonly TextEditor $editor,
        private readonly int $start,
        private readonly int $length,
    ) {
    }

    public function execute(): void
    {
        $this->previousClipboard = $this->editor->clipboard();
        $selection = $this->editor->readRange($this->start, $this->length);
        $this->editor->setClipboard($selection);
    }

    public function undo(): void
    {
        $this->editor->setClipboard($this->previousClipboard);
    }
}
