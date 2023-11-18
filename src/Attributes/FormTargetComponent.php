<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class FormTargetComponent
{
    protected string $formtarget;

    public function setFormTarget(string $formtarget)
    {
        $this->formtarget = $formtarget;
    }
}
