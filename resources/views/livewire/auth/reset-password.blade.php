<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Reset password')" :description="__('Please enter your new password below')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="resetPassword" class="flex flex-col gap-6">
        <!-- Email Address -->
        <x-input wire:model="email" :label="__('Email')" type="email" required autocomplete="email" />

        <!-- Password -->
        <x-password wire:model="password" :label="__('Password')" type="password" required
            autocomplete="new-password" :placeholder="__('Password')" right />

        <!-- Confirm Password -->
        <x-password wire:model="password_confirmation" :label="__('Confirm password')" type="password" required
            autocomplete="new-password" :placeholder="__('Confirm password')" right />

        <div class="flex items-center justify-end">
            <x-button type="submit" class="btn btn-primary w-full">
                {{ __('Reset password') }}
            </x-button>
        </div>
    </form>
</div>
