<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class LinkAttributes extends GlobalAttributes
{
    protected string $href;
    protected TextAttribute $text;
    protected ?string $rel = null;
    protected ?string $target = '_self';
    protected ?string $type = null;
    protected ?string $download = null;
    protected ?TextAttribute $linkContent;

    public function __construct()
    {
        $this->linkContent = new TextAttribute();
    }
    public function render(): string
    {
        $attributes = 'class="' . $this->getClass() . '" ';
        $attributes .= 'href="' . $this->href . '" ';
        $attributes .= $this->target ? 'target="' . $this->target . '" ' : '';
        $attributes .= $this->rel ? 'rel="' . $this->rel . '" ' : '';
        $attributes .= $this->download ? 'download="' . $this->download . '" ' : '';
        return $attributes;
    }

    public function setLinkContent($linkContent): self
    {
        if (empty($linkContent)) {
            throw new \InvalidArgumentException('Link content cannot be empty');
        }

        $this->linkContent->setText($linkContent);

        return $this;
    }

    /**
     * Set the value of href
     *
     * @return  self
     */
    public function setHref(string $href): self
    {
        if (empty($href)) {
            throw new \InvalidArgumentException('href attribute cannot be empty');
        }
        $this->href = $href;

        return $this;
    }

    /**
     * Get the value of anchorText
     */
    public function getLinkContent(): string
    {
        return $this->linkContent->getText();
    }

    /**
     * Set the value of rel
     *
     * @return  self
     */
    public function setRel($rel): self
    {
        $this->rel = $rel;

        return $this;
    }

    /**
     * Set the value of target
     *
     * @return  self
     */
    public function setTarget($target): self
    {
        $this->target = $target;

        return $this;
    }
    /**
     * Set the value of download
     *
     * @return  self
     */
    public function setDownload($download)
    {
        $this->download = $download;

        return $this;
    }
}
