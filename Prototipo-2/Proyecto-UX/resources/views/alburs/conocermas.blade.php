@extends('layouts.inicio')
@section('contenido')
<style>
    .dropdown:hover .dropdown-menu {
            display: block;
        }
        .fondo{
            background-image: url(https://fondosmil.com/fondo/50411.jpg);
            background-size: 25rem;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment: fixed;
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
</style>
<div>
            <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded w-screen bg-sky-900 bg-opacity-50">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="{{url('/')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pagina principal</a>
                            </li>
                            <li>
                                <a href="{{ route('nosotros') }}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Nosotros</a>
                            </li>
                            <li>
                            <a href="" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Conocer más!</a>
                            </li>
                            <li>
                                <a href="{{route('historia')}}" class=" ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Historia</a>
                            </li>
                            <li ><a href="" class="ml-64"></a></li>
                            @if (Route::has('login'))
                            
                                <div class="">
                                    @auth
                                    
                                        <div class="dropdown relative ml-96">
                                            <button class="text-white font-semibold rounded inline-flex items-center">
                                            <span class="mr-1">{{ Auth::user()->name }}</span>
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                            </button>
                                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-28 content-center">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <a href="" class="">Perfil<span class="material-icons ml-5 ">account_circle</span></a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('dashboard')}}" class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Home</a>
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


    <!-- PARTE DE LO QUE ESTA EN CONOCER MAS, IMPLICA LAS CARD DE INFORMACION DE CADA ALBUR -->

<body class="fondo">
    

    <div class="container">
        
        <div class="grid grid-cols-2 gap-4 pl-24 pt-10">
            @foreach($tipos as $tipo)
            <div class="bg-sky-900 bg-opacity-50 rounded-lg p-3 text-white">
                <img class="w-64 ml-36" src="https://media1.giphy.com/media/yORY6M2cxAhxJOcgQF/200w.webp?cid=ecf05e475wel6clh58z0v3pm8k7hon491nv2dol1n3rqg20e&rid=200w.webp&ct=s" alt="edad">
                <div class="px-6 py-4">
                    <div class="font-serif font-bold text-xl text-center mb-2">Tipo: {{$tipo->tipo}}</div>
                    <p class="text-black-700 font-mono text-justify font-medium text-base">
                        Jóvenes entre los 18 y 25 años de edad es decir que sean suficientemente jóvenes para seguirle el
                        ritmo a los participantes del evento y suficientemente adultos para ser responsables, ya que este trabajo
                        involucra un nivel de seriedad adecuado.
                    </p><br><br>
                    <button class="border font-black text-white outline-double outline-3 outline-offset-2 outline-white p-2 bg-sky-900 rounded-full animate-bounce ml-56"><a href="">¡¡VER MÁS!!</a></button>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</body>
</div>





@endsection