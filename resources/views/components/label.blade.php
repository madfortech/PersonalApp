@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-gray-900 text-sm font-bold mb-2']) }}>
    {{ $value ?? $slot }}
</label>
