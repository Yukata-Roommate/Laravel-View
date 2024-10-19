<?php

namespace YukataRm\Laravel\View\Component\Common\Card\Nav;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

use YukataRm\Laravel\View\Component\Common\Card\Nav\NavTrait;

/**
 * Common Card Nav Content Component
 * 
 * @package YukataRm\Laravel\View\Component\Common\Card\Nav
 */
class Content extends Component
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
     * aria labelled by
     * 
     * @var string
     */
    public string $ariaLabelledBy;

    /**
     * class
     * 
     * @var string
     */
    public string $class;

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
        $this->id             = $this->navContentId($key);
        $this->ariaLabelledBy = $this->navItemId($key);
    }

    /**
     * set active
     * 
     * @param bool $active
     * @return void
     */
    protected function setActive(bool $active): void
    {
        $this->class = $active ? "tab-pane fade active show" : "tab-pane fade";
    }
}
