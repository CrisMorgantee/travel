@props(['active'])

@php
  $classes = $active ?? false ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-theme-pink text-left text-base font-medium text-white bg-slate-700 focus:outline-none focus:text-slate-900 focus:bg-slate-400 focus:border-slate-700 transition duration-150 ease-in-out' : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-100 bg-slate-700 hover:text-slate-300 hover:bg-slate-600 hover:border-theme-pink focus:outline-none focus:text-slate-800 focus:bg-slate-300 focus:border-slate-400 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>
