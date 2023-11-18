<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes\ListAttributes;

class OrderedList
{
    protected ListAttributes $listAttributes;
    protected string $type;

    public function __construct(?string $type = '1')
    {
        $this->listAttributes = new ListAttributes();
        $this->setType($type);
    }

    public function addItem(string $item): self
    {
        $this->listAttributes->addItem($item);
        return $this;
    }
    public function setType(string $type): self
    {
        $this->type = 'type="' . $type . '"';
        return $this;
    }
    public function render(?array $attributes = null): string
    {
        $list = '<ol ';
        $list .= $list .= $this->listAttributes->render();
        $list .= $this->type ? $this->type : '';
        $list .= '>';
        $list .= $this->listAttributes->renderItems();
        $list .= '</ol>';
        return $list;
    }
}
