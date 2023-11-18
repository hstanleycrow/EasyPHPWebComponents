<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class ButtonAttributes extends GlobalAttributes
{
    protected FormAttributes $formAttributes;
    protected FormMethodComponent $formMethodComponent;
    protected FormNoValidateComponent $formNoValidateComponent;
    protected FormTargetComponent $formTargetComponent;
    protected TextAttribute $buttonText;
    protected DisabledAttribute $disabled;
    protected NameAttribute $name;
    protected string $type;
    protected string $value;

    public function __construct()
    {
        $this->buttonText = new TextAttribute();
        $this->disabled = new DisabledAttribute();
        $this->name = new NameAttribute();
        $this->formAttributes = new FormAttributes();
        $this->formMethodComponent = new FormMethodComponent();
        $this->formNoValidateComponent = new FormNoValidateComponent();
        $this->formTargetComponent = new FormTargetComponent();
    }

    public function render(): string
    {
        $attributes = $this->id ? 'id="' . $this->id . '" ' : '';
        $attributes .= $this->name->getName() ? 'name="' . $this->name->getName() . '" ' : '';
        $attributes .= $this->class ? 'class="' . $this->class . '" ' : '';
        $attributes .= $this->type ? 'type="' . $this->type . '" ' : '';
        $attributes .= $this->disabled->getDisabled();
        return $attributes;
    }
    public function getButtonText()
    {
        return $this->buttonText->getText();
    }

    /**
     * Set the value of buttonText
     *
     * @return  self
     */
    public function setButtonText($text): self
    {
        if (empty($text)) {
            throw new \InvalidArgumentException('Button text cannot be empty');
        }
        $this->buttonText->setText($text);

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name->getName();
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name): self
    {
        $this->name->setName($name);

        return $this;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function setDisabled(bool $disabled): self
    {
        $this->disabled->setDisabled($disabled);

        return $this;
    }
}
