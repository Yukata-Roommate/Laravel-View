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
     * @param string $bodyClass
     * @param string|null $title
     */
    public function __construct(string $bodyClass, string|null $title = null)
    {
        $this->setBodyClass($bodyClass);
        $this->setTitle($title);
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * body class
     * 
     * @var string
     */
    public string $bodyClass;

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
     * set body class
     * 
     * @param string $bodyClass
     * @return void
     */
    protected function setBodyClass(string $bodyClass): void
    {
        $this->bodyClass = $bodyClass;
    }

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
