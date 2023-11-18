<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class FormNoValidateComponent
{
    protected string $formnovalidate;

    public function setFormNoValidate(string $formnovalidate)
    {
        $this->formnovalidate = $formnovalidate;
    }
}
