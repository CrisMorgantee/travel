<x-layouts.base>
  <x-container class="flex items-center justify-center">
    <section class="font-semibold flex flex-col h-full justify-center">
      <h1 class="font-bold text-3xl mb-8">Boilerplate Laravel</h1>

      <h3 class="text-lg flex items-center">
        <span class="mr-3">Laravel Version</span>
        <span class="bg-slate-600 text-xs p-1 rounded"> {{ app()->version() }} </span>
      </h3>

    </section>
  </x-container>
</x-layouts.base>
