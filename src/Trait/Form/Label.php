<?php

namespace YukataRm\Laravel\View\Trait\Form;

/**
 * Form Label trait
 * 
 * @package YukataRm\Laravel\View\Trait\Form
 */
trait Label
{
    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * label
     * 
     * @var string
     */
    public string $label;

    /*----------------------------------------*
     * Methods
     *----------------------------------------*/

    /**
     * set label
     * 
     * @param string $label
     * @return void
     */
    protected function setLabel(string $label): void
    {
        $this->label = $label;
    }
}
