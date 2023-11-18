<?php

namespace hstanleycrow\EasyPHPWebComponents\Attributes;

class GlobalAttributes implements HasClass
{
    protected string $class = '';
    protected string $id = '';
    protected string $lang;
    protected string $role;
    protected string $style;
    protected string $tabIndex;
    protected string $title;

    /**
     * Get the value of class
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * Set the value of class
     *
     * @return  self
     */
    public function addClass($class): self
    {
        $this->class .= $class;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of lang
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set the value of lang
     *
     * @return  self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of style
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set the value of style
     *
     * @return  self
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get the value of tabIndex
     */
    public function getTabIndex()
    {
        return $this->tabIndex;
    }

    /**
     * Set the value of tabIndex
     *
     * @return  self
     */
    public function setTabIndex($tabIndex)
    {
        $this->tabIndex = $tabIndex;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
