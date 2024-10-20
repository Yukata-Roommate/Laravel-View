<?php

namespace YukataRm\Laravel\View\Component\Item;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Item Inline Component
 * 
 * @package YukataRm\Laravel\View\Component\Item
 */
class Inline extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param bool|null $last
     */
    public function __construct(bool|null $last = null)
    {
        $this->setLast($last);
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
        $class = "d-inline-block border border-3 rounded-3 px-2 py-1 my-1";

        if (!$this->last) $class .= " me-2";

        return [
            "class" => $class,
        ];
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * last
     * 
     * @var bool
     */
    public bool $last;

    /*----------------------------------------*
     * Methods
     *----------------------------------------*/

    /**
     * set last
     * 
     * @param bool|null $last
     * @return void
     */
    public function setLast(bool|null $last): void
    {
        $this->last = $last ?? false;
    }
}
