<?php

namespace YukataRm\Laravel\View;

use Illuminate\View\Component;

use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Contracts\Support\Htmlable;
use Closure;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

/**
 * Base Component
 * 
 * @package YukataRm\Laravel\View
 */
abstract class BaseComponent extends Component
{
    /*----------------------------------------*
     * Required
     *----------------------------------------*/

    /**
     * render component
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Htmlable|\Closure|string
     */
    public function render(): ViewContract|Htmlable|Closure|string
    {
        return view($this->component());
    }

    /**
     * get component
     * 
     * @return string
     */
    abstract public function component(): string;

    /*----------------------------------------*
     * Method
     *----------------------------------------*/

    /**
     * escape html special characters and convert newline code to br tag
     * 
     * @param string $text
     * @return string
     */
    public function enl2br(string $text): string
    {
        return nl2br(htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8", true));
    }

    /**
     * whether user is logged in
     * 
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        return Auth::check();
    }

    /**
     * whether user has section
     * 
     * @param string $section
     * @return bool
     */
    public function hasSection(string $section): bool
    {
        return View::hasSection($section);
    }
}
