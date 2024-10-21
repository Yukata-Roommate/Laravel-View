<?php

namespace YukataRm\Laravel\View\Component\Form;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

use YukataRm\Laravel\View\Trait\Form\Id;
use YukataRm\Laravel\View\Trait\Form\Label;
use YukataRm\Laravel\View\Trait\Form\IsRequired;
use YukataRm\Laravel\View\Trait\Form\IsDisabled;
use YukataRm\Laravel\View\Trait\Form\IsReadonly;

/**
 * Form Select Component
 *
 * @package YukataRm\Laravel\View\Component\Form
 */
class Select extends Component
{
    use Id;
    use Label;
    use IsRequired;
    use IsDisabled;
    use IsReadonly;

    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     *
     * @param string $id
     * @param string $label
     * @param bool|null $isRequired
     * @param bool|null $isDisabled
     * @param bool|null $isReadonly
     */
    public function __construct(
        string $id,
        string $label,
        bool|null $isRequired = null,
        bool|null $isDisabled = null,
        bool|null $isReadonly = null
    ) {
        $this->setId($id);
        $this->setLabel($label);
        $this->setIsRequired($isRequired);
        $this->setIsDisabled($isDisabled);
        $this->setIsReadonly($isReadonly);
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
        return [
            "class" => "form-select",
        ];
    }
}
