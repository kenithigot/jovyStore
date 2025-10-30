<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Jovy's Store" }}</title>

    <link rel="icon" type="image/png" href="{{ asset('images/icon-logo.png') }}">

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
    <link href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/script.js'])

    @livewireStyles
</head>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<body class="bg-linear-to-r from-slate-100 to-slate-200">
    {{ $slot }}

    @livewireScripts
</body>

</html>