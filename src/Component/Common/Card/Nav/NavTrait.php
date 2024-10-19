<?php

namespace YukataRm\Laravel\View\Component\Common\Card\Nav;

/**
 * Nav trait
 * 
 * @package YukataRm\Laravel\View\Component\Common\Card\Nav
 */
trait NavTrait
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
