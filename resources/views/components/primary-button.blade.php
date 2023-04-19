<button
  {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-theme-pink border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-pink-700 focus:bg-theme-pink active:bg-theme-pink focus:outline-none focus:ring-2 focus:ring-theme-pink focus:ring-offset-2 transition ease-in-out duration-150']) }}>
  {{ $slot }}
</button>
