@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'bg-theme-gray-3 text-white border-theme-gray-4 focus:border-theme-pink focus:ring-theme-pink rounded-md shadow-sm',
]) !!}>
