<x-guest-layout>
    <div class="sm:w-full md:w-10/12 grid sm:grid-cols-1 md:grid-cols-2 gap-6 mx-auto ">
    <div>
        <img src="{{asset('imgs/Resetps.png')}}" alt="image">
    </div>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full focus:ring-yellow-400 border-yellow-400 focus:border-none focus:ring-4" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full focus:ring-yellow-400 border-yellow-400 focus:border-none focus:ring-4" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full focus:ring-yellow-400 border-yellow-400 focus:border-none focus:ring-4" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class=" w-full text-center py-4 bg-gradient-to-br from-pink-500 to-orange-400  font-bold">
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</div>
</x-guest-layout>
