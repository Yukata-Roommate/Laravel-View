<?php

namespace YukataRm\Laravel\View\Component\Common;

use YukataRm\Laravel\View\Component\BaseComponent as Component;

use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Common Pagination Component
 * 
 * @package YukataRm\Laravel\View\Component\Common
 */
class Pagination extends Component
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * constructor
     * 
     * @param LengthAwarePaginator $data
     */
    public function __construct(LengthAwarePaginator $data)
    {
        $this->setData($data);
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * data
     * 
     * @var \Illuminate\Pagination\LengthAwarePaginator
     */
    public LengthAwarePaginator $data;

    /*----------------------------------------*
     * Method
     *---------------------------------------*/

    /**
     * set data
     * 
     * @param \Illuminate\Pagination\LengthAwarePaginator $data
     * @return void
     */
    protected function setData(LengthAwarePaginator $data): void
    {
        $this->data = $data;
    }
}
