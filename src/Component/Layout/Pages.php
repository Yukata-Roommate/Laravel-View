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
     * Attributes
     *----------------------------------------*/

    /**
     * merge attributes
     * 
     * @return array<string, mixed>
     */
    #[\Override]
    protected function mergeAttributes(): array
    {
        return [
            "class" => "app-wrapper",
        ];
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

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
    protected function setPageTitle(string $pageTitle): void
    {
        $this->pageTitle = $pageTitle;
    }
}
