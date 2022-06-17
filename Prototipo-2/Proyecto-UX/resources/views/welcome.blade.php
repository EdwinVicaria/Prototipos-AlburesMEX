@extends('layouts.inicio')
@section('contenido')
<style>
    .fondo{
            background-image: url(https://fondosmil.com/fondo/50343.jpg);
            background-size: 25rem;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment: fixed;
        }
        .font{
        font-family: 'Orbitron', sans-serif;
    }

    animation: bounce 1s infinite;

        @keyframes bounce {
        0%, 100% {
            transform: translateY(-25%);
            animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
        }
        50% {
            transform: translateY(0);
            animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }
</style>
<body class="fondo">
    

        <div class="container">
        
            <nav class="border-gray-200 px-2 sm:px-4 py-7 rounded ">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="{{route('conocermas')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Diccionario de albures</a>
                            </li>
                            <li>
                            <a href="{{route('albures')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ALBURES</a>
                            </li>
                            <li>
                            <a href="" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Conocer mas!</a>
                            </li>
                            <li>
                                <a href="" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Esquema de datos</a>
                            </li>
                            @if (Route::has('login'))
                                <div class=" ">
                                    @auth
                                        <div class="dropdown  relative ml-96 ">
                                            <button class="text-gray-700 font-semibold rounded inline-flex items-center">
                                            <span class="mr-1 text-white">{{ Auth::user()->name }}</span>
                                            <svg class="fill-current h-4 w-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                            </button>
                                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <a href="{{ url('/dashboard') }}" class="">Principal</a>
                                                    </li>

                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <button>
                                                            <a :href="route('logout')"
                                                                        onclick="event.preventDefault();
                                                                                    this.closest('form').submit();">
                                                                    {{ __('Cerrar sesión ') }}
                                                            </a>
                                                        </button>
                                                    </li>
                                                    
                                                </form>
                                            
                                            </ul>
                                        </div>
                                    @else
                                        <a href="{{ route('login') }}" class="ml-96 block py-2 pr-4 pl-3 text-white-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Iniciar Sesión</a>
                                    @endauth
                                </div>
                                
                            @endif
                            
                        </ul>
                    </div>
                    
                </div>
            </nav>

        <div class="grid grid-cols-3 gap-4  mt-6">
            <div class="col-span-2 ">
                <h1 class=" text-4xl text-center font mt-10 text-white">Estoy seguro de que no entiendes el albur.</h1><br>
                <h1 class=" text-4xl text-center font text-white">¿Me equivoco?</h1><br>
                <div class="grid grid-cols-3 gap-4">
                    <div></div>
                    <div>
                        <div class="mt-10">
                            <img class="w-52 right-16" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGTovpooDjrhC8jfMmkUrCPeDERLlffMZ8ukFLu1mTbfLJFz26Kw-jZWBI1Fr5L2oJ7ZQ&usqp=CAU" alt="vz">
                        </div>
                    </div>
                    <div></div>
                </div>
                
                
            </div>
            
            
        </div>
            <br>

            <div class="grid grid-cols-4 gap-4 -mt-16">
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
                <div class="">
                <h1 class="font text-4xl text-center top-16 text-white">¡A caray eso si me interesa!</h1> <br>
                    <div class="grid grid-cols-3 gap-4">
                        <div></div>
                        <div>
                            @if (Route::has('register'))
                                <button class="border font-black text-white outline-double outline-3 outline-offset-2 outline-white p-2 bg-sky-900 rounded-full animate-bounce"><a href="{{ route('register') }}" class=" ">Registrarse</a></button>
                            @endif
                        </div>
                        <div></div>
                    </div>
                    
                </div>

            </div>
    <!--  <img src="http://blog.hostalia.com/wp-content/themes/hostalia/images/Bienvenidos-gif-blog-de-hostalia-hosting.gif" alt="">-->
            
            

            
        </div>

        @livewire('livewire-ui-modal')
        @livewireScripts
</body>
@endsection