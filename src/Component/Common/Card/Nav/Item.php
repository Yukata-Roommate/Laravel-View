<?php

namespace YukataRm\Laravel\View\Component\Common\Card\Nav;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

use YukataRm\Laravel\View\Component\Common\Card\Nav\NavTrait;

/**
 * Common Card Nav Item Component
 * 
 * @package YukataRm\Laravel\View\Component\Common\Card\Nav
 */
class Item extends Component
{
    use NavTrait;

    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param string $key
     * @param bool $active
     */
    public function __construct(string $key, bool $active)
    {
        $this->setKey($key);
        $this->setActive($active);
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * id
     * 
     * @var string
     */
    public string $id;

    /**
     * aria controls
     * 
     * @var string
     */
    public string $ariaControls;

    /**
     * class
     * 
     * @var string
     */
    public string $class;

    /**
     * aria selected
     * 
     * @var string
     */
    public string $ariaSelected;

    /*----------------------------------------*
     * Method
     *---------------------------------------*/

    /**
     * set title
     * 
     * @param string $title
     * @return void
     */
    protected function setKey(string $key): void
    {
        $this->id           = $this->navItemId($key);
        $this->ariaControls = $this->navContentId($key);
    }

    /**
     * set active
     * 
     * @param bool $active
     * @return void
     */
    protected function setActive(bool $active): void
    {
        $this->class        = $active ? "nav-link active" : "nav-link";
        $this->ariaSelected = $active ? "true" : "false";
    }
}
