<?php

namespace DesignPatterns\Behavioral\Command;

use OutOfBoundsException;

class TextEditor
{
    private string $content;
    private string $clipboard = '';

    public function __construct(string $initialContent = '')
    {
        $this->content = $initialContent;
    }

    public function content(): string
    {
        return $this->content;
    }

    public function clipboard(): string
    {
        return $this->clipboard;
    }

    public function setClipboard(string $text): void
    {
        $this->clipboard = $text;
    }

    public function readRange(int $start, int $length): string
    {
        $this->assertRange($start, $length);

        return substr($this->content, $start, $length);
    }

    public function insertText(int $position, string $text): void
    {
        if ($position < 0 || $position > strlen($this->content)) {
            throw new OutOfBoundsException('Posicao de insercao invalida.');
        }

        $this->content = substr($this->content, 0, $position)
            . $text
            . substr($this->content, $position);
    }

    public function removeText(int $start, int $length): string
    {
        $this->assertRange($start, $length);

        $removed = substr($this->content, $start, $length);
        $this->content = substr($this->content, 0, $start)
            . substr($this->content, $start + $length);

        return $removed;
    }

    private function assertRange(int $start, int $length): void
    {
        if ($start < 0 || $length < 0 || ($start + $length) > strlen($this->content)) {
            throw new OutOfBoundsException('Intervalo de texto invalido.');
        }
    }
}
