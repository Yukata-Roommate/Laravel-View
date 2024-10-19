<?php

namespace YukataRm\Laravel\View\Component\Common\Breadcrumb;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Common Breadcrumb Active Component
 * 
 * @package YukataRm\Laravel\View\Component\Common\Breadcrumb
 */
class Active extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->setTitle($title);
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * title
     * 
     * @var string
     */
    public string $title;

    /*----------------------------------------*
     * Method
     *---------------------------------------*/

    /**
     * set title
     * 
     * @param string $title
     * @return void
     */
    protected function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
