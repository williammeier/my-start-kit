<div class="mt-4 flex flex-col gap-6">
    <div class="text-sm text-zinc-500 dark:text-white/70">
        {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="text-center font-medium !dark:text-green-400 !text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="flex flex-col items-center justify-between space-y-3">
        <x-button wire:click="sendVerification" class="btn btn-primary w-full">
            {{ __('Resend verification email') }}
        </x-button>

        <button class="btn btn-ghost text-sm cursor-pointer" wire:click="logout">
            {{ __('Log out') }}
        </button>
    </div>

</div>
