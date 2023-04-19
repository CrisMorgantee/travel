<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div>
      <x-input-label for="email" :value="__('Email')" />
      <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
        autofocus autocomplete="username" />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-input-label for="password" :value="__('Senha')" />

      <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required
        autocomplete="current-password" />

      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Remember Me -->
    <div class="mt-4 block">
      <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox"
          class="rounded border-theme-gray-4 bg-theme-gray-3 text-theme-pink shadow-sm focus:ring-theme-pink"
          name="remember">
        <span class="ml-2 text-sm text-theme-gray-1">{{ __('Lembrar') }}</span>
      </label>
    </div>

    <div class="mt-4 flex items-center justify-end">
      @if (Route::has('password.request'))
        <a class="rounded-md text-sm text-theme-gray-1 underline hover:text-theme-gray-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
          href="{{ route('password.request') }}">
          {{ __('Esqueceu a senha?') }}
        </a>
      @endif

      <x-primary-button class="ml-3">
        {{ __('Entrar') }}
      </x-primary-button>
    </div>
  </form>
</x-guest-layout>
