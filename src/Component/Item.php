<?php

namespace YukataRm\Laravel\View\Component;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Item Component
 *
 * @package YukataRm\Laravel\View\Component
 */
class Item extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     *
     * @param string $title
     * @param bool|null $last
     */
    public function __construct(string $title, bool|null $last = null)
    {
        $this->setTitle($title);
        $this->setLast($last);
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
        $class = "border border-3 rounded-3 p-3";

        if (!$this->last) $class .= " mb-3";

        return [
            "class" => $class,
        ];
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * title
     *
     * @var string
     */
    public string $title;

    /**
     * last
     *
     * @var bool
     */
    public bool $last;

    /*----------------------------------------*
     * Methods
     *----------------------------------------*/

    /**
     * set title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * set last
     *
     * @param bool|null $last
     * @return void
     */
    public function setLast(bool|null $last): void
    {
        $this->last = $last ?? false;
    }
}
