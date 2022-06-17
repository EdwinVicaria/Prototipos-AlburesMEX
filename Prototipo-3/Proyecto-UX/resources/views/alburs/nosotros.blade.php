@extends('layouts.inicio')
@section('contenido')
<style>

    /*Links de fondos de pantalla
    https://www.xtrafondos.com/wallpapers/geometria-abstracta-9698.jpg
    https://www.xtrafondos.com/wallpapers/figuras-geometricas-en-bucle-7832.jpg
    https://www.xtrafondos.com/wallpapers/lineas-de-colores-en-movimiento-7361.jpg
    https://www.xtrafondos.com/wallpapers/luces-del-trafico-a-traves-de-vidrio-con-gotas-de-lluvia-6962.jpg
    
    */
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
    <div>
            <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded w-screen bg-sky-900 bg-opacity-50">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="{{route('dashboard')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('alburs.index') }}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">ALBURES</a>
                            </li>
                            <li>
                            <a href="{{route('conocermas')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Diccionario!</a>
                            </li>
                            <li>
                                <a href="{{route('historia')}}" class=" ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Historia</a>
                            </li>
                            <li>
                            <a href="" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Conocer más!</a>
                            </li>
                            <li ><a href="" class="ml-24"></a></li>
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


            <div class="grid grid-cols-2 gap-4 ">
                <div>
                    <div>
                        <img class="w-60 ml-24 mt-24" src="https://i.pinimg.com/originals/84/6a/4d/846a4d49a7ec06a887e1e9fdbb6c3d13.gif " alt="imagen gif">
                    </div>
                </div>
                <div class="p-8 ">
                    <div class="bg-sky-900 bg-opacity-50 p-3 rounded-lg text-white">
                        <h1>¿Como surgio la idea?</h1> <br>
                        <p>Nuestra idea surgió a partir de que existen personas que 
                            aun siendo mexicanos no comprenden el doble sentido, del mismo 
                            modo para que las personas que no sean mexicanos en este caso extranjeros
                            comprendan este tipo de habla, y aprendan a utilizarlo. </p>
                    </div>
                </div>
                <div class="p-8 ">
                    <div class="bg-sky-900 bg-opacity-50 p-3 rounded-lg text-white">
                        <h1>Objetivo</h1> <br>
                        <p>Dar a conocer más los albures que son un juego de palabras de doble sentido,
                            muy utilizado en México, buscando que todas las personas los comprendan y aprendan 
                            a utilizarlos. Del mismo modo que comprendan el significado del juego de palabras que estos manejan. </p>
                    </div>
                </div>
                <div class="p-8 ">
                    <div class="bg-sky-900 bg-opacity-50 p-3 rounded-lg text-white">
                        <h1>Un poco sobre el tema</h1> <br>
                        <p>Somos un equipo de estudiantes de la carrera de Ingeniería en Sistemas Computacionales 
                            del Instituto Tecnológico Superior de Motul. </br> 
                            Qué busca dar a conocer este tipo de lenguaje utilizado diariamente por los mexicanos.</p> <br>
                            <p>Integrantes:</p><br>
                            <p>•	Melissa Anahí May Can. <br>
                                •	Edwin Gaspar Vicaria Xool. <br>
                                •	José Isaías Nahuat Cetz.
                            </p>
                    </div>
                </div>
            </div>
    </div>
</body>
@endsection