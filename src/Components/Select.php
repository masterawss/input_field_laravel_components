<?php

namespace MasterAWSS\InputFieldComponents\Components;


use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $id;
    public $optionid;
    public $label;
    public $disabled;
    public $descripcion;
    public $object;
    public $options;
    public $class;
    public $value;
    public $extra_select;
    public $multiple;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name = null,
        $id=null,
        $optionid=null,
        $label=null,
        $value = null,
        $disabled = false,
        $descripcion = null,
        $options = null,
        $object = null,
        $class = null,
        $extra_select = null,
        $multiple = null
    )
    {
        if(is_null($object) && !is_null($options))      $this->options = $options;
        elseif(!is_null($object) && is_null($options))  $this->options = $object;

        $this->id = $id;
        $this->optionid = $optionid;
        $this->value = $value;
        $this->name = $name;
        $this->label = $label;
        $this->disabled = $disabled;
        $this->descripcion = $descripcion;
        $this->class = $class;
        $this->extra_select = $extra_select;
        $this->multiple = $multiple;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('vendor.master.select');
    }
}
