<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <x-input wire:model="name" :label="__('Name')" type="text" required autofocus
            autocomplete="name" :placeholder="__('Full name')" />

        <!-- Email Address -->
        <x-input wire:model="email" :label="__('Email address')" type="email" required autocomplete="email"
            placeholder="email@example.com" />

        <!-- Password -->
        <x-password wire:model="password" :label="__('Password')" type="password" required
            autocomplete="new-password" :placeholder="__('Password')" right />

        <!-- Confirm Password -->
        <x-password wire:model="password_confirmation" :label="__('Confirm password')" type="password" required
            autocomplete="new-password" :placeholder="__('Confirm password')" right />

        <div class="flex items-center justify-end">
            <x-button type="submit" class="btn btn-primary w-full">
                {{ __('Create account') }}
            </x-button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
        <a href="{{ route('login') }}" class="hover:underline" wire:navigate>
            {{ __('Log in') }}
        </a>
    </div>
</div>
