<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class TextAttribute implements HasText
{
    protected string $text;
    public function setText($text): self
    {
        $this->text = $text;
        return $this;
    }
    public function getText(): string
    {
        return $this->text;
    }
}
