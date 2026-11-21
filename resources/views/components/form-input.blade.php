
@props([
    'name',
    'label',
    'type' => 'text',
    'value' => null
])

<div class="form-group">

    <label for="{{ $name }}">
        {{ $label }}
    </label>

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $attributes->merge(['class' => 'form-control']) }}
    >

    @error($name)
        <span class="error">{{ $message }}</span>
    @enderror

</div>

