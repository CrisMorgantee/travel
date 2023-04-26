@props(['employees'])

<form action="{{ route('travel.store') }}" method="POST" class="space-y-4 space-y-reverse">
  @csrf

  <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

  <div>
    <x-input-label for="invoice_number" :value="__('Venda')" />
    <x-text-input id="invoice_number" class="mt-1 w-full" type="text" name="invoice_number" :value="old('invoice_number')" autofocus
      autocomplete="invoice_number" placeholder="Número da venda se houver" />

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
