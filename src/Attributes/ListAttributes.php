<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class ListAttributes extends GlobalAttributes
{
    protected ListItems $listItems;

    public function __construct()
    {
        $this->listItems = new ListItems();
    }
    public function addItem(string $item): self
    {
        $this->listItems->addItem($item);
        return $this;
    }
    public function render(): string
    {
        $attributes = $this->id ? 'id="' . $this->id . '" ' : '';
        $attributes .= $this->class ? 'class="' . $this->class . '" ' : '';
        return $attributes;
    }

    public function renderItems(): string
    {
        return $this->listItems->render();
    }
}
