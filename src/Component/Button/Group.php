<?php

namespace YukataRm\Laravel\View\Component\Button;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Button Group Component
 *
 * @package YukataRm\Laravel\View\Component\Button
 */
class Group extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     *
     * @param string $position
     */
    public function __construct(string $position)
    {
        $this->setPosition($position);
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
        $attributes = [
            "class" => "d-flex",
        ];

        $attributes["class"] .= match ($this->position) {
            "left"   => " justify-content-end",
            "right"  => " justify-content-start",
            "center" => " justify-content-center",
            default => "",
        };

        return $attributes;
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * position
     *
     * @var string
     */
    public string $position;

    /*----------------------------------------*
     * Method
     *---------------------------------------*/

    /**
     * set position
     *
     * @param string $position
     * @return void
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }
}
