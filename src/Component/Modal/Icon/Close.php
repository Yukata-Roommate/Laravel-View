<?php

namespace YukataRm\Laravel\View\Component\Modal\Icon;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Modal Icon Close Component
 * 
 * @package YukataRm\Laravel\View\Component\Modal\Icon
 */
class Close extends Component
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
            "type"            => "button",
            "class"           => "btn-close",
            "data-bs-dismiss" => "modal",
            "aria-label"      => "Close",
        ];
    }
}
