<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

interface HasText
{
    public function setText($text): self;
    public function getText(): string;
}
