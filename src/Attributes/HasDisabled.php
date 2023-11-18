<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

interface HasDisabled
{
    public function setDisabled(bool $disabled): self;
    public function getDisabled(): string;
}
