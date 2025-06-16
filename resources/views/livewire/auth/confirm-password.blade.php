<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Confirm password')" :description="__(
        'This is a secure area of the application. Please confirm your password before continuing.',
    )" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="confirmPassword" class="flex flex-col gap-6">
        <!-- Password -->
        <x-input wire:model="password" :label="__('Password')" type="password" required
            autocomplete="new-password" :placeholder="__('Password')" viewable />

        <x-button type="submit" class="btn btn-primary w-full">
            {{ __('Confirm') }}
        </x-button>
    </form>
</div>
