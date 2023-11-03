<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes;

class Dropdown
{
    protected static array $options = [];
    protected static string $name = 'dropdown';
    protected static string $selected = '';
    protected static string $class = '';

    public static function render(array $options = [], ?string $name = null, ?string $selected = null, ?string $class = null): string
    {
        $options = $options ?? self::$options;
        $name = $name ?? self::$name;
        $selected = $selected ?? self::$selected;
        $class = $class ?? self::$class;

        $dropdown = '<select name="' . $name . '" class="' . $class . '">';

        foreach ($options as $value => $label) {
            $selectedAttr = ($value == $selected) ? 'selected' : '';
            $dropdown .= '<option value="' . $value . '" ' . $selectedAttr . '>' . $label . '</option>';
        }

        $dropdown .= '</select>';

        return $dropdown;
    }
}
