<x-guest-layout>
    <div class="sm:w-full md:w-10/12 grid sm:grid-cols-1 md:grid-cols-2 gap-6 mx-auto ">

    <div>
        <img src="{{asset('imgs/f.png')}}" alt="image">

    </div>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full focus:ring-yellow-400 border-yellow-400 focus:border-none focus:ring-4" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class=" w-full text-center py-4 bg-gradient-to-br from-pink-500 to-orange-400  font-bold ">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</div>
</x-guest-layout>
