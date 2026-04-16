<?php

namespace DesignPatterns\Behavioral\Command\Commands;

use DesignPatterns\Behavioral\Command\Command;
use DesignPatterns\Behavioral\Command\TextEditor;

class PasteCommand implements Command
{
    private string $pastedText = '';

    public function __construct(
        private readonly TextEditor $editor,
        private readonly int $position,
    ) {
    }

    public function execute(): void
    {
        $this->pastedText = $this->editor->clipboard();

        if ($this->pastedText === '') {
            return;
        }

        $this->editor->insertText($this->position, $this->pastedText);
    }

    public function undo(): void
    {
        if ($this->pastedText === '') {
            return;
        }

        $this->editor->removeText($this->position, strlen($this->pastedText));
    }
}
