<?php

namespace DesignPatterns\Behavioral\Command;

class CommandHistory
{
    /** @var Command[] */
    private array $undoStack = [];

    /** @var Command[] */
    private array $redoStack = [];

    public function executeCommand(Command $command): void
    {
        $command->execute();
        $this->undoStack[] = $command;
        $this->redoStack = [];
    }

    public function undo(): void
    {
        $command = array_pop($this->undoStack);

        if ($command === null) {
            echo "Nada para desfazer." . PHP_EOL;
            return;
        }

        $command->undo();
        $this->redoStack[] = $command;
    }

    public function redo(): void
    {
        $command = array_pop($this->redoStack);

        if ($command === null) {
            echo "Nada para refazer." . PHP_EOL;
            return;
        }

        $command->execute();
        $this->undoStack[] = $command;
    }
}
