<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes;

class Link extends Icon
{
    protected static array $attributes = [
        'href' => '#',
        'class' => '',
        'text' => 'Link',
        'target' => '_self',
    ];
    protected static string $buttonText = 'Haz clic aqui';
    public static function setText(string $buttonText): self
    {
        self::$buttonText = $buttonText;
        return new static();
    }

    public static function render(?array $attributes = null): string
    {
        $attributes = $attributes ?? self::$attributes;
        $attributes['href'] = $attributes['href'] ?? self::$attributes['href'];
        $attributes['class'] = $attributes['class'] ?? self::$attributes['class'];
        $attributes['target'] = $attributes['target'] ?? self::$attributes['target'];
        $rendererText = Icon::rendererText(self::$buttonText);
        return '<a ' . Attributes::merge($attributes) . '>' . $rendererText . '</a>';
    }
}
