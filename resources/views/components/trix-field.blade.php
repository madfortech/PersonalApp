@props(['id', 'name', 'value' => ''])

<input
    type="hidden"
    name="{{ $name }}"
    id="{{ $id }}_input"
    value="{{ $value }}"
/>

<trix-editor
    id="{{ $id }}"
    input="{{ $id }}_input"
    {{ $attributes->merge(['class' => 'trix-content rounded-md shadow-xs border-gray-300 focus:border-indigo-300 focus:ring-3 focus:ring-indigo-200 focus:ring-opacity-50']) }}
></trix-editor>
