<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $title ?? 'Welcome' }} - {{ config('app.name') }}</title>
    {{-- <link rel="stylesheet" href="https://static.fundraiseup.com/a0817413343f.dashboard.css" /> --}}
    {{-- <link rel="stylesheet" href="https://static.fundraiseup.com/059caada4434.user.css" /> --}}
    <link rel="stylesheet" href="{{ URL::to('admin_panel/css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ URL::to('admin_panel/css/user.css') }}" />

</head>


<body class="home">

    {{ $slot }}

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>

</html>
