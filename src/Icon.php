<?php

namespace hstanleycrow\EasyPHPWebComponents;

class Icon
{
    protected string $iconClass;
    protected string $iconPosition = 'left';
    protected string $buttonText;

    /**
     * Constructs a new instance of the class.
     *
     * @param string $iconClass The class of the icon.
     * @param string $buttonText The text of the button.
     * @param string $iconPosition The position of the icon. Default is 'left'.
     */
    public function __construct(string $iconClass, string $buttonText, string $iconPosition = 'left')
    {
        $this->setIconClass($iconClass);
        $this->setIconPosition($iconPosition);
        $this->setButtonText($buttonText);
    }
    /**
     * Sets the icon class for the object.
     *
     * @param string $iconClass The icon class to set.
     * @throws \InvalidArgumentException If the icon class is empty.
     * @return void
     */
    private function setIconClass(string $iconClass): void
    {
        if (empty($iconClass)) {
            throw new \InvalidArgumentException('Icon class cannot be empty');
        }

        $this->iconClass = $iconClass;
    }
    /**
     * Sets the position of the icon.
     *
     * @param string $iconPosition The position of the icon. Default is 'left'.
     * @throws \InvalidArgumentException If the icon position is not 'left' or 'right'.
     */
    private function setIconPosition(string $iconPosition = 'left')
    {
        $iconPosition = strtolower($iconPosition);
        if ($iconPosition != 'left' && $iconPosition != 'right') {
            throw new \InvalidArgumentException('Icon position must be left or right');
        }

        $this->iconPosition = $iconPosition;
    }
    /**
     * Sets the button text.
     *
     * @param string $buttonText The text to set for the button.
     * @throws \InvalidArgumentException If the provided button text is empty.
     * @return void
     */
    private function setButtonText(string $buttonText): void
    {
        if (empty($buttonText)) {
            throw new \InvalidArgumentException('Button text cannot be empty');
        }

        $this->buttonText = $buttonText;
    }
    /**
     * Renders the button text with an optional icon.
     *
     * @return string The rendered button text.
     */
    public function render(): string
    {
        if ($this->iconPosition == 'left') {
            return '<i class="' . $this->iconClass . '"></i>&nbsp;' . $this->buttonText;
        } else {
            return $this->buttonText . '&nbsp;<i class="' . $this->iconClass . '"></i>';
        }
    }
}
