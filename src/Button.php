<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes;

class Button extends Icon
{
    protected static array $attributes = [
        'type' => 'submit',
        'class' => 'btn btn-primary',
    ];
    protected static string $buttonText = 'Haz clic aqui';
    public static function setText(string $buttonText): self
    {
        self::$buttonText = $buttonText;
        return new static();
    }

    public static function render(?array $attributes = null): string
    {
        $rendererText = Icon::rendererText(self::$buttonText);
        $attributes = $attributes ?? self::$attributes;
        self::$buttonText = null;
        self::$attributes = [
            'type' => 'submit',
            'class' => 'btn btn-primary',
        ];
        return '<button ' . Attributes::merge($attributes) . '>' . $rendererText . '</button>';
    }
}
