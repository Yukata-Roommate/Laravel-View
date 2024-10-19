<?php

namespace YukataRm\Laravel\View\Trait\Form;

use YukataRm\Laravel\View\Trait\Form\Id;
use YukataRm\Laravel\View\Trait\Form\Label;
use YukataRm\Laravel\View\Trait\Form\IsRequired;
use YukataRm\Laravel\View\Trait\Form\IsDisabled;

/**
 * Form Check trait
 * 
 * @package YukataRm\Laravel\View\Trait\Form
 */
trait Check
{
    use Id;
    use Label;
    use IsRequired;
    use IsDisabled;

    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param string $id
     * @param string $label
     * @param bool|null $isChecked
     * @param bool|null $isRequired
     * @param bool|null $isDisabled
     * @param bool|null $isinline
     * @param bool|null $isSwitch
     * @param bool|null $isReverse
     */
    public function __construct(
        string $id,
        string $label,
        bool|null $isChecked = null,
        bool|null $isRequired = null,
        bool|null $isDisabled = null,
        bool|null $isinline = null,
        bool|null $isSwitch = null,
        bool|null $isReverse = null
    ) {
        $this->setId($id);
        $this->setLabel($label);
        $this->setIsChecked($isChecked);
        $this->setIsRequired($isRequired);
        $this->setIsDisabled($isDisabled);
        $this->setIsInline($isinline);
        $this->setIsSwitch($isSwitch);
        $this->setIsReverse($isReverse);

        $this->setCheckClass();
    }

    /*----------------------------------------*
     * Attributes
     *----------------------------------------*/

    /**
     * default merge attributes
     * 
     * @return array<string, mixed>
     */
    protected function defaultMergeAttributes(): array
    {
        return [
            "class" => "form-check-input",
        ];
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * is checked
     * 
     * @var bool
     */
    public bool $isChecked;

    /**
     * is inline
     * 
     * @var bool
     */
    public bool $isinline;

    /**
     * is switch
     * 
     * @var bool
     */
    public bool $isSwitch;

    /**
     * is reverse
     * 
     * @var bool
     */
    public bool $isReverse;

    /**
     * check class
     * 
     * @var string
     */
    public string $checkClass;

    /*----------------------------------------*
     * Methods
     *----------------------------------------*/

    /**
     * set is checked
     * 
     * @param bool|null $isChecked
     * @return void
     */
    protected function setIsChecked(bool|null $isChecked): void
    {
        $this->isChecked = $isChecked ?? false;
    }

    /**
     * set is inline
     * 
     * @param bool|null $isinline
     * @return void
     */
    protected function setIsInline(bool|null $isinline): void
    {
        $this->isinline = $isinline ?? false;
    }

    /**
     * set is switch
     * 
     * @param bool|null $isSwitch
     * @return void
     */
    protected function setIsSwitch(bool|null $isSwitch): void
    {
        $this->isSwitch = $isSwitch ?? false;
    }

    /**
     * set is reverse
     * 
     * @param bool|null $isReverse
     * @return void
     */
    protected function setIsReverse(bool|null $isReverse): void
    {
        $this->isReverse = $isReverse ?? false;
    }

    /**
     * set check class
     * 
     * @return void
     */
    protected function setCheckClass(): void
    {
        $checkClass = "form-check mb-3";

        if ($this->isinline) $checkClass .= "form-check-inline";

        if ($this->isSwitch) $checkClass .= "form-switch";

        if ($this->isReverse) $checkClass .= "form-check-reverse";

        $this->checkClass = $checkClass;
    }
}
