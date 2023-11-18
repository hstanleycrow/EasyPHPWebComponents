<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

interface HasName
{
    public function setName($name): self;
    public function getName(): string;
}
