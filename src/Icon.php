<?php

namespace hstanleycrow\EasyPHPWebComponents;

class Icon
{
    protected static ?string $iconClass = null;
    protected static ?string $iconPosition = 'left';
    public static function setIconClass(?string $iconClass = null): self
    {
        self::$iconClass = $iconClass;
        return new static();
    }
    public static function setIconPosition(string $iconPosition = 'left'): self
    {
        $iconPosition = strtolower($iconPosition);
        if ($iconPosition != 'left' && $iconPosition != 'right') {
            throw new \Exception('Icon position must be left or right');
        }
        self::$iconPosition = $iconPosition;
        return new static();
    }
    public static function rendererText(string $buttonText): string
    {
        $rendererText = $buttonText;
        if (self::$iconClass !== null) :
            if (self::$iconPosition === 'left') :
                $rendererText = '<i class="' . self::$iconClass . '"></i>&nbsp;' . $buttonText;
            else :
                $rendererText = $buttonText . '&nbsp;<i class="' . self::$iconClass . '"></i>';
            endif;
        endif;
        return $rendererText;
    }
}
