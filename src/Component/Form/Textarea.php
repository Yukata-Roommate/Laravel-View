<?php

namespace YukataRm\Laravel\View\Component\Form;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

use YukataRm\Laravel\View\Trait\Form\Id;
use YukataRm\Laravel\View\Trait\Form\Label;
use YukataRm\Laravel\View\Trait\Form\IsRequired;
use YukataRm\Laravel\View\Trait\Form\IsDisabled;
use YukataRm\Laravel\View\Trait\Form\IsReadonly;

/**
 * Form Textarea Component
 *
 * @package YukataRm\Laravel\View\Component\Form
 */
class Textarea extends Component
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
     * @param string|int|null $value
     * @param int|null $rows
     * @param bool|null $isRequired
     * @param bool|null $isDisabled
     * @param bool|null $isReadonly
     */
    public function __construct(
        string $id,
        string $label,
        string|int|null $value = null,
        int|null $rows = null,
        bool|null $isRequired = null,
        bool|null $isDisabled = null,
        bool|null $isReadonly = null
    ) {
        $this->setId($id);
        $this->setLabel($label);
        $this->setValue($value);
        $this->setRows($rows);
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
            "rows"  => $this->rows,
            "class" => "form-control",
        ];
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * value
     *
     * @var string|int|null
     */
    public string|int|null $value;

    /**
     * rows
     *
     * @var int
     */
    public int $rows;

    /*----------------------------------------*
     * Methods
     *----------------------------------------*/

    /**
     * set value
     *
     * @param string|int|null $value
     * @return void
     */
    protected function setValue(string|int|null $value): void
    {
        $this->value = $value;
    }

    /**
     * set rows
     *
     * @param int|null $rows
     * @return void
     */
    protected function setRows(int|null $rows): void
    {
        $this->rows = $rows ?? 3;
    }
}
