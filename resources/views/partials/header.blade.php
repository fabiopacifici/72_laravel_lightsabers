<header class="text-center">
  <div class="logo">
    <img src="{{ Vite::asset('resources/img/logo.avif') }}" alt="">
  </div>
  <nav class="nav justify-content-center mt-4">
    <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-secondary text-white' : '' }}" href="{{route('home')}}" aria-current="page">Home</a>
    <a class="nav-link {{ Route::currentRouteName() === 'saber' ? 'bg-secondary text-white' : ''}}" href="{{route('saber')}}">Spade</a>
  </nav>
</header>
