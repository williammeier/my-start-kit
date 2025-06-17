<section class="w-full space-y-5">
    <x-card>
        <div class="relative w-full">
            <x-header title="Perfil" subtitle="Altere seus dados" class="!mb-0" separator />
        </div>
    </x-card>

    <x-card>
        <x-header :title="__('User')" size="text-xl" class="!mb-4" separator />
        <form wire:submit="updateProfileInformation" class="w-full max-w-lg space-y-6">
            <x-input wire:model="name" :label="__('Name')" type="text" required autofocus
                autocomplete="name" />

            <div>
                <x-input wire:model="email" :label="__('Email')" type="email" required
                    autocomplete="email" />
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <x-button type="submit" :label="__('Save')" class="btn-primary" spinner />
                </div>
            </div>
        </form>
    </x-card>

    <x-card>
        <x-header :title="__('Password')" size="text-xl" class="!mb-4" separator />
        <form wire:submit="updatePassword" class="w-full max-w-lg space-y-6">
            <x-password wire:model="current_password" :label="__('Current password')" type="password" right
                required autocomplete="current-password" />
            <x-password wire:model="password" :label="__('New password')" type="password" right required
                autocomplete="new-password" />
            <x-password wire:model="password_confirmation" :label="__('Confirm Password')" type="password" right
                required autocomplete="new-password" />

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <x-button type="submit" :label="__('Save')" class="btn-primary" spinner />
                </div>
            </div>
        </form>
    </x-card>
</section>
