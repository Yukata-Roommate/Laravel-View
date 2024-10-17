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
     * @param string $footer
     */
    public function __construct(string $cardTitle, string $action, string $footer)
    {
        $this->setCardTitle($cardTitle);
        $this->setAction($action);
        $this->setFooter($footer);
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * body class
     * 
     * @var string
     */
    public string $bodyClass = "login-page bg-body-secondary app-loaded";

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

    /**
     * footer
     * 
     * @var string
     */
    public string $footer;

    /*----------------------------------------*
     * Method
     *---------------------------------------*/

    /**
     * set card title
     * 
     * @param string $cardTitle
     * @return void
     */
    public function setCardTitle(string $cardTitle): void
    {
        $this->cardTitle = $cardTitle;
    }

    /**
     * set action
     * 
     * @param string $action
     * @return void
     */
    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    /**
     * set footer
     * 
     * @param string $footer
     * @return void
     */
    public function setFooter(string $footer): void
    {
        $this->footer = $footer;
    }
}
