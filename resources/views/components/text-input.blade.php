@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'bg-theme-gray-3 text-white border-theme-gray-4 focus:border-blue-700 focus:ring-blue-700 rounded-md shadow-sm',
]) !!}>
