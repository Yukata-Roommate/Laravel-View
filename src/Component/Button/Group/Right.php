<?php

namespace YukataRm\Laravel\View\Component\Button\Group;

use YukataRm\Laravel\View\Component\Button\Group;

/**
 * Button Group Right Component
 * 
 * @package YukataRm\Laravel\View\Component\Button\Group
 */
class Right extends Group
{
    /*----------------------------------------*
     * Override
     *----------------------------------------*/

    /**
     * constructor
     */
    #[\Override]
    public function __construct()
    {
        parent::__construct("right");
    }

    /**
     * get component key
     * 
     * @return string
     */
    #[\Override]
    protected function componentKey(): string
    {
        return parent::componentKey();
    }
}
