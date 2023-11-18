<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class ListItems extends GlobalAttributes
{
    protected array $items = [];

    public function addItem(string $item): self
    {
        $this->items[] = $item;
        return $this;
    }
    public function render(): string
    {
        $list = "";
        foreach ($this->items as $item) {
            $list .= '<li>' . $item . '</li>';
        }
        return $list;
    }
}
