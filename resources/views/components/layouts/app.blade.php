<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body>
    <div class="max-w-4xl mx-auto px-6 grid grid-cols-8 gap-12 mt-16">
        <div class="col-span-2 border-r border-slate-200 space-y-6">
            @auth
                <ul>
                    <li>
                        <span class="font-bold text-lg text-green-400 hover:text-slate-800 py-1"
                            href="/">{{ auth()->user()->name }}</a>
                        </span>
                    <li>
                        <a class="font-bold text-lg text-slate-600 hover:text-slate-800 py-1" href="/">Feed</a>
                    </li>
                </ul>



                <ul>
                    <li>
                        <span class="font-bold text-lg text-slate-600 hover:text-slate-800 py-1" href="/">My books</a>
                        </span>
                    </li>
                    <li>
                        <span class="font-bold text-lg text-slate-600 hover:text-slate-800 py-1" href="/">Add a
                            book</a>
                        </span>
                    </li>
                    <li>
                        <span class="font-bold text-lg text-slate-600 hover:text-slate-800 py-1" href="/">Friends</a>
                        </span>
                    </li>

                </ul>

                <ul>
                    <li>
                        <span class="font-bold text-lg text-slate-600 hover:text-slate-800 py-1" href="/">Logout</a>
                        </span>

                </ul>
            @endauth
            @guest
            <ul>
                <li>
                    <span class="font-bold text-lg text-slate-600 hover:text-slate-800 py-1" href="/">Login</a>
                    </span>
                </li>
                <li>
                    <span class="font-bold text-lg text-slate-600 hover:text-slate-800 py-1" href="/">Register</a>
                    </span>
                </li>
            </ul>
            @endguest

        </div>
        <div class="col-span-6">
            @isset($header)
                <h1 class="text-3xl font-bold mb-6">{{ $header }}</h1>
            @endisset
            {{ $slot }}
        </div>
    </div>
</body>

</html>
