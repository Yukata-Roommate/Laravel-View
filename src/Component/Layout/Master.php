<?php

namespace YukataRm\Laravel\View\Component\Layout;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Layout Master Component
 * 
 * @package YukataRm\Laravel\View\Component\Layout
 */
class Master extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param string|null $title
     */
    public function __construct(string|null $title = null)
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
     * @param string|null $title
     * @return void
     */
    protected function setTitle(string|null $title): void
    {
        $appName = config("app.name");

        $this->title = is_null($title) ? $appName : "{$title} | {$appName}";
    }
}
