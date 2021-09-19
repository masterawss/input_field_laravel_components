<?php

namespace MasterAWSS\InputFieldComponents\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $label;
    public $class;
    public $post_label;
    public $is_input_group;
    public $value;
    public $value_default;
    public $type;
    public $id;
    public $step;
    public $placeholder;
    public $style;
    public $v_model;
    public $min;
    public $max;
    public $required;
    public $disabled;
    public $input_extra;
    public $readonly;
    public $append_input;
    public $has_input_btn;
    public $input_btn_id;
    public $input_btn_class;
    public $input_btn_extra;
    public $input_btn_label;
    public $extra;
    public $target_modal;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name               = null,
        $label              = '',
        $class              = null,
        $postLabel         = null,
        $isInputGroup     = false,
        $value              = null,
        $valueDefault      = null,
        $type               = 'text',
        $id                 = null,
        $step               = '0.01',
        $placeholder        = null,
        $style              = null,
        $vModel            = null,
        $min                = null,
        $max                = null,
        $required           = false,
        $disabled           = false,
        $inputExtra        = null,
        $readonly           = false,
        $appendInput       = null,
        $hasInputBtn        = false,
        $inputBtnId         = null,
        $inputBtnClass      = null,
        $inputBtnExtra      = null,
        $inputBtnLabel      = null,
        $extra              = null,
        $targetModal              = null
    )
    {
        $this->name = $name;
        $this->class = $class;
        $this->label = $label;
        $this->post_label = $postLabel;
        $this->is_input_group = $isInputGroup;
        $this->value = $value;
        $this->value_default = $valueDefault;
        $this->type = $type;
        $this->id = $id;
        $this->step = $step;
        $this->placeholder = $placeholder;
        $this->style = $style;
        $this->v_model = $vModel;
        $this->min = $min;
        $this->max = $max;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->input_extra = $inputExtra;
        $this->readonly = $readonly;
        $this->append_input = $appendInput;
        $this->has_input_btn = $hasInputBtn;
        $this->input_btn_id = $inputBtnId;
        $this->input_btn_class = $inputBtnClass;
        $this->input_btn_extra = $inputBtnExtra;
        $this->input_btn_label = $inputBtnLabel;
        $this->extra = $extra;
        $this->target_modal = $targetModal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('vendor.master.input');
    }
}
