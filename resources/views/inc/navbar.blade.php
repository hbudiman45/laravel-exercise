{{-- <div
  class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm text-white">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a class="p-2 text-white navbar-brand"
      href="/">{{config('app.name')}}</a></h5>
<nav class="my-2 my-md-0 mr-md-3">
  <a class="p-2 text-white text-decoration-none" href="posts">Blog</a>
  <a class="p-2 text-white text-decoration-none" href="customers">Customer List</a>
  <a class="p-2 text-white text-decoration-none" href="about">About</a>
  <a class="p-2 text-white text-decoration-none" href="contact">Contact Us</a>
</nav>
</div> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: transparent">
  <a class="navbar-brand" href="{{ url('/') }}">
    {{ config('app.name', 'Laravel') }}
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
    aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample09">
    {{-- Left side of navbar --}}
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/posts')}}">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/customers')}}">Customer Lists</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/about')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown09">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>

    {{-- Right Side of navbar --}}
    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>

  </div>
</nav>