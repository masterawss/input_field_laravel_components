<?php

namespace MasterAWSS\InputFieldComponents\Components;

use Illuminate\View\Component;

class SimpleList extends Component
{
    public $label = null;
    public $value = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = null, $value = null)
    {
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('vendor.master.simple-list');
    }
}
