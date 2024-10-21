<?php

namespace YukataRm\Laravel\View\Component\Button\Group;

use YukataRm\Laravel\View\Component\Button\Group;

/**
 * Button Group Left Component
 * 
 * @package YukataRm\Laravel\View\Component\Button\Group
 */
class Left extends Group
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
        parent::__construct("left");
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
