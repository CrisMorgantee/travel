<x-layouts.base>
  <x-container class="flex items-center justify-center">
    <section class="flex h-full flex-col justify-center font-semibold">
      <h1 class="mb-8 text-3xl font-bold">Boilerplate Laravel</h1>

      <h3 class="flex items-center text-lg">
        <span class="mr-3">Laravel Version</span>
        <span class="rounded bg-slate-600 p-1 text-xs"> {{ app()->version() }} </span>
      </h3>

    </section>
  </x-container>
</x-layouts.base>
