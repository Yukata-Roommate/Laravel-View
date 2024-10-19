<?php

namespace YukataRm\Laravel\View\Component\Layout;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Layout Auth Component
 * 
 * @package YukataRm\Laravel\View\Component\Layout
 */
class Auth extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param string $cardTitle
     * @param string $action
     */
    public function __construct(string $cardTitle, string $action)
    {
        $this->setCardTitle($cardTitle);
        $this->setAction($action);
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
            "class" => "login-box",
            "style" => "width: 360px;",
        ];
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * card title
     * 
     * @var string
     */
    public string $cardTitle;

    /**
     * action
     * 
     * @var string
     */
    public string $action;

    /*----------------------------------------*
     * Method
     *---------------------------------------*/

    /**
     * set card title
     * 
     * @param string $cardTitle
     * @return void
     */
    protected function setCardTitle(string $cardTitle): void
    {
        $this->cardTitle = $cardTitle;
    }

    /**
     * set action
     * 
     * @param string $action
     * @return void
     */
    protected function setAction(string $action): void
    {
        $this->action = $action;
    }
}
