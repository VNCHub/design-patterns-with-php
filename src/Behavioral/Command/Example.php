<?php

namespace DesignPatterns\Behavioral\Command;

require './vendor/autoload.php';

use DesignPatterns\Behavioral\Command\Commands\CopyCommand;
use DesignPatterns\Behavioral\Command\Commands\DeleteCommand;
use DesignPatterns\Behavioral\Command\Commands\PasteCommand;

$editor = new TextEditor('Design Patterns em PHP');
$history = new CommandHistory();

echo "Inicial: {$editor->content()}" . PHP_EOL;

$history->executeCommand(new CopyCommand($editor, 0, 6));
echo "Clipboard apos copy: {$editor->clipboard()}" . PHP_EOL;

$history->executeCommand(new DeleteCommand($editor, 0, 7));
echo "Apos delete: {$editor->content()}" . PHP_EOL;

$history->executeCommand(new PasteCommand($editor, strlen($editor->content())));
echo "Apos paste: {$editor->content()}" . PHP_EOL;

$history->undo();
echo "Undo 1 (paste): {$editor->content()}" . PHP_EOL;

$history->undo();
echo "Undo 2 (delete): {$editor->content()}" . PHP_EOL;

$history->redo();
echo "Redo 1 (delete): {$editor->content()}" . PHP_EOL;
