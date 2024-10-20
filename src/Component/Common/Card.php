<?php

namespace YukataRm\Laravel\View\Component\Common;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Common Card Component
 * 
 * @package YukataRm\Laravel\View\Component\Common
 */
class Card extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param string|null $cardTitle
     */
    public function __construct(string|null $cardTitle = null)
    {
        $this->setCardTitle($cardTitle);
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
        return [
            "class" => "card",
        ];
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * cardTitle
     * 
     * @var string|null
     */
    public string|null $cardTitle;

    /*----------------------------------------*
     * Method
     *---------------------------------------*/

    /**
     * set card title
     * 
     * @param string|null $cardTitle
     * @return void
     */
    public function setCardTitle(string|null $cardTitle): void
    {
        $this->cardTitle = $cardTitle;
    }
}
