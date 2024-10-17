<?php

namespace YukataRm\Laravel\View\Component\Layout\Pages;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Layout Pages Alert Component
 * 
 * @package YukataRm\Laravel\View\Component\Layout\Pages
 */
class Alert extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     */
    public function __construct()
    {
        $this->setSuccess();
        $this->setFailure();
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * success message
     * 
     * @var string|null
     */
    public string|null $success;

    /**
     * failure message
     * 
     * @var string|null
     */
    public string|null $failure;

    /*----------------------------------------*
     * Method
     *---------------------------------------*/

    /**
     * set success message
     * 
     * @return void
     */
    public function setSuccess(): void
    {
        $this->success = $this->getSessionMessage("success");
    }

    /**
     * set failure message
     * 
     * @return void
     */
    public function setFailure(): void
    {
        $this->failure = $this->getSessionMessage("failure");
    }

    /**
     * get session message
     * 
     * @param string $key
     * @return string|null
     */
    protected function getSessionMessage(string $key): string|null
    {
        $session = session("alert.{$key}");

        return match (true) {
            !is_string($session) => null,
            empty($session)      => null,
            default              => $this->enl2br($session),
        };
    }
}
