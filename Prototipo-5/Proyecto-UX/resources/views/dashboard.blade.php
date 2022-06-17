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
        background-image: url(https://media.istockphoto.com/photos/abstract-line-technology-modern-geometric-paper-shape-subtle-picture-id1353982666?b=1&k=20&m=1353982666&s=170667a&w=0&h=rQw4tC_YXXEc70gCPmHDNrHzBeR4_2JJsNYedGF5oTM=);
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
            <!-- Navbar goes here -->
            <nav class="">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="flex justify-between">
                        <div class="flex space-x-7">
                            <div>
                                <!-- Website Logo -->
                                <a href="" class="flex items-center py-4 px-2">
                                    <img src="img/LOGO.png" alt="Logo" class="h-14 w-40 mr-2">
                                    <!-- <span class="font-semibold text-gray-500 text-lg">BIENVENIDO</span> -->
                                </a>
                            </div>
                            <!-- Primary Navbar items -->
                            <div class="hidden md:flex items-center space-x-1">
                                <a href="{{route('conocermas')}}" class="py-4 px-2 tituloPrincipal text-black font-semibold hover:text-blue-500 transition duration-300">DICCIONARIO DE ALBURES</a>
                                <a href="{{route('misAlbures', Auth::user()->id)}}" class="py-4 tituloPrincipal px-2 text-black font-semibold hover:text-blue-500 transition duration-300">MIS ALBURES</a>
                                <a href="{{route('historia')}}" class="py-4 px-2 tituloPrincipal text-black font-semibold hover:text-blue-500 transition duration-300">HISTORIA</a>
                                <!-- <a href="" class="py-4 px-2 text-black font-semibold hover:text-blue-500 transition duration-300">About</a>
                                <a href="" class="py-4 px-2 text-black font-semibold hover:text-blue-500 transition duration-300">Contact Us</a> -->
                            </div>
                        </div>
                        <!-- Secondary Navbar items -->
                        <div class="hidden md:flex items-center space-x-3 ">
                                @if (Route::has('login'))
                                    <div class=" ">
                                        @auth
                                            <div class="dropdown  relative ml-96 ">
                                                <button class="text-gray-700 font-semibold rounded inline-flex items-center">
                                                <span class="mr-1 text-black tituloPrincipal">{{ Auth::user()->name }}</span>
                                                <svg class="fill-current h-4 w-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                                </button>
                                                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <li
                                                            class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                            <a href="{{route('miPerfil', Auth::user()->id)}}" class="tituloPrincipal">PERFIL<span
                                                                    class="material-icons ml-5 ">account_circle</span></a>
                                                        </li>

                                                        <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap tituloPrincipal">
                                                            <button>
                                                                <a :href="route('logout')"
                                                                            onclick="event.preventDefault();
                                                                                        this.closest('form').submit();">
                                                                        {{ __('CERRAR SESIÓN') }}
                                                                </a>
                                                            </button>
                                                        </li>
                                                        
                                                    </form>
                                                
                                                </ul>
                                            </div>
                                        @else
                                        
                                            <!-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-96 titulo block py-2 pr-4 pl-3 text-white-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">REGISTRARSE</a>
                                            @endif -->
                                            <a href="{{ route('login') }}" class="py-2 tituloPrincipal px-2 font-medium text-black rounded hover:bg-blue-500 hover:text-white transition duration-300">INICIAR SESION</a>
                            <!-- <a href="" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign Up</a> -->
                                        
                                        @endauth
                                    </div>
                                    
                                @endif
                            
                        </div>
                        <!-- Mobile menu button -->
                        <div class="md:hidden flex items-center">
                            <button class="outline-none mobile-menu-button">
                            <svg class=" w-6 h-6 text-gray-500 hover:text-blue-500 "
                                x-show="!showMenu"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        </div>
                    </div>
                </div>
                <!-- mobile menu -->
                <div class="hidden mobile-menu">
                    <ul class="">
                        <!-- <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li> -->
                        <li><a href="{{route('conocermas')}}" class="tituloPrincipal block text-sm px-2 py-4 hover:bg-blue-500 hover:text-white transition duration-300">DICCIONARIO DE ALBURES</a></li>
                        <li><a href="{{route('misAlbures', Auth::user()->id)}}" class="tituloPrincipal block text-sm px-2 py-4 hover:bg-blue-500 hover:text-white transition duration-300">ESQUEMAS</a></li>
                        <li><a href="{{route('historia')}}" class="tituloPrincipal block text-sm px-2 py-4 hover:bg-blue-500 hover:text-white transition duration-300">HISTORIA</a></li>
                        <!-- <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a></li> -->
                    </ul>
                </div>
                <script>
                    const btn = document.querySelector("button.mobile-menu-button");
                    const menu = document.querySelector(".mobile-menu");

                    btn.addEventListener("click", () => {
                        menu.classList.toggle("hidden");
                    });
                </script>
            </nav>

    <div class="grid grid-cols-3 gap-4">
        <div class="p-6 bg-white bg-opacity-50">
            <div class="mt-48"></div>
            <img class="hidden md:flex" src=" img/LOGO.png" alt="logo">
            <div class="mt-48"></div><br>
        </div>
        <div class="col-span-2">
            


            <!-- PARTE DE LOS DATOS DEBAJO DEL NAVAR -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h3 class="hidden md:flex p-10 text-2xl text-black text-justify titulo">Saludos, TÚ que no eres de México queremos que
                        comprendas las expresiones que aveces
                        usamos, porque para nosotros todo es albur o doble sentido.

                    </h3>
                    <img class="hidden md:flex -mt-12 -mx-16" src="img/darkar.png" alt="imagenDarkar">
                    
                </div>
                <div>
                    <div align="center">
                        <img class="hidden md:flex w-48" src="img/darkar2.png" alt="">
                    </div>
                    
                    <h3 class="hidden md:flex titulo p-10 text-2xl -mt-14 text-black text-justify">Si eres mexicano pues, ojalá que te encuentres alguna
                        sorpresita por ahí, algo que no conocias,
                        y conste que no estoy albureando.
                    </h3>
                    
                    <div>
                        <img class="hidden md:flex w-60" src="img/darkar3.png" alt="">
                    </div>
                    <div class="hidden md:flex -mt-20 ml-10" align="center">
                        <button class="hidden md:flex titulo border-black border-2 bg-yellow-400  p-3  rounded-full ml-32 ">
                            <a href="{{ route('albures') }}" class="tituloPrincipal" aria-current="page">VER LOS ALBURES</a>
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
    
                <div class="-mt-64">
                    <h3 class="md:hidden flex p-10 text-2xl text-black titulo">Saludos, TÚ que no eres de México queremos que
                        comprendas las expresiones que aveces
                        usamos, porque para nosotros todo es albur o doble sentido.

                    </h3>
                    <div align="left">
                        <img  class="md:hidden flex -mt-12 -mx-16" src="img/darkar.png" alt="imagenDarkar">
                    </div>
                    
                    
                </div>
                <div>
                    <div align="right">
                        <img class="md:hidden flex w-48" src="img/darkar2.png" alt="">
                    </div>
                    
                    <h3 class="md:hidden flex titulo p-10 text-2xl -mt-14 text-black">Si eres mexicano pues, ojalá que te encuentres alguna
                        sorpresita por ahí, algo que no conocias,
                        y conste que no estoy albureando.
                    </h3>
                    
                    <div>
                        <img class="md:hidden flex w-60" src="img/darkar3.png" alt="">
                    </div>
                    <div class="md:hidden flex -mt-20 ml-10" align="center">
                        <button class="md:hidden flex titulo border-black border-2 bg-yellow-400  p-3  rounded-full ml-32 ">
                            <a href="{{ route('albures') }}" class="" aria-current="page">VER LOS ALBURES</a>
                        </button>
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