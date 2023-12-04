<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-primary-blue-600 shadow-sm focus:ring-primary-blue-600"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Mantenha-me conectado') }}</span>
            </label>
        </div>

        <div class="flex flex-col gap-2 items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Fazer login') }}
            </x-primary-button>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class='ms-3 w-full py-2 inline-flex justify-center bg-transparent border border-primary-blue-700 rounded-md font-semibold text-xs text-primary-blue-700 uppercase hover:bg-gray-100 focus:bg-gray-100 active:bg-gray-200 focus:outline-none transition ease-in-out duration-150'>CADASTRAR</a>
            @endif
        </div>

        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-blue-600 mt-4 block w-fit m-auto"
                href="{{ route('password.request') }}">
                {{ __('Esqueceu sua senha?') }}
            </a>
        @endif
    </form>
</x-guest-layout>
