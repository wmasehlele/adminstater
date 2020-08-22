<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        function openNav () {
            if (document.getElementById("mySidenav").style.width == "250px") { // close
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("app").style.marginLeft = "0";
                
                // I will get back to in future
                // $('#mySidenav').find('#menu-title').each(function() {
                //     $('#menu-title').css('display','none');
                // });
                //document.getElementById("menu-title").style.display = "none";
            } else { // open
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("app").style.marginLeft = "250px";
                // $('#mySidenav').find('#menu-title').each(function() {
                //     $('#menu-title').css('display','inline');
                // });                
            }
        }
    </script>    
</head>
<body>
    
    @auth
        @extends('layouts.companystyle', ['company' => $company, 'company_setups'=>$company_setups])
    @endauth

    <div>       
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="main-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <svg width="125" height="28" viewBox="0 0 114 29" xmlns="http://www.w3.org/2000/svg">
                        <title>Logotype</title>
                        <path d="M4.773.917v23.046h8.338v3.976H.333V.917h4.44zm24.01 11.465V9.95h4.208v17.99h-4.207v-2.433c-.567.901-1.37 1.609-2.413 2.123-1.042.515-2.091.772-3.146.772-1.365 0-2.613-.25-3.745-.752a8.758 8.758 0 0 1-2.915-2.066 9.6 9.6 0 0 1-1.89-3.01 9.717 9.717 0 0 1-.677-3.63c0-1.26.225-2.464.676-3.61a9.56 9.56 0 0 1 1.891-3.03 8.766 8.766 0 0 1 2.915-2.065c1.132-.502 2.38-.752 3.745-.752 1.055 0 2.104.257 3.146.772 1.042.515 1.846 1.222 2.413 2.123zm-.386 8.763a6.293 6.293 0 0 0 .387-2.2c0-.773-.13-1.506-.387-2.2a5.58 5.58 0 0 0-1.08-1.815 5.233 5.233 0 0 0-1.68-1.236c-.656-.308-1.383-.463-2.18-.463-.799 0-1.52.155-2.163.463a5.29 5.29 0 0 0-1.66 1.236 5.307 5.307 0 0 0-1.06 1.814 6.56 6.56 0 0 0-.368 2.2c0 .772.122 1.506.367 2.2.244.696.598 1.3 1.062 1.815a5.279 5.279 0 0 0 1.66 1.236c.642.309 1.363.463 2.161.463s1.525-.154 2.181-.463a5.222 5.222 0 0 0 1.68-1.236 5.575 5.575 0 0 0 1.08-1.814zm7.914 6.794V9.95h11.427v4.141h-7.22v13.85h-4.207zm26.675-15.557V9.95h4.208v17.99h-4.208v-2.433c-.566.901-1.37 1.609-2.413 2.123-1.042.515-2.09.772-3.146.772-1.364 0-2.612-.25-3.744-.752a8.758 8.758 0 0 1-2.915-2.066 9.6 9.6 0 0 1-1.891-3.01 9.717 9.717 0 0 1-.676-3.63c0-1.26.225-2.464.676-3.61a9.56 9.56 0 0 1 1.89-3.03 8.766 8.766 0 0 1 2.916-2.065c1.132-.502 2.38-.752 3.744-.752 1.055 0 2.104.257 3.146.772 1.043.515 1.847 1.222 2.413 2.123zm-.386 8.763a6.293 6.293 0 0 0 .386-2.2c0-.773-.13-1.506-.386-2.2a5.58 5.58 0 0 0-1.08-1.815 5.233 5.233 0 0 0-1.68-1.236c-.656-.308-1.384-.463-2.181-.463-.798 0-1.519.155-2.162.463a5.29 5.29 0 0 0-1.66 1.236 5.307 5.307 0 0 0-1.061 1.814 6.56 6.56 0 0 0-.367 2.2c0 .772.121 1.506.367 2.2.244.696.598 1.3 1.061 1.815a5.279 5.279 0 0 0 1.66 1.236c.643.309 1.364.463 2.162.463.797 0 1.525-.154 2.181-.463a5.222 5.222 0 0 0 1.68-1.236 5.575 5.575 0 0 0 1.08-1.814zM84.063 9.95h4.262L81.42 27.94H76.13L69.224 9.95h4.262l5.289 13.776L84.063 9.95zm13.44-.463c5.729 0 9.636 5.078 8.902 11.021H92.446c0 1.552 1.567 4.552 5.288 4.552 3.2 0 5.345-2.815 5.346-2.817l2.843 2.2c-2.542 2.713-4.623 3.96-7.882 3.96-5.823 0-9.77-3.684-9.77-9.458 0-5.223 4.079-9.458 9.231-9.458zm-5.046 7.894h10.084c-.031-.346-.578-4.552-5.072-4.552-4.495 0-4.98 4.206-5.012 4.552zm16.688 10.558V.917h4.208v27.022h-4.208z" fill="#FF2D20" fill-rule="evenodd"/>
                    </svg>
                </a>
                <svg class="bi nav-drawer" width="34" height="34" fill="currentColor" onclick="openNav()">
                    <use xlink:href="icons/bootstrap-icons.svg#list"/>
                </svg>  

                @if ($branches)
                    <select class="form-control form-control choose-branch text-uppercase">
                        @if(Auth::user()->type == 'company')
                        <option class="text-uppercase" value="0">All Branches</option>
                        @endif
                        @foreach ($branches as $branch)
                            <option class="text-uppercase" value="{{ $branch->id }}">{{ $branch->name }}</option>
                        @endforeach
                    </select>              
                @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="logged-user dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="#" class="dropdown-item">Profile</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                    <div class="dropdown-divider"></div>
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
        <div class="side-nav-wrapper">
            <div id="mySidenav" class="sidenav">    
                @foreach($user_permissions as $user_permission)        
                    @if($user_permission->is_menu_item)    
                        <a id="menu_item" href="/<?=$user_permission->technical_name?>" class="<?=Route::currentRouteName() == $user_permission->technical_name ? 'active-menu-item' : '';?>">
                            <svg class="bi menu-icons mr-2" width="25" height="25" fill="currentColor">
                                <use xlink:href="icons/bootstrap-icons.svg#{{ $user_permission->icon_title }}"/>
                            </svg>
                            <span id="menu-title" class="menu-title mt-1">
                                {{ $user_permission->name }}
                            </span>
                        </a>
                    @endif
                @endforeach
    <!--
                <a href="{{ route('calendar') }}" class="<?=Route::currentRouteName() == 'calendar' ? 'active-menu-item' : '';?>">
                    <svg class="bi menu-icons mr-2" width="25" height="25" fill="currentColor">
                        <use xlink:href="icons/bootstrap-icons.svg#calendar2-event"/>
                    </svg>
                    <span class="menu-title mt-1">
                        Calender
                    </span>
                </a>
                <a href="{{ route('clients') }}" class="<?=Route::currentRouteName() == 'clients' ? 'active-menu-item' : '';?>">
                    <svg class="bi menu-icons mr-2" width="25" height="25" fill="currentColor">
                        <use xlink:href="icons/bootstrap-icons.svg#person-check-fill"/>
                    </svg>
                    <span class="menu-title mt-1">
                        Clients
                    </span>
                </a>
                <a href="{{ route('reports') }}" class="<?=Route::currentRouteName() == 'reports' ? 'active-menu-item' : '';?>">
                    <svg class="bi menu-icons mr-2" width="25" height="25" fill="currentColor">
                        <use xlink:href="icons/bootstrap-icons.svg#folder-fill"/>
                    </svg>
                    <span class="menu-title mt-1">
                        Reports
                    </span>
                </a>
                <a href="{{ route('users') }}" class="<?=Route::currentRouteName() == 'users' ? 'active-menu-item' : '';?>">
                    <svg class="bi menu-icons mr-2" width="25" height="25" fill="currentColor">
                        <use xlink:href="icons/bootstrap-icons.svg#people-fill"/>
                    </svg>
                    <span class="menu-title mt-1">
                        Users
                    </span>
                </a>                
                <a href="{{ route('branch_settings') }}" class="<?=Route::currentRouteName() == 'branch_settings' ? 'active-menu-item' : '';?>">
                    <svg class="bi menu-icons mr-2" width="25" height="25" fill="currentColor">
                        <use xlink:href="icons/bootstrap-icons.svg#gear-fill"/>
                    </svg>
                    <span class="menu-title mt-1">
                        Branch Setting
                    </span>
                </a>
                <a href="{{ route('company_settings') }}" class="<?=Route::currentRouteName() == 'company_settings' ? 'active-menu-item' : '';?>">
                    <svg class="bi menu-icons mr-2" width="25" height="25" fill="currentColor">
                        <use xlink:href="icons/bootstrap-icons.svg#gear-wide-connected"/>
                    </svg>
                    <span class="menu-title mt-1">
                        Company Settings
                    </span>
                </a>  
    -->              
            </div>
        </div>     
        <main id="app">
            @yield('content')
        </main>
    </div>
</body>
</html>
