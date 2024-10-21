<?php

namespace YukataRm\Laravel\View\Component;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

use YukataRm\Laravel\View\Trait\Form\IsHidden;

/**
 * Form Component
 *
 * @package YukataRm\Laravel\View\Component
 */
class Form extends Component
{
    use IsHidden;

    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     *
     * @param string $method
     * @param bool|null $hasFile
     * @param bool|null $isHidden
     * @param bool|null $targetBlank
     */
    public function __construct(
        string $method,
        bool|null $hasFile = null,
        bool|null $isHidden = null,
        bool|null $targetBlank = null
    ) {
        $this->setMethod($method);
        $this->setHasFile($hasFile);
        $this->setIsHidden($isHidden);
        $this->setTargetBlank($targetBlank);
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
        $attributes = [];

        $attributes["method"] = match ($this->isMethodCompatible) {
            true  => $this->method,
            false => "post",
        };

        if ($this->hasFile) $attributes["enctype"] = "multipart/form-data";

        if ($this->isHidden) $attributes["class"] = "d-none";

        if ($this->targetBlank) {
            $attributes["target"] = "_blank";
            $attributes["rel"]    = "noopener noreferrer";
        }

        return $attributes;
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * method
     *
     * @var string
     */
    public string $method;

    /**
     * is method compatible
     *
     * @var bool
     */
    public bool $isMethodCompatible;

    /**
     * has file
     *
     * @var bool
     */
    public bool $hasFile;

    /**
     * target blank
     *
     * @var bool
     */
    public bool $targetBlank;

    /*----------------------------------------*
     * Method
     *---------------------------------------*/

    /**
     * set method
     *
     * @param string $method
     * @return void
     */
    protected function setMethod(string $method): void
    {
        $this->method             = $method;
        $this->isMethodCompatible = match ($method) {
            "get"   => true,
            "post"  => true,
            default => false,
        };
    }

    /**
     * set has file
     *
     * @param bool|null $hasFile
     * @return void
     */
    protected function setHasFile(bool|null $hasFile): void
    {
        $this->hasFile = $hasFile ?? false;
    }

    /**
     * set target blank
     *
     * @param bool|null $targetBlank
     * @return void
     */
    protected function setTargetBlank(bool|null $targetBlank): void
    {
        $this->targetBlank = $targetBlank ?? false;
    }
}
