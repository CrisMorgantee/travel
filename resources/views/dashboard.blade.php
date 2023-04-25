<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-white">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-8">
    <div class="mx-auto grid max-w-7xl grid-cols-12 sm:px-6 lg:px-8">
      <div class="col-span-12 overflow-hidden bg-theme-gray-5 p-4 shadow-sm sm:rounded-lg lg:col-span-4">
        <form action="{{ route('travel.store') }}" method="POST" class="space-y-4 space-y-reverse">
          @csrf

          <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

          <div>
            <x-input-label for="invoice_number" :value="__('Venda')" />
            <x-text-input id="invoice_number" class="mt-1 w-full" type="text" name="invoice_number" :value="old('invoice_number')"
              required autofocus autocomplete="invoice_number" />

            <x-input-error :messages="$errors->get('invoice_number')" class="mt-2" />
          </div>

          <div>
            <x-input-label for="itinerary" :value="__('Itinerário')" />
            <x-text-input id="itinerary" class="mt-1 w-full" type="text" name="itinerary" :value="old('itinerary')" required
              autofocus autocomplete="itinerary" />

            <x-input-error :messages="$errors->get('itinerary')" class="mt-2" />
          </div>

          <div>
            <x-input-label for="team" :value="__('Equipe')" />
            <x-input-select name="team[]" :options="$employees" multiple />
            {{-- <x-text-input id="team" class="mt-1 w-full" type="text" name="team" :value="old('team')" required
              autofocus autocomplete="team" /> --}}

            <x-input-error :messages="$errors->get('team')" class="mt-2" />
          </div>

          <x-primary-button class="w-full">
            {{ __('Salvar') }}
          </x-primary-button>

        </form>

      </div>
    </div>
  </div>
</x-app-layout>
