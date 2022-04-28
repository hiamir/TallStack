<x-auth-card>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>
    <h1 class="mb-5 text-xl font-light text-left text-gray-800 sm:text-center">User registration</h1>
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" wire:submit.prevent="store" novalidate>
    @csrf

    <!-- Name -->
        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" wire:model="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-form-error field="name"></x-form-error>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email"  wire:model="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-form-error field="email"></x-form-error>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password"  wire:model="password" class="block mt-1 w-full"
                     type="password"
                     name="password"
                     required autocomplete="new-password" />
            <x-form-error field="password"></x-form-error>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="block mt-1 w-full"
                     type="password"  wire:model="password_confirmation"
                     name="password_confirmation" required />
            <x-form-error field="password_confirmation"></x-form-error>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
                {{ __('Register') }}
            </x-button>
        </div>
    </form>
    <x-slot name="help">
        <p class="mt-4 mb-4 space-y-2 text-sm text-left text-gray-600 sm:text-center sm:space-y-0">
            @if (Route::has('password.request'))
                <x-button-link href="{{ route('password.request') }}"> {{ __('Forgot your password?') }}</x-button-link>
            @endif
            @if (Route::has('login'))
                <x-button-link href="{{ route('login') }}"> {{ __('Already have an account!') }}</x-button-link>
            @endif
        </p>
    </x-slot>
</x-auth-card>
