<?php

namespace YukataRm\Laravel\View\Provider;

use YukataRm\Laravel\Provider\ViewServiceProvider as BaseServiceProvider;

/**
 * View Service Provider
 *
 * @package YukataRm\Laravel\View\Provider
 */
class ViewServiceProvider extends BaseServiceProvider
{
    /**
     * base path
     *
     * @var string
     */
    protected string $basePath = __DIR__;

    /**
     * get views
     *
     * @return array<string, string>
     */
    protected function views(): array
    {
        return [
            "views" => "yukata-rm"
        ];
    }

    /**
     * get blade components
     *
     * @return array<string, string>
     */
    #[\Override]
    protected function bladeComponents(): array
    {
        return [
            "YukataRm\\Laravel\\View\\Component" => "yukata-rm"
        ];
    }
}
