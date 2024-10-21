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
    protected function component(): string
    {
        return "{$this->componentPrefix}::{$this->componentKey()}";
    }

    /**
     * get component key
     *
     * @return string
     */
    protected function componentKey(): string
    {
        $class = str_replace($this->namespace, "", get_class($this));

        $component = str_replace("\\", ".", $class);

        $kebab = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $component));

        return str_replace(".-", ".", $kebab);
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * component prefix
     *
     * @var string
     */
    protected string $componentPrefix = "yukata-rm";

    /**
     * component common namespace
     *
     * @var string
     */
    protected string $namespace = "YukataRm\\Laravel\\View\\Component\\";
}
