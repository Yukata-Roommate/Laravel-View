<?php

namespace YukataRm\Laravel\View\Component;

use YukataRm\Laravel\View\BaseComponent as Component;

/**
 * Base Component
 * 
 * @package YukataRm\Laravel\View\Component
 */
abstract class BaseComponent extends Component
{
    /*----------------------------------------*
     * Required
     *----------------------------------------*/

    /**
     * get component
     * 
     * @return string
     */
    public function component(): string
    {
        return "{$this->prefix}::{$this->componentKey()}";
    }

    /**
     * get component key
     * 
     * @return string
     */
    protected function componentKey(): string
    {
        return strtolower(str_replace("\\", ".", str_replace($this->namespace, "", get_class($this))));
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * component prefix
     * 
     * @var string
     */
    protected string $prefix = "yukata-rm";

    /**
     * component common namespace
     * 
     * @var string
     */
    protected string $namespace = "YukataRm\\Laravel\\View\\Component\\";
}
