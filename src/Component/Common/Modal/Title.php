<?php

namespace YukataRm\Laravel\View\Component\Common\Modal;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Common Modal Title Component
 * 
 * @package YukataRm\Laravel\View\Component\Common\Modal
 */
class Title extends Component
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
            "class" => "h5 modal-title",
        ];
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
     * Methods
     *----------------------------------------*/

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
}
