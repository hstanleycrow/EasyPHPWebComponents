<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class FormAttributes
{
    protected ?string $form;
    protected ?string $formaction;
    protected ?string $formenctype;

    public function __construct(?string $form = null, ?string $formaction = null, ?string $formenctype = null)
    {
        $this->form = $form;
        $this->formaction = $formaction;
        $this->formenctype = $formenctype;
    }
}
