@props(['value'])

<label {{ $attributes->merge(['class' => 'block mb-1 text-xs font-medium text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
