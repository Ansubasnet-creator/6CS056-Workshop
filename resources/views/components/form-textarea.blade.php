
@props([
    'name',
    'label',
    'value' => null
])

<div class="form-group">

    <label for="{{ $name }}">
        {{ $label }}
    </label>

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="4"
        {{ $attributes->merge(['class' => 'form-control']) }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
        <span class="error">{{ $message }}</span>
    @enderror

</div>
