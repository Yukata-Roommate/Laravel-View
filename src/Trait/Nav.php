<?php

namespace YukataRm\Laravel\View\Trait;

/**
 * Nav trait
 * 
 * @package YukataRm\Laravel\View\Trait
 */
trait Nav
{
    /**
     * get nav item id
     * 
     * @param string $key
     * @return string
     */
    protected function navItemId(string $key): string
    {
        return "nav-item-{$key}";
    }

    /**
     * get nav content id
     * 
     * @param string $key
     * @return string
     */
    protected function navContentId(string $key): string
    {
        return "nav-content-{$key}";
    }
}
