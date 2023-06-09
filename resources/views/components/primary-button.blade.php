<button
  {{ $attributes->merge([
      'type' => 'submit',
      'class' =>
          'inline-flex items-center justify-center px-4 py-3 bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-theme-blue-dark focus:bg-theme-blue active:bg-theme-blue focus:outline-none focus:ring-2 focus:ring-theme-blue focus:ring-offset-2 transition ease-in-out duration-150',
  ]) }}>
  {{ $slot }}
</button>
