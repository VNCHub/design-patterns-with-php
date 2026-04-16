<?php

namespace DesignPatterns\Behavioral\Command\Commands;

use DesignPatterns\Behavioral\Command\Command;
use DesignPatterns\Behavioral\Command\TextEditor;

class DeleteCommand implements Command
{
    private string $deletedText = '';

    public function __construct(
        private readonly TextEditor $editor,
        private readonly int $start,
        private readonly int $length,
    ) {
    }

    public function execute(): void
    {
        $this->deletedText = $this->editor->removeText($this->start, $this->length);
    }

    public function undo(): void
    {
        $this->editor->insertText($this->start, $this->deletedText);
    }
}
