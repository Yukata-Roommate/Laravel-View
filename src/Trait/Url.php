<?php

namespace YukataRm\Laravel\View\Trait;

/**
 * Url trait
 * 
 * @package YukataRm\Laravel\View\Trait
 */
trait Url
{
    /**
     * get current url
     * 
     * @return string
     */
    protected function currentUrl(): string
    {
        return url()->current();
    }

    /**
     * whether current url is matched
     * 
     * @param string|null $url
     * @return bool
     */
    protected function isUrlMatched(string|null $url = null): bool
    {
        $url = match ($url) {
            is_string($url)               => $url,
            property_exists($this, "url") => $this->url,
            default                       => null,
        };

        return $this->currentUrl() === $url;
    }

    /**
     * whether current url is starts with prefix
     * 
     * @param string|null $prefix
     * @return string
     */
    protected function isUrlStartsWith(string|null $prefix = null): bool
    {
        $prefix = match ($prefix) {
            is_string($prefix)               => $prefix,
            property_exists($this, "prefix") => $this->prefix,
            default                          => null,
        };

        return str_starts_with($this->currentUrl(), $prefix);
    }
}
