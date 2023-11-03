<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes;

class UnorderedList
{
    protected static array $attributes = [
        'class' => 'unordered-list',
    ];
    protected static array $items = [];
    protected static string $type = 'style="list-style-type:circle;"';

    public static function addItem(string $item)
    {
        self::$items[] = $item;
        return new static();
    }
    public static function type(string $type)
    {
        self::$type = "list-style-type:$type;";
        return new static();
    }


    public static function render(?array $attributes = null): string
    {
        $attributes = $attributes ?? self::$attributes;
        $attributes['style'] = self::$type;
        $html = '<ul ' . Attributes::merge($attributes) . '>';
        foreach (self::$items as $item) {
            $html .= '<li>' . $item . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }
}
