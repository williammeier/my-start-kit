<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col gap-6">
        <!-- Email Address -->
        <x-input wire:model="email" :label="__('Email address')" type="email" required autofocus
            autocomplete="email" placeholder="email@example.com" />

        <!-- Password -->
        <div class="relative">
            <x-password wire:model="password" :label="__('Password')" type="password" required
                autocomplete="current-password" :placeholder="__('Password')" right />

            @if (Route::has('password.request'))
                <a class="absolute end-0 top-0 text-sm hover:underline"
                    href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <!-- Remember Me -->
        <x-checkbox wire:model="remember" :label="__('Remember me')" />

        <div class="flex items-center justify-end">
            <x-button type="submit" class="btn btn-primary w-full">{{ __('Log in') }}
            </x-button>
        </div>
    </form>

    @if (Route::has('register'))
        <div
            class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Don\'t have an account?') }}
            <a href="{{ route('register') }}" class="hover:underline" wire:navigate>
                {{ __('Sign up') }}
            </a>
        </div>
    @endif
</div>
