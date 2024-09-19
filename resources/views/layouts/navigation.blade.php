<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <meta name="description" content="">
 <meta name="author" content="Tooplate">
 
 <title>Waso Strategy - Bootstrap 5 HTML Template</title>

                                          <!-- CSS FILES -->
<link rel="preconnect" href="https://fonts.googleapis.com">  
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ asset('css/tooplate-waso-strategy.css') }}" rel="stylesheet">

</head>

                                            <!--Header -->                     
<header>   
   <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
              

                                  <!-- Seccion y usuario utenticado -->
                 <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                     
                </div>
            </div>

                                       <!-- Settings Dropdown -->
         <div class="hidden sm:flex sm:items-center sm:ms-6">
             <x-dropdown align="right" width="48">
                 <x-slot name="trigger">
                    
                         
                         <!-- Si el usuario está autenticado, mostrar su nombre -->
         @auth
            <button class="inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                <div>{{ Auth::user()->name }}</div> 
                 <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                 </div>
                    </button>
                 </x-slot>
                 <x-slot name="content">
                     <x-dropdown-link :href="route('profile.edit')">
                         {{ __('Profile') }}
                     </x-dropdown-link>

                                          <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            @endauth
            @guest
              <!-- Si el usuario no está autenticado, mostrar los enlaces de Iniciar Sesión y Registrarse -->
             <div class="-mx-3 flex flex-1 justify-end">
            <button><a href="{{ route('login') }}"  class="inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            Iniciar Sesión</a></button>
           
            <button> <a href="{{ route('register') }}" 
              class="inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            Registrarse</a></button>
             </div>
             @endguest
                                           
                                    <!--menu hamburguesa-->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

                                       <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

                                       <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
            @auth
    <!-- Si el usuario está autenticado, mostrar su nombre -->
    <div>{{ Auth::user()->name }}</div>

 

            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
              
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>   @endauth

  <!-- Si el usuario no está autenticado, mostrar los enlaces de Iniciar Sesión y Registrarse -->
  @guest <div>
 
    <a href="{{ route('login') }}" >Iniciar Sesión</a>  <br>
        <a href="{{ route('register') }}">Registrarse</a>
    </div>
@endguest

            </div>
        </div>
    </div>






 <!--redes sociales-->

    <div class="site-header">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-3 col-md-5 col-7">
                        <p class="text-white mb-0">
                            <i class="bi-clock site-header-icon me-2"></i>
                            L-V 06:00-19:00
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-3 col-5">
                        <p class="text-white mb-0">
                            <a href="tel: 240-480-9600" class="text-white">
                                <i class="bi-telephone site-header-icon me-2"></i>
                               601-420-58-96
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12 ms-auto">
                        <ul class="social-icon">
                            <li><a href="https://facebook.com/tooplate" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="https://pinterest.com/tooplate" class="social-icon-link bi-pinterest"></a></li>

                            <li><a href="https://twitter.com/minthu" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="https://www.youtube.com/tooplate" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
 </div>

                                                           <!--secciones-->

        <nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">

                <a href="#" class="navbar-brand">Universidad <span class="text-danger">Medellin</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('index') }}"><small class="small-title"></small> Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{route('alumnos.index')}}"><small class="small-title"></small> Alumnos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{route('materias.index')}}"><small class="small-title"></small> Materias</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{route('profesores.index')}}"><small class="small-title"></small> Profesores</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href= "{{route('index')}}#section_5"><small class="small-title"></small> Contactanos</a>
                        </li>
                    </ul>
                <div>
                        
            </div>
        </nav>




  </nav>
  </header>
 
  <!-- JAVASCRIPT FILES -->
  <script src="../resources/js/jquery.min.js"></script>
        <script src="../resources/js/bootstrap.min.js"></script>
        <script src="../resources/js/jquery.sticky.js"></script>
        <script src="../resources/js/jquery.magnific-popup.min.js"></script>
        <script src="../resources/js/magnific-popup-options.js"></script>
        <script src="../resources/js/click-scroll.js"></script>
        <script src="../resources/js/custom.js"></script>
