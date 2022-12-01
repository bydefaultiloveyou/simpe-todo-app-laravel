<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Otakuread</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />
</head>

<body>
    @if (session()->has('success'))
        <p class=" w-full px-2 py-4 bg-green-500 text-white font-Open font-semibold">
            {{ session('success') }}
        </p>
    @endif
    <x-navbar />
    {{ $slot }}
    <script src="{{ asset('js/humbeger.js') }}"></script>
    {{ $js }}
</body>

</html>
