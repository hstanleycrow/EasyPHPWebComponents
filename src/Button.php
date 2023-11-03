<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes;

class Button
{
    protected static array $attributes = [
        'type' => 'submit',
        'class' => 'btn btn-primary',
        'value' => 'Click me!',
    ];
    protected static string $value = 'Haz clic aqui';

    public static function render(?array $attributes = null): string
    {
        $attributes = $attributes ?? self::$attributes;
        $attributes['value'] = $attributes['value'] ?? self::$value;
        return '<button ' . Attributes::merge($attributes) . '>' . $attributes['value'] . '</button>';
    }
}
