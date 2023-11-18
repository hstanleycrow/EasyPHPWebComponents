<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes\ListAttributes;

class UnorderedList
{
    protected ListAttributes $listAttributes;
    protected string $type;

    public function __construct(?string $type = 'style="list-style-type:circle;"')
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
        $this->type = "list-style-type:$type";
        return $this;
    }
    public function render(?array $attributes = null): string
    {
        $list = '<ul ';
        $list .= 'style = "' . $this->type . '" ';
        $list .= $this->listAttributes->render();
        $list .= '>';
        $list .= $this->listAttributes->renderItems();
        $list .= '</ul>';
        return $list;
    }
    public function addClass(string $class): self
    {
        $this->listAttributes->addClass($class);
        return $this;
    }

    public function setId(string $id): self
    {
        $this->listAttributes->setId($id);
        return $this;
    }
}
