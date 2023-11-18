<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class DisabledAttribute implements HasDisabled
{
    protected string $disabled;
    public function setDisabled(bool $disabled): self
    {
        $this->disabled = '';
        if ($disabled) {
            $this->disabled = 'disabled="disabled"';
        }
        return $this;
    }
    public function getDisabled(): string
    {
        return $this->disabled;
    }
}
