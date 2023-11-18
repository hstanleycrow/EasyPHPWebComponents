<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes\SelectAttributes;

class Select
{
    protected SelectAttributes $selectAttributes;

    public function __construct(array $options = [], ?string $selected = null)
    {
        $this->selectAttributes = new SelectAttributes($options, $selected);
        $this->selectAttributes->setDisabled(false);
    }
    public function render(): string
    {
        $dropdown = '<select ';
        $dropdown .= $this->selectAttributes->render();
        $dropdown .= '>';
        $dropdown .= $this->selectAttributes->renderOptions();
        $dropdown .= '</select>';
        return $dropdown;
    }
    public function addClass(string $class): self
    {
        $this->selectAttributes->addClass($class);
        return $this;
    }

    public function setId(string $id): self
    {
        $this->selectAttributes->setId($id);
        return $this;
    }
    public function getId(): string
    {
        return $this->selectAttributes->getId();
    }
    public function setName(string $name): self
    {
        $this->selectAttributes->setName($name);
        return $this;
    }
    public function getName(): string
    {
        return $this->selectAttributes->getName();
    }
    public function setDisabled(bool $disabled): self
    {
        $this->selectAttributes->setDisabled($disabled);
        return $this;
    }
}
