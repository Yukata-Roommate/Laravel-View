<?php

namespace YukataRm\Laravel\View\Component\Common;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

/**
 * Common Modal Component
 * 
 * @package YukataRm\Laravel\View\Component\Common
 */
class Modal extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param string $id
     * @param bool|null $isStrict
     */
    public function __construct(string $id, bool|null $isStrict = null)
    {
        $this->setId($id);
        $this->setIsStrict($isStrict);
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
        $attributes = [
            "id"              => $this->id,
            "aria-labelledby" => $this->ariaLabelledBy,
            "class"           => "modal fade",
            "tabindex"        => "-1",
            "aria-hidden"     => "true",
        ];

        if ($this->isStrict) {
            $attributes["data-bs-backdrop"] = "static";
            $attributes["data-bs-keyboard"] = "false";
        }

        return $attributes;
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * id
     * 
     * @var string
     */
    public string $id;

    /**
     * aria labelled by
     * 
     * @var string
     */
    public string $ariaLabelledBy;

    /**
     * is strict
     * 
     * @var bool
     */
    public bool $isStrict;

    /*----------------------------------------*
     * Methods
     *----------------------------------------*/

    /**
     * set id
     * 
     * @param string $id
     * @return void
     */
    protected function setId(string $id): void
    {
        $this->id             = $id;
        $this->ariaLabelledBy = "{$id}Label";
    }

    /**
     * set is strict
     * 
     * @param bool|null $isStrict
     * @return void
     */
    protected function setIsStrict(bool|null $isStrict): void
    {
        $this->isStrict = $isStrict ?? false;
    }
}
