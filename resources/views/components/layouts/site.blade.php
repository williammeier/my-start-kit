<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen font-sans antialiased bg-base-200">
    {{-- Navbar --}}

    {{-- Main --}}
    {{ $slot }}

    {{--  Footer --}}

    {{--  TOAST area --}}
    <x-toast />
</body>

</html>
