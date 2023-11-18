<?php

namespace hstanleycrow\EasyPHPWebComponents;

use hstanleycrow\EasyPHPWebComponents\Attributes\LinkAttributes;

class Link
{
    protected LinkAttributes $linkAttributes;

    public function __construct(string $href, string $linkContent)
    {
        $this->linkAttributes = new LinkAttributes();
        $this->linkAttributes->setLinkContent($linkContent);
        $this->linkAttributes->setHref($href);
    }
    public function render(): string
    {
        $link = '<a ';
        $link .= $this->linkAttributes->render();
        $link .= '>';
        $link .= $this->linkAttributes->getLinkContent();
        $link .= '</a>';
        return $link;
    }
    public function addClass(string $class): self
    {
        $this->linkAttributes->addClass($class);
        return $this;
    }
    public function setRel($rel): self
    {
        $this->linkAttributes->setRel($rel);

        return $this;
    }

    /**
     * Set the value of target
     *
     * @return  self
     */
    public function setTarget($target): self
    {
        $this->linkAttributes->setTarget($target);

        return $this;
    }
    /**
     * Set the value of download
     *
     * @return  self
     */
    public function setDownload($download)
    {
        $this->linkAttributes->setDownload($download);

        return $this;
    }
}
