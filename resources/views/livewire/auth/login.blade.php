<div>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
        </x-slot>

        <h1 class="mb-5 text-xl font-light text-left text-gray-800 sm:text-center">Log in to your account</h1>
        <!-- Session Status -->
        <x-auth-session-status class="mb-2" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" wire:submit.prevent="store" novalidate>
        @csrf

        <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" wire:model="email" class="block mt-1 w-full" type="email" name="email"
                         :value="old('email')" required
                         autofocus/>
                <x-form-error field="email"></x-form-error>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')"/>

                <x-input id="password" wire:model="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="current-password"/>
                <x-form-error field="password"></x-form-error>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input type="checkbox" name="remember" wire:model="remember" class="form-checkbox"/>
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
                    <x-button-link
                        href="{{ route('password.request') }}"> {{ __('Forgot your password?') }}</x-button-link>
                @endif
                @if (Route::has('register'))
                    <x-button-link href="{{ route('register') }}"> {{ __('Create an account') }}</x-button-link>
                @endif
            </p>
        </x-slot>
    </x-auth-card>
</div>
