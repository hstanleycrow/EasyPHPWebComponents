<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes;

class Button
{
    protected array $attributes = [
        'type' => 'submit',
        'class' => 'btn',
    ];
    protected string $buttonText = 'Send';

    /**
     * Constructor for the class.
     *
     * @param string $buttonText The text to be displayed on the button.
     */
    public function __construct(string $buttonText)
    {
        $this->setButtonText($buttonText);
    }
    /**
     * Set the text for the button.
     *
     * @param string $text The text to be set for the button.
     * @throws \InvalidArgumentException If the button text is empty.
     * @return void
     */
    private function setButtonText(string $text): void
    {
        if (empty($text)) {
            throw new \InvalidArgumentException('Button text cannot be empty');
        }

        $this->buttonText = $text;
    }
    /**
     * Renders the button element with the given attributes.
     *
     * @param array|null $attributes The attributes to apply to the button element.
     * @return string The rendered button HTML.
     */
    public function render(?array $attributes = null): string
    {
        $attributes = $attributes ?? $this->attributes;
        return '<button ' . Attributes::merge($attributes) . '>' . $this->buttonText . '</button>';
    }
}
