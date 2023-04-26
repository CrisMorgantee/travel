<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight">
      {{ __('Registro de Viagens') }}
    </h2>
  </x-slot>

  <div class="py-8">

    <div class="mx-auto grid max-w-7xl grid-cols-12 sm:px-6 lg:px-8">
      <div class="col-span-12 overflow-hidden bg-gray-800 p-4 shadow-sm sm:rounded-lg lg:col-span-4">
        {{-- <x-travel-create :employees="$employees" /> --}}
        <ul class="space-y-4">
          @foreach ($travels as $travel)
            <li class="rounded-md bg-gray-700 py-2 px-4">
              <div class="mb-2 flex flex-col">
                <h3 class="text-lg font-bold"> {{ $travel->itinerary }}</h3>
                <p class="text-xs">Criado por <span>{{ $travel->registeredBy() }}</span></p>
              </div>

              <div class="mb-2 flex flex-col">
                <x-input-label class="" value="{{ __('Equipe') }}" />
                <ul class="flex flex-wrap">

                  @foreach ($travel->team as $teamMember)
                    <li class="mr-2 text-sm last:mr-0">
                      <span class="">•</span>
                      {{ $teamMember->user->name }}
                    </li>
                  @endforeach
                </ul>
              </div>

              @if ($travel->invoices->count() > 0)
                <div class="mb-2 flex flex-col">
                  <x-input-label class="" value="{{ __('Venda') }}" />
                  <ul class="flex space-x-2">
                    @foreach ($travel->invoices as $invoice)
                      <li class="text-sm">{{ $invoice->invoice_number }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</x-app-layout>
