<?php

namespace hstanleycrow\EasyPHPWebComponents;


use hstanleycrow\EasyPHPWebComponents\Attributes\ButtonAttributes;

class Button
{
    protected ButtonAttributes $buttonAttributes;

    /**
     * Constructor for the class.
     *
     * @param string $buttonText The text to be displayed on the button.
     */
    public function __construct(string $buttonText, ?string $type = 'button')
    {
        $this->buttonAttributes = new ButtonAttributes();
        $this->buttonAttributes->setButtonText($buttonText);
        $this->buttonAttributes->setType($type);
        $this->setDisabled(false);
    }
    /**
     * Renders the button element with the given attributes.
     *
     * @param array|null $attributes The attributes to apply to the button element.
     * @return string The rendered button HTML.
     */

    public function render(): string
    {
        $button = '<button ';
        $button .= $this->buttonAttributes->render();
        $button .= '>';
        $button .= $this->buttonAttributes->getButtonText();
        $button .= '</button>';
        return $button;
    }

    public function addClass(string $class): self
    {
        $this->buttonAttributes->addClass($class);
        return $this;
    }

    public function setId(string $id): self
    {
        $this->buttonAttributes->setId($id);
        return $this;
    }
    public function setDisabled(bool $disabled): self
    {
        $this->buttonAttributes->setDisabled($disabled);
        return $this;
    }
}
