<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
            background: #f7fafc;
        }
    </style>
</head>
<body>
    <div class="container-fluid fixed-top p-4">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="{{route('/')}}">Raseteur-Miramas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{route('/')}}">Home <span class="sr-only">(current)</span></a>
              
                <a href="{{route('articles.index')}}" class="nav-item nav-link">Articles</a>
              </div>
            </div>
            @if (Route::has('login'))
              <ul class="navbar-nav navbar-right">
                @auth
                  <li>
                    <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                  </li>
                @else
                  <li>
                    <a href="{{ route('login') }}" class="text-muted">Log in</a>
                  </li>
                  @if (Route::has('register'))
                    <li>
                      <a href="{{ route('register') }}" class="ml-4 text-muted">Register</a>
                    </li>
                  @endif
                @endif
              </ul>
              @endif
          </nav>
        </div>
        {{-- <div class="col-12 col-md-6">
            <div class="d-flex justify-content-end">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-muted">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
      </div>  --}}
    </div>
        <x-jet-banner />
        {{-- @livewire('navigation-menu') --}}

        <!-- Page Content -->
        <main class="container my-5">
            @yield('content')
        </main>


          <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <p>
              <a href="{{route('/')}}" class="text-reset">Home</a>
            </p>
            {{-- <p>
              <a href="{{route('products.show')}}" class="text-reset">Boutique</a>
            </p> --}}
            <p>
              <a href="{{route('show.post')}}" class="text-reset">Article</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> ECOLE DE RASETEURS PORTE DE LA CRAU</p> 
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="#">Gregory VASTE</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>

</body>
</html>