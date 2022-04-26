<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" title="OMJ Task Manager" class="flex items-center justify-start sm:justify-center">
                <img src="{{asset('storage/images/logo-circle.svg')}}" alt="OMJ" class="w-20"/>
                <span class="sr-only">OMJ Manager</span>
            </a>
        </x-slot>

        <h1 class="mb-5 text-xl font-light text-left text-gray-800 sm:text-center">Log in to your account</h1>
        <!-- Session Status -->
        <x-auth-session-status class="mb-2" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                         autofocus/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')"/>

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="current-password"/>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox"/>
                    <span class="block ml-2 text-xs font-medium text-gray-700 cursor-pointer">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
        <x-slot name="help">
            <p class="mt-4 mb-4 space-y-2 text-sm text-left text-gray-600 sm:text-center sm:space-y-0">
                @if (Route::has('password.request'))
                    <a class="w-full btn btn-sm btn-link sm:w-auto" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                @if (Route::has('password.request'))
                    <a class="w-full btn btn-sm btn-link sm:w-auto" href="{{ route('register') }}">
                        {{ __('Create an account') }}
                    </a>
                @endif
            </p>
        </x-slot>
    </x-auth-card>
    <p class="mb-4 space-y-2 text-sm text-left text-gray-600 sm:text-center sm:space-y-0">
        <a href="#" class="w-full btn btn-sm btn-link sm:w-auto">Forgot password</a>
        <a href="#" class="w-full btn btn-sm btn-link sm:w-auto">Create an account</a>
    </p>
</x-guest-layout>
