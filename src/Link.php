<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes;

class Link
{
    protected array $attributes = [
        'href' => '#',
        'class' => '',
        'text' => 'Link',
        'target' => '_self',
    ];
    protected string $linkContent = 'Click here';

    /**
     * Constructs a new instance of the class.
     *
     * @param string $linkContent The content of the link.
     */
    public function __construct(string $linkContent)
    {
        $this->setLinkContent($linkContent);
    }
    /**
     * Sets the content of the link.
     *
     * @param string $text The text to set as the link content.
     * @throws \InvalidArgumentException If the provided link content is empty.
     * @return void
     */
    private function setLinkContent(string $text): void
    {
        if (empty($text)) {
            throw new \InvalidArgumentException('Link content cannot be empty');
        }

        $this->linkContent = $text;
    }
    /**
     * Renders the HTML for the link element.
     *
     * @param array|null $attributes The attributes for the link element.
     * @return string The rendered HTML for the link element.
     */
    public function render(?array $attributes = null): string
    {
        $attributes = $attributes ?? self::$attributes;
        $attributes['href'] ??= self::$attributes['href'];
        $attributes['class'] ??= self::$attributes['class'];
        $attributes['target'] ??= self::$attributes['target'];

        return '<a ' . Attributes::merge($attributes) . '>' . $this->linkContent . '</a>';
    }
}
