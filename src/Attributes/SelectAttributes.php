<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class SelectAttributes extends GlobalAttributes
{
    protected FormAttributes $formAttributes;
    protected NameAttribute $name;
    protected array $options = [];
    protected string $selected = '';
    protected DisabledAttribute $disabled;
    protected string $multiple;
    protected int $size;

    public function __construct(array $options = [], ?string $selected = null)
    {
        $this->name = new NameAttribute();
        $this->options = $options ?? self::$options;
        $this->selected = $selected ?? self::$selected;
        $this->disabled = new DisabledAttribute();
        $this->formAttributes = new FormAttributes();
        $this->multiple = '';
    }
    public function render(): string
    {
        $attributes = $this->id ? 'id="' . $this->id . '" ' : '';
        $attributes .= $this->name->getName() ? 'name="' . $this->name->getName() . '" ' : '';
        $attributes .= $this->class ? 'class="' . $this->class . '" ' : '';
        $attributes .= $this->multiple ?? '';
        $attributes .= $this->size ?? '';
        $attributes .= $this->disabled->getDisabled();
        return $attributes;
    }
    public function renderOptions(): string
    {
        $options = '';
        foreach ($this->options as $value => $label) {
            $selectedAttr = ($value == $this->selected) ? 'selected' : '';
            $options .= '<option value="' . $value . '" ' . $selectedAttr . '>' . $label . '</option>';
        }
        return $options;
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
    public function setDisabled(bool $disabled): self
    {
        $this->disabled->setDisabled($disabled);

        return $this;
    }
    public function setMultiple(bool $multiple): self
    {
        $this->multiple = $multiple ? 'multiple' : '';

        return $this;
    }
}
