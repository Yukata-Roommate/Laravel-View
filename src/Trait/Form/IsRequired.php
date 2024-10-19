<?php

namespace YukataRm\Laravel\View\Trait\Form;

/**
 * Form Is Required trait
 * 
 * @package YukataRm\Laravel\View\Trait\Form
 */
trait IsRequired
{
    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * is required
     * 
     * @var bool
     */
    public bool $isRequired;

    /*----------------------------------------*
     * Methods
     *----------------------------------------*/

    /**
     * set is required
     * 
     * @param bool|null $isRequired
     * @return void
     */
    protected function setIsRequired(bool|null $isRequired): void
    {
        $this->isRequired = $isRequired ?? false;
    }
}
