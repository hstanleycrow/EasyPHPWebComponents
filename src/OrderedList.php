<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes;

class OrderedList
{
    protected static array $attributes = [
        'class' => 'ordered-list',
    ];
    protected static array $items = [];
    protected static string $type = "1";

    public static function addItem(string $item)
    {
        self::$items[] = $item;
        return new static();
    }
    public static function type(string $type)
    {
        self::$type = $type;
        return new static();
    }

    public static function render(?array $attributes = null): string
    {
        $attributes = $attributes ?? self::$attributes;
        $attributes['type'] = self::$type;
        $html = '<ol ' . Attributes::merge($attributes) . '>';
        foreach (self::$items as $item) {
            $html .= '<li>' . $item . '</li>';
        }
        $html .= '</ol>';
        return $html;
    }
}
