<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class FormMethodComponent
{
    protected string $formmethod;

    public function setFormMethod(string $formmethod)
    {
        $this->formmethod = $formmethod;
    }
}
