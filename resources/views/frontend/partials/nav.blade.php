<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light">
  <div class="container">


    <a class="navbar-brand" href="{{ route('index') }}">
      <img src="{{ asset('img/white.png') }}" alt="">
    </a>
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{Route::is('index') ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item {{Route::is('products') ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('products') }}">Products</a>
        </li>      
        <li class="nav-item {{Route::is('contact') ? 'active' : ''}}">
          <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <!-- <form role="search" class="form-inline my-2 my-lg-0" action="{!! route('search') !!}" method="get"> -->


        <form class="form-inline my-2 my-lg-0" role="search" action="{!! route('search') !!}" method="get">

          <div class="input-group mb-3">
             <input type="text" class="src" name="search" placeholder="Search Products">
             <!-- <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button> -->
             <div class="input-group-append">
              
            </div>
          </div>

        </form>

      </li>
      
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link btn-cart-nav" href="{{ route('carts') }}">
          <!-- <button class="btn btn-danger"> -->
            <i class="fa fa-shopping-bag"></i>
            <span class="badge1" id="totalItems">
              {{ App\Models\Cart::totalItems() }}
            </span>
            <span class="mt-1">My Cart</span>
            
          <!-- </button> -->
          
        </a>
      </li>
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
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{ route('user.dashboard') }}">{{ __('Dashboard') }}</a>
        </li> -->
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" style="width:30px; height:30px;" class="img rounded-circle" alt="">
          {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('user.dashboard') }}">

          {{ __('My dashboard') }}
          </a>

          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
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
</div>
</nav>