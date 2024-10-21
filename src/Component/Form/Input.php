<?php

namespace YukataRm\Laravel\View\Component\Form;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

use YukataRm\Laravel\View\Trait\Form\Id;
use YukataRm\Laravel\View\Trait\Form\Label;
use YukataRm\Laravel\View\Trait\Form\IsRequired;
use YukataRm\Laravel\View\Trait\Form\IsDisabled;
use YukataRm\Laravel\View\Trait\Form\IsReadonly;

/**
 * Form Input Component
 *
 * @package YukataRm\Laravel\View\Component\Form
 */
class Input extends Component
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
     * @param string|null $type
     * @param bool|null $isRequired
     * @param bool|null $isDisabled
     * @param bool|null $isReadonly
     */
    public function __construct(
        string $id,
        string $label,
        string|null $type = null,
        bool|null $isRequired = null,
        bool|null $isDisabled = null,
        bool|null $isReadonly = null
    ) {
        $this->setId($id);
        $this->setLabel($label);
        $this->setType($type);
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
            "type"  => $this->type,
            "class" => "form-control",
        ];
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * type
     *
     * @var string
     */
    public string $type;

    /*----------------------------------------*
     * Methods
     *----------------------------------------*/

    /**
     * set type
     *
     * @param string|null $type
     * @return void
     */
    protected function setType(string|null $type): void
    {
        $this->type = $type ?? "text";
    }
}
