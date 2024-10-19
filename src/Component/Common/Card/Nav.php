<?php

namespace YukataRm\Laravel\View\Component\Common\Card;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Common Card Nav Component
 * 
 * @package YukataRm\Laravel\View\Component\Common\Card
 */
class Nav extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     */
    public function __construct() {}

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
}
