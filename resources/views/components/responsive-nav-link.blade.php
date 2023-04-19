@props(['active'])

@php
  $classes = $active ?? false ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-theme-pink text-left text-base font-medium text-white bg-theme-gray-3 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out' : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-100 bg-theme-gray-3 hover:text-gray-100 hover:bg-gray-600 hover:border-theme-pink focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>
