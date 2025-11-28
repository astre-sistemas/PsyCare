<!DOCTYPE html>
<html lang="{{ env('APP_LOCALE', 'pt-BR') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('imgs/logo.png') }}">
    @php
        $primary = env('PRIMARY_COLOR', '#000000');

        function adjustColor($hex, $percent)
        {
            $hex = str_replace('#', '', $hex);
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));

            $r = max(0, min(255, $r + ($r * $percent / 100)));
            $g = max(0, min(255, $g + ($g * $percent / 100)));
            $b = max(0, min(255, $b * (1 + $percent / 100)));

            return sprintf('#%02x%02x%02x', $r, $g, $b);
        }

        $primaryLight = adjustColor($primary, 25);  // +25% claro
        $primaryDark = adjustColor($primary, -20); // -20% escuro
    @endphp
    <style>
        :root {
            --primary:
                {{ $primary }}
            ;
            --primary-light:
                {{ $primaryLight }}
            ;
            --primary-dark:
                {{ $primaryDark }}
            ;
        }

        .glassy{
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.65);
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-red-200">

    @include('components.header')

    @include('components.content')

    @include('components.footer')

</body>

</html>