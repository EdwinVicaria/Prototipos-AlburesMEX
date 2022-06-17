@extends('layouts.inicio')
@section('contenido')
<title>Principal</title>
<style>
    /*Links de fondos de pantalla
    https://www.xtrafondos.com/wallpapers/geometria-abstracta-9698.jpg
    https://www.xtrafondos.com/wallpapers/figuras-geometricas-en-bucle-7832.jpg
    https://www.xtrafondos.com/wallpapers/lineas-de-colores-en-movimiento-7361.jpg
    https://www.xtrafondos.com/wallpapers/luces-del-trafico-a-traves-de-vidrio-con-gotas-de-lluvia-6962.jpg
    https://images.alphacoders.com/741/thumb-1920-74173.jpg
    https://static.vecteezy.com/system/resources/previews/005/003/535/non_2x/yellow-and-red-beautiful-background-gradient-color-vector.jpg
    */
    .fondo {
        background-image: url(https://static.vecteezy.com/system/resources/previews/005/003/535/non_2x/yellow-and-red-beautiful-background-gradient-color-vector.jpg);
        background-size: 25rem;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .font {
        font-family: 'Orbitron', sans-serif;
    }

    animation: bounce 1s infinite;

    @keyframes bounce {

        0%,
        100% {
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

    .titulo{
            font-family: 'Mali', cursive;
        }

        /*PRUEBA DEL MODAL AUTOMATICO*/
</style>

<body class="fondo backdrop-blur-md">
    <div class="grid grid-cols-3 gap-4">
        <div class=" bg-white  p-6">
            <div class="mt-48"></div>
            <img src="img/LOGO.png" alt="logo">
            <div class="mt-48"></div><br>
        </div>
        <div class="col-span-2">
            <nav class="border-gray-200 px-2 sm:px-4 py-7 rounded ">
                <div class="container flex flex-wrap justify-between items-center mx-auto">

                    <div class="hidden w-full md:block md:w-auto pl-20 pr-10" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="{{route('conocermas')}}"
                                    class="titulo block text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">DICCIONARIO DE ALBURES</a>
                            </li>

                            <!-- <li>
                                <a href="{{route('conocermas')}}"
                                    class=" block text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">DICCIONARIO!</a>
                            </li> -->
                            <li>
                                <a href="{{route('historia')}}"
                                    class="titulo block text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">HISTORIA</a>
                            </li>
                            <!-- <li>
                                <a href=""
                                    class="block text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">CONOCER
                                    MÁS!</a>
                            </li> -->
                            <li>
                                <a href="{{route('misAlbures', Auth::user()->id)}}"
                                    class="titulo block text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">MIS
                                    ALBURES</a>
                            </li>
                            @if (Route::has('login'))
                            <div class=" pl-18">
                                @auth
                                <div class="dropdown relative">
                                    <button class="text-black font-semibold rounded inline-flex object-right">
                                        <span class="mr-1 titulo">{{ Auth::user()->name }}</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-36 content-center">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <li
                                                class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                <a href="{{route('miPerfil', Auth::user()->id)}}" class="titulo">PERFIL<span
                                                        class="material-icons ml-5 ">account_circle</span></a>
                                            </li>

                                            <li
                                                class="titulo rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                <button>
                                                    <a class="" :href="route('logout')" onclick="event.preventDefault();
                                                                                    this.closest('form').submit();">
                                                        {{ __('Cerrar sesión ') }}
                                                    </a>
                                                </button>
                                            </li>

                                        </form>

                                    </ul>
                                </div>
                                @else
                                <a href="{{ route('login') }}"
                                    class="titulo block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Iniciar
                                    Sesión</a>
                                @endauth
                            </div>

                            @endif

                        </ul>
                    </div>

                </div>
            </nav>

            <!-- PARTE DE LOS DATOS DEBAJO DEL NAVAR -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h3 class="p-10 text-2xl text-black titulo">Saludos, <b>TÚ</b> que no eres de México queremos que
                        comprendas las expresiones que aveces
                        usamos, porque para nosotros todo es albur o doble sentido.

                    </h3>
                    <img class="-mt-12 -mx-16" src="img/darkar.png" alt="imagenDarkar">
                    
                </div>
                <div>
                    <div align="center">
                        <img class="w-48" src="img/darkar2.png" alt="">
                    </div>
                    
                    <h3 class="titulo p-10 text-2xl -mt-14 text-black">Si eres mexicano pues, ojalá que te encuentres alguna
                        sorpresita por ahí, algo que no conocias,
                        y conste que no estoy albureando.
                    </h3>
                    
                    <div>
                        <img class="w-60" src="img/darkar3.png" alt="">
                    </div>
                    <div class="-mt-20 ml-10" align="center">
                        <button class="titulo border-black border-2 bg-yellow-400  p-3  rounded-full ml-10 ">
                            <a href="{{ route('albures') }}" class="" aria-current="page">VER LOS ALBURES</a>
                        </button>
                    </div>

                </div>

                
            </div>

                
            <!-- <div class="flex">
                <img class="rounded-lg w-40 mt-5 ml-10" src="https://c.tenor.com/N3m4R2cmu4MAAAAC/animo-positivo.gif"
                    alt="imagen gif">
                <div class="p-3 pl-5 mt-16 text-2xl text-center">
                    <h2><b>¿Te gustaría agregar un albur?</b></h2>
                </div>
                <div class="mt-20 ml-7">
                    <button
                        class="border outline-double outline-3 outline-offset-2 outline-white p-2 bg-sky-900 rounded-lg animate-bounce"><a
                            href="{{ route('alburs.create') }}">Crear un nuevo albur</a></button>
                </div>

            </div> -->
        </div>
    </div>

    
    <input type="checkbox" id="cerrar">
		<label for="cerrar" id="btn-cerrar">X</label>
		<div class="modal">
			<div class="contenido">
            @if (Route::has('login'))
				<h2 class="text-justify font-black titulo">Bienvenid@ {{ Auth::user()->name }}</h2>
            @endif
				<div class="flex">
                    <img class="w-20"src="img/nombre.png" alt="">
                    <p class="titulo">Espero te la pases bien amig@</p>
                </div>
                
			</div>
		</div>
</body>
@endsection