<?php

namespace hstanleycrow\EasyPHPWebComponents;

class Attributes
{
    protected array $attributes;
    public static function merge(array $attributes): string
    {
        $mergedAttributes = "";
        foreach ($attributes as $key => $attribute) {
            $mergedAttributes .= ' ' . $key . '="' . $attribute . '"';
        }
        return $mergedAttributes;
    }
}
