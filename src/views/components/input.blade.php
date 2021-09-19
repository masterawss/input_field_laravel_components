<div class="form-group full-width">
        <label for="{{ $name }}" class="full-width control-label mb-1">{{ $label ?? '' }}</label>
        {{ $post_label ?? '' }}
        <!--  $input_group => boolean -->
        <div class="{{ isset($is_input_group) ? 'input-group' : '' }}">
            <input
                value="{{ old($name, $value ?? $value_default ?? '') }}"
                class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }} {{ $class ?? '' }}"
                @if (!is_null($wiremodel))
                wire:model="{{ $wiremodel }}"
                @endif
                @if (!is_null($name))
                name="{{ $name }}"
                @endif
                type="{{ $type ?? 'text' }}"
                @isset($id) id="{{$id}}" @endisset
                aria-required="true"
                step="{{ $step ?? '' }}"
                placeholder="{{ $placeholder ?? '' }}"
                style="{{ $style ?? '' }}"
                @isset($v_model)
                v-model="{{ $v_model }}"
                @endisset
                @if (isset($min))
                    min="{{ $min }}"
                @endif
                @if (isset($max))
                    max="{{ $max }}"
                @endif
                {{ $required ?? '' }}
                @if (isset($disabled) && $disabled)
                    disabled
                @endif
                {{ $input_extra ?? '' }}
                {{ (isset($readonly) && $readonly ) ? 'readonly' : '' }}
                >
                @if (isset($append_input))
                    {{ $append_input ?? '' }}
                @endif
            @if (isset($has_input_btn) && $has_input_btn)
                <div class="input-group-append">
                    <a href="#" id="{{ $input_btn_id ?? '' }}" @isset($target_modal) data-toggle="modal" data-target="#{{$target_modal}}" @endisset class="btn btn-secondary {{ $input_btn_class ?? '' }}" {{ $input_btn_extra ?? '' }} >
                        {{  $input_btn_label ?? 'Buscar'  }}
                    </a>
                </div>
            @endif
            {{ $extra ?? '' }}
        </div>
        @if ($errors->has($name))
            <div>
                <span class="help-block text-danger">{{ $errors->first($name) }}</span>
            </div>
        @endif

    </div>
