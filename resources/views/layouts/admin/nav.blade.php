  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.dashboard')}}" class="nav-link">Home</a>
      </li>
      <!--<li class="nav-item d-none d-sm-inline-block">-->
      <!--  <a href="#" class="nav-link">Contact</a>-->
      <!--</li>-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class=" btn btn-primary btn-sm" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            {{ __('message.Choose language') }}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{$properties['native'] }}
                </a>
            @endforeach
        </div>

      </li>
        @if(Route::has('login'))
            @auth
                @if(Auth::user()->is_admin === 2)
                    <!-- Authentications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-user"></i>
                            <span class="">{{ auth()->user()->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">Your Informations</span>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="" class="dropdown-item  text-center" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();"> <i class="fas fa-power-off"> </i> 
                                    {{ __('Logout') }}
                                </a>
                            </form>
                        </div>
                    </li>
                @else
                <li class="nav-item dropdown">
                    <a href="{{ Route('customer.home') }}" class="dropdown-item dropdown-footer">Home</a>
                </li>
            @endauth  
                @endif  
        @else
                <li class="nav-item dropdown">
                    <a href="{{ Route('register') }}" class="dropdown-item dropdown-footer">Register</a>
                </li> 
                <li class="nav-item dropdown">
                    <a href="{{ Route('login') }}" class="dropdown-item dropdown-footer">Login</a>
                </li>
        @endif
    </ul>
  </nav>
  <!-- /.navbar -->
