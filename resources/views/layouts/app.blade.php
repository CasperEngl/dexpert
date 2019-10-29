<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('resources/img/logo/favicon.png') }}">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <div class="py-3 bg-white">
            <div class="container">
                <div class="row-tight justify-center lg:justify-start uppercase text-gray-700">
                    <div class="my-1 col hidden md:block">Karsevej 17, 4845 Snekkerød</div>
                    <div class="my-1 col hidden lg:block">+45 18 19 20 00</div>
                    <div class="my-1 col hidden lg:block flex-1">dexperten@dexperten.dk</div>
                    <div class="my-1 col">Man-fre: 8.00 - 16.00</div>
                    <div class="my-1 col">Lørdag: 8.00 - 14.00</div>
                </div>
            </div>
        </div>
        <nav class="z-50 sticky top-0 pr-4 w-full flex items-center justify-between flex-wrap bg-gray-900 print:hidden">
            <div class="flex-1 flex items-center flex-shrink-0 text-white mr-6">
                <a href="{{ url('/') }}" class="text-white hover:text-white" href="#">
                    <img class="max-w-48" src="{{ asset('img/logo/logo_with_logotext.png') }}" alt="">
                </a>
            </div>
    
            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-400 border-gray-400 hover:text-white hover:border-white">
                    <svg class="icon fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
    
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block py-2 lg:py-0" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mx-1">
                        <a class="text-lg {{ request()->routeIs('home') ? 'text-white' : 'text-gray-400' }} hover:text-white text-sm p-3 inline-block" href="{{ route('home') }}">Forside</a>
                    </li>
                    <li class="mx-1">
                        <a class="text-lg {{ request()->path() === 'side/tilbud' ? 'text-white' : 'text-gray-400' }} hover:text-white text-sm p-3 inline-block" href="{{ route('page', 'tilbud') }}">Tilbud</a>
                    </li>
                    <li class="mx-1">
                        <a class="text-lg {{ request()->routeIs('subscription.index') ? 'text-white' : 'text-gray-400' }} hover:text-white text-sm p-3 inline-block" href="{{ route('subscription.index') }}">Medlemskab</a>
                    </li>
                    <li class="mx-1">
                        <a class="text-lg {{ request()->path() === 'side/teknik' ? 'text-white' : 'text-gray-400' }} hover:text-white text-sm p-3 inline-block" href="{{ route('page', 'teknik') }}">Teknik</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="main-content">
            @yield('content')
        </main>

        <footer class="py-16 flex items-center bg-gray-900 print:hidden">
            <div class="container">
                <div class="row">
                    <div class="my-3 col w-full lg:w-1/3">
                        <div class="markdown dark">
                            @markdown
                            ### Kontakt

                            Karsevej 17,  
                            4845 Snekkerød

                            Telefon: +45 18 19 20 00  
                            Mail: <dexperten@dexperten.dk>
                            
                            Man-fre: 8.00 - 16.00  
                            Lørdag: 8.00 - 14.00
                            @endmarkdown
                        </div>
                    </div>
                    <div class="my-3 col w-full lg:w-1/3">
                        <div class="markdown dark">
                            @markdown
                            ### Links

                            <nav>
                                <a class="py-1 block text-xl hover:text-white" href="{{ route('home') }}">Forside</a>
                                <a class="py-1 block text-xl hover:text-white" href="{{ route('page', 'tilbud') }}">Tilbud</a>
                                <a class="py-1 block text-xl hover:text-white" href="{{ route('subscription.index') }}">Medlem</a>
                                <a class="py-1 block text-xl hover:text-white" href="{{ route('page', 'teknik') }}">Teknik</a>
                            </nav>
                            @endmarkdown
                        </div>
                    </div>
                    <div class="my-3 col w-full lg:w-1/3">
                        <div class="markdown dark">
                            @markdown
                            ### Vi servicerer
                            @endmarkdown
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/volkswagen.png') }}" alt="volkswagen logo">
                            </div>
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/audi.png') }}" alt="audi logo">
                            </div>
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/bmw.png') }}" alt="bmw logo">
                            </div>
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/citroen.png') }}" alt="citroen logo">
                            </div>
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/fiat.png') }}" alt="fiat logo">
                            </div>
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/ford.png') }}" alt="ford logo">
                            </div>
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/mercedes.png') }}" alt="mercedes logo">
                            </div>
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/nissan.png') }}" alt="nissan logo">
                            </div>
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/opel.png') }}" alt="opel logo">
                            </div>
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/peugeot.png') }}" alt="peugeot logo">
                            </div>
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/renault.png') }}" alt="renault logo">
                            </div>
                            <div class="col">
                                <img src="{{ asset('resources/img/car_brands/toyota.png') }}" alt="toyota logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="fixed flex flex-col" style="bottom: 2rem; left: 2rem;">
            @include('partials.status-box')
        </div>
    </div>

    <script defer>
        window.addEventListener('DOMContentLoaded', () => {
            document.getElementById('nav-toggle').addEventListener('click', () => {
                document.getElementById("nav-content").classList.toggle("hidden");
            });
        })
    </script>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
