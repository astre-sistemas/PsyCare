<!DOCTYPE html>
<html lang="{{ env('APP_LOCALE', 'pt-BR') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>

    <!-- Favicon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('imgs/logo.png') }}">
    @php
        $primary = env('PRIMARY_COLOR', '#2563eb');

        function adjustColor($hex, $percent)
        {
            $hex = str_replace('#', '', $hex);
            if (strlen($hex) !== 6)
                return '#000000';
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));

            $r = (int) max(0, min(255, $r + ($r * $percent / 100)));
            $g = (int) max(0, min(255, $g + ($g * $percent / 100)));
            $b = (int) max(0, min(255, $b + ($b * $percent / 100)));

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

        .glassy {
            background: rgba(255, 255, 255, 0.42);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(8.6px);
            -webkit-backdrop-filter: blur(8.6px);
        }

        .glassy-white {
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            background: rgba(255, 255, 255, 0.12);
        }

        .menu-link {
            color: var(--primary-dark);
            transition: 0.2s ease;
        }

        .menu-link:hover {
            opacity: 0.7;
        }

        .btn-primary {
            background: var(--primary);
            color: #fff;
            transition: background-color .2s ease;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('components.header')

    @include('components.section1')
    @include('components.section2')

    @include('components.footer')

</body>

</html>