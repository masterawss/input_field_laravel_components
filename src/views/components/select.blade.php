<div class="form-group">
    <label for="{{ $name }}" class="control-label mb-1 ">{{ $label ?? '' }} </label>
    <br>
    <select
        @if (!is_null($wiremodel))
        wire:model="{{ $wiremodel }}"
        @endif
        @if (!is_null($name))
        name="{{ $name }}"
        @endif
        style="width: 100%"
        @isset($id) id="{{$id}}" @endisset
        @isset($multiple) multiple="multiple" @endisset
        class="form-control {{$class ?? ''}} "
        {{ isset($disabled) && $disabled ? 'disabled' : '' }}
        {{ $extra_select ?? '' }}>

        {{$option ?? ''}}
        @isset($multiple) <optgroup> @endisset
            <option value="" >Seleccione una opción</option>
            @foreach ($options as $element)
                @php
                    $a = old($name, $value ?? '');
                @endphp

                <option {{$a == $element[$optionid ?? 'id'] ? 'selected' : '' }} value="{{ $element[$optionid ?? 'id'] }}">{{ $element[ $descripcion ?? 'descripcion' ] }} </option>
            @endforeach
        @isset($multiple) </optgroup> @endisset
    </select>
    @if ($errors->has($name))
        <span class="help-block text-danger">{{ $errors->first($name) }}</span>
    @endif
</div>
