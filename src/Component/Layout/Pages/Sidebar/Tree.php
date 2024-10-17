<?php

namespace YukataRm\Laravel\View\Component\Layout\Pages\Sidebar;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

use YukataRm\Laravel\View\Trait\Url;

/**
 * Layout Pages Sidebar Tree Component
 * 
 * @package YukataRm\Laravel\View\Component\Layout\Pages\Sidebar
 */
class Tree extends Component
{
    use Url;

    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param string $prefix
     * @param string $icon
     * @param string $title
     */
    public function __construct(string $prefix, string $icon, string $title)
    {
        $this->setPrefix($prefix);
        $this->setIcon($icon);
        $this->setTitle($title);

        $this->setNavItemClass();
        $this->setNavLinkClass();
        $this->setNavStyle();
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * url prefix
     * 
     * @var string
     */
    public string $prefix;

    /**
     * icon
     * 
     * @var string
     */
    public string $icon;

    /**
     * title
     * 
     * @var string
     */
    public string $title;

    /**
     * nav item class
     * 
     * @var string
     */
    public string $navItemClass;

    /**
     * nav link class
     * 
     * @var string
     */
    public string $navLinkClass;

    /**
     * nav style
     * 
     * @var string
     */
    public string $navStyle;

    /*----------------------------------------*
     * Method
     *---------------------------------------*/

    /**
     * set url prefix
     * 
     * @param string $prefix
     * @return void
     */
    public function setPrefix(string $prefix): void
    {
        $this->prefix = $prefix;
    }

    /**
     * set icon
     * 
     * @param string $icon
     * @return void
     */
    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }

    /**
     * set title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * set nav item class
     * 
     * @return void
     */
    public function setNavItemClass(): void
    {
        $this->navItemClass = $this->isUrlMatched() ? "nav-item menu-open" : "nav-item";
    }

    /**
     * set nav link class
     * 
     * @return void
     */
    public function setNavLinkClass(): void
    {
        $this->navLinkClass = $this->isUrlStartsWith() ? "nav-link active" : "nav-link";
    }

    /**
     * set nav style
     * 
     * @return void
     */
    public function setNavStyle(): void
    {
        $this->navStyle = $this->isUrlStartsWith()
            ? "box-sizing: border-box; display: block;"
            : "box-sizing: border-box; display: none;";
    }
}
