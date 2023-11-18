<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

interface HasClass
{
    public function addClass($class): self;
    public function getClass(): string;
}
