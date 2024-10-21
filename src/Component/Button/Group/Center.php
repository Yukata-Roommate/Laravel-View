<?php

namespace YukataRm\Laravel\View\Component\Button\Group;

use YukataRm\Laravel\View\Component\Button\Group;

/**
 * Button Group Center Component
 * 
 * @package YukataRm\Laravel\View\Component\Button\Group
 */
class Center extends Group
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
        parent::__construct("center");
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
