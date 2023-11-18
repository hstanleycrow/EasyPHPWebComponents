<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class NameAttribute implements HasName
{
    protected string $name = '';
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }
    public function getName(): string
    {
        return $this->name;
    }
}
