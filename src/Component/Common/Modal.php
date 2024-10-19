<?php

namespace YukataRm\Laravel\View\Component\Common;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Common Modal Component
 * 
 * @package YukataRm\Laravel\View\Component\Common
 */
class Modal extends Component
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
            "class" => "card",
        ];
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * title
     * 
     * @var string|null
     */
    public string|null $title;

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
        $this->title = $title;
    }
}
