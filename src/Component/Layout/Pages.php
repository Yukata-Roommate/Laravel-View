<?php

namespace YukataRm\Laravel\View\Component\Layout;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Layout Pages Component
 * 
 * @package YukataRm\Laravel\View\Component\Layout
 */
class Pages extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param string $pageTitle
     */
    public function __construct(string $pageTitle)
    {
        $this->setPageTitle($pageTitle);
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * body class
     * 
     * @var string
     */
    public string $bodyClass = "layout-fixed sidebar-expand-lg bg-body-tertiary app-loaded";

    /**
     * page title
     * 
     * @var string
     */
    public string $pageTitle;

    /*----------------------------------------*
     * Method
     *---------------------------------------*/

    /**
     * set page title
     * 
     * @param string $pageTitle
     * @return void
     */
    public function setPageTitle(string $pageTitle): void
    {
        $this->pageTitle = $pageTitle;
    }
}
