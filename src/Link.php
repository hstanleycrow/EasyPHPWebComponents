<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes;

class Link
{
    protected static array $attributes = [
        'href' => '#',
        'class' => '',
        'text' => 'Link',
        'target' => '_blank',
    ];

    public static function render(?array $attributes = null): string
    {
        $attributes = $attributes ?? self::$attributes;
        $attributes['href'] = $attributes['href'] ?? self::$attributes['href'];
        $attributes['class'] = $attributes['class'] ?? self::$attributes['class'];
        $attributes['text'] = $attributes['text'] ?? self::$attributes['text'];
        $attributes['target'] = $attributes['target'] ?? self::$attributes['target'];

        return '<a ' . Attributes::merge($attributes) . '>' . $attributes['text'] . '</a>';
    }
}
