@extends('layouts.inicio')
@section('contenido')
<style>
        .texto{
            font-family: 'Annie Use Your Telescope', cursive;
        }
        .titulo{
            font-family: 'Londrina Solid', cursive;
        }
        .fondo{
            background-image: url(https://fondosmil.com/fondo/50411.jpg);
            background-size: 25rem;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment: fixed;
        }
        .font{
            font-family: 'Orbitron', sans-serif;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .input-wrapper {
            position: relative;
            width: 271px;
            }

            .input {
            box-sizing: border-box;
            color: #191919;
            padding: 15px 15px 15px 35px;
            width: 100%;
            }

            .input.password {
            padding: 15px 35px 15px 15px;
            }

            .input-icon {
            color: #191919;
            position: absolute;
            width: 20px;
            height: 20px;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
<body class="fondo">
            <nav class="border-gray-200 px-2 sm:px-4 py-7 rounded ">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto pl-20 pr-10" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="{{route('nosotros')}}" class="block text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">NOSOTROS</a>
                            </li>
                            
                            <li>
                            <a href="{{route('conocermas')}}" class=" block text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">DICCIONARIO!</a>
                            </li>
                            <li>
                                <a href="{{route('historia')}}" class="block text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">HISTORIA</a>
                            </li>
                            <li>
                            <a href="" class="block text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">CONOCER MÁS!</a>
                            </li>
                            <li>
                            <a href="" class="block text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">MIS ALBURES</a>
                            </li>
                            @if (Route::has('login'))
                                <div class=" pl-18">
                                    @auth
                                        <div class="dropdown relative">
                                            <button class=" font-semibold rounded inline-flex object-right">
                                            <span class="mr-1 text-white">{{ Auth::user()->name }}</span>
                                            <svg class="fill-current h-4 w-4 stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                            </button>
                                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-36 content-center">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <a href="{{ url('/dashboard') }}" class="">Principal</a>
                                                    </li>
                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <a href="{{route('miPerfil', Auth::user()->id)}}" class="">PERFIL<span class="material-icons ml-5 ">account_circle</span></a>
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
                                        <a href="{{ route('login') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Iniciar Sesión</a>
                                    @endauth
                                </div>
                                
                            @endif
                            
                        </ul>
                    </div>
                    
                </div>
            </nav>


    <h1 class="font-black font text-center my-16 text-2xl text-white">PERFIL DEL USUARIO</h1><br>


    <div class="grid grid-cols-5 gap-4">

    <!-- SECCION DEL PERFIL -->
        <div></div>
        <div class="col-span-3 ">
            <div class="inset-0 bg-gradient-to-r from-purple-500 to-pink-500 bg-opacity-50 p-4 ml-16 mr-16 rounded-lg">
                <img src="" alt="">
                <livewire:perfil>
                
            </div>
        </div>
        <div></div>

        <!-- SECCION DE LOS ALBURES DEL PERFIL -->

    </div>  
    
    

</body>

@endsection