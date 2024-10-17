<?php

namespace YukataRm\Laravel\View\Component\Layout\Pages\Sidebar;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

use YukataRm\Laravel\View\Trait\Url;

/**
 * Layout Pages Sidebar Item Component
 * 
 * @package YukataRm\Laravel\View\Component\Layout\Pages\Sidebar
 */
class Item extends Component
{
    use Url;

    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param string $prefix
     * @param string $href
     * @param string $icon
     * @param string $title
     */
    public function __construct(string $prefix, string $href, string $icon, string $title)
    {
        $this->setPrefix($prefix);
        $this->setHref($href);
        $this->setIcon($icon);
        $this->setTitle($title);

        $this->setNavLinkClass();
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
     * href
     * 
     * @var string
     */
    public string $href;

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
     * nav link class
     * 
     * @var string
     */
    public string $navLinkClass;

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
     * set href
     * 
     * @param string $href
     * @return void
     */
    public function setHref(string $href): void
    {
        $this->href = $href;
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
     * set nav link class
     * 
     * @return void
     */
    public function setNavLinkClass(): void
    {
        $this->navLinkClass = $this->isUrlStartsWith() ? "nav-link active" : "nav-link";
    }
}
