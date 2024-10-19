<?php

namespace YukataRm\Laravel\View\Trait\Form;

/**
 * Form Is Hidden trait
 * 
 * @package YukataRm\Laravel\View\Trait\Form
 */
trait IsHidden
{
    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * is hidden
     * 
     * @var bool
     */
    public bool $isHidden;

    /*----------------------------------------*
     * Methods
     *----------------------------------------*/

    /**
     * set is hidden
     * 
     * @param bool|null $isHidden
     * @return void
     */
    public function setIsHidden(bool|null $isHidden): void
    {
        $this->isHidden = $isHidden ?? false;
    }
}
