<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
       

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-light">
        <x-jet-banner />
        @livewire('navigation-menu')

        <!-- Page Heading -->
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{-- {{ $header }} --}}
            </div>
        </header>

        <!-- Page Content -->
        <main class="container my-5">
            @yield('content')
        </main>
        <footer>
            <div class="card">
                <div class="card-header form-group row">
                    <label for="newletter">newletter</label>
                    <input type="text" name="newletter" class>
                </div>
                <div class="card-body">
                  <nav class="navbar navbar-light bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a href="{{route('/')}}">home</a>
                        </li>
                        <li>
                            <a href="{{route('show.post')}}">Article</a>
                        </li>
                        <li>
                            <a href="{{route('products.show')}}">Boutique</a>
                        </li>
                      

                    </ul>
                  </nav>
                </div>
              </div>
        </footer>
        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
