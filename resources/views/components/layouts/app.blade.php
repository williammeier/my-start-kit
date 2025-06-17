<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen font-sans antialiased bg-base-200">

    {{-- NAVBAR mobile only --}}
    <x-nav sticky full-width>
        <x-slot:brand>
            <a href="{{ route('admin.index') }}" wire:navigate>
                <x-app-logo />
            </a>
        </x-slot:brand>
        <x-slot:actions>
            <div class="flex items-center gap-2">
                <x-theme-toggle class="btn btn-soft btn-sm" responsive />
                <x-button label="Perfil" icon="o-user-circle" :link="route('admin.profile.index')" class="btn-soft btn-sm"
                    responsive />
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <x-button label="Logout" type="submit" icon="o-arrow-right-start-on-rectangle"
                        class="btn-soft btn-sm" responsive />
                </form>
                <label for="main-drawer" class="btn btn-sm btn-soft lg:hidden">
                    <x-icon name="o-bars-3" class="cursor-pointer" />
                </label>
            </div>
        </x-slot:actions>
    </x-nav>

    {{-- MAIN --}}
    <x-main with-nav full-width>
        {{-- SIDEBAR --}}
        <x-slot:sidebar :collapse-text="__('Collapse')" drawer="main-drawer" collapsible
            class="bg-base-100 lg:bg-inherit">

            {{-- MENU --}}
            <x-menu activate-by-route :title="$title ?? null">
                <x-menu-separator />

                <x-menu-item title="Início" icon="o-home" :link="route('admin.index')" />

                {{-- <x-menu-sub title="Settings" icon="o-cog-6-tooth">
                    <x-menu-item title="Wifi" icon="o-wifi" link="####" />
                    <x-menu-item title="Archives" icon="o-archive-box" link="####" />
                </x-menu-sub> --}}
            </x-menu>
        </x-slot:sidebar>

        {{-- The `$slot` goes here --}}
        <x-slot:content>
            <x-admin.breadcrumbs />

            {{ $slot }}
        </x-slot:content>
    </x-main>

    {{--  TOAST area --}}
    <x-toast />
</body>

</html>
