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
     * @param string $header
     * @param string $sidebar
     * @param string $breadcrumb
     * @param string|null $footer
     * @param string|null $modal
     */
    public function __construct(string $pageTitle, string $header, string $sidebar, string $breadcrumb, string|null $footer = null, string|null $modal = null)
    {
        $this->setPageTitle($pageTitle);
        $this->setHeader($header);
        $this->setSidebar($sidebar);
        $this->setBreadcrumb($breadcrumb);
        $this->setFooter($footer);
        $this->setModal($modal);
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

    /**
     * header
     * 
     * @var string
     */
    public string $header;

    /**
     * sidebar
     * 
     * @var string
     */
    public string $sidebar;

    /**
     * breadcrumb
     * 
     * @var string
     */
    public string $breadcrumb;

    /**
     * footer
     * 
     * @var string|null
     */
    public string|null $footer;

    /**
     * modal
     * 
     * @var string|null
     */
    public string|null $modal;

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

    /**
     * set header
     * 
     * @param string $header
     * @return void
     */
    public function setHeader(string $header): void
    {
        $this->header = $header;
    }

    /**
     * set sidebar
     * 
     * @param string $sidebar
     * @return void
     */
    public function setSidebar(string $sidebar): void
    {
        $this->sidebar = $sidebar;
    }

    /**
     * set breadcrumb
     * 
     * @param string $breadcrumb
     * @return void
     */
    public function setBreadcrumb(string $breadcrumb): void
    {
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * set footer
     * 
     * @param string|null $footer
     * @return void
     */
    public function setFooter(string|null $footer): void
    {
        $this->footer = $footer;
    }

    /**
     * set modal
     * 
     * @param string|null $modal
     * @return void
     */
    public function setModal(string|null $modal): void
    {
        $this->modal = $modal;
    }
}
