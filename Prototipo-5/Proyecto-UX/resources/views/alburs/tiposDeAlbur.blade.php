@extends('layouts.inicio')
@section('contenido')

<title>AlburesMEX</title>
<link rel="shortcut icon"
        href="img/icono.png" />

<style>

    /*Links de fondos de pantalla
    https://www.xtrafondos.com/wallpapers/geometria-abstracta-9698.jpg
    https://www.xtrafondos.com/wallpapers/figuras-geometricas-en-bucle-7832.jpg
    https://www.xtrafondos.com/wallpapers/lineas-de-colores-en-movimiento-7361.jpg
    https://www.xtrafondos.com/wallpapers/luces-del-trafico-a-traves-de-vidrio-con-gotas-de-lluvia-6962.jpg
    
    */
    
    .fondo{
            background-image: url(https://www.xtrafondos.com/wallpapers/resized/ubuntu-15-vivid-vervet-greyscale-3442.jpg?s=large);
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

        .titulo{
            font-family: 'Mali', cursive;
        }
</style>
    
<body class="fondo">

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
                                @if(Auth()->user())
                                <a href="{{route('dashboard')}}" class="py-4 px-2 text-black tituloPrincipal font-semibold hover:text-blue-500 transition duration-300">REGRESAR</a>
                                @else
                                <a href="{{url('/')}}" class="py-4 px-2 tituloPrincipal text-black font-semibold hover:text-blue-500 transition duration-300">PAGINA PRINCIPAL</a>
                                @endif
                                <a href="{{route('conocermas')}}" class="py-4 tituloPrincipal px-2 text-black font-semibold hover:text-blue-500 transition duration-300">DICCIONARIO DE ALBURES</a>
                                <!-- <a href="{{route('historia')}}" class="py-4 px-2 text-black font-semibold hover:text-blue-500 transition duration-300">HISTORIA</a> -->
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

                                                        <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap titulo">
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
                        @if(Auth()->user())
                        <li><a href="{{route('dashboard')}}" class="tituloPrincipal block text-sm px-2 py-4 text-black hover:bg-blue-500 hover:text-white transition duration-300">REGRESAR</a></li>
                        @else
                        <li><a href="{{url('/')}}" class="tituloPrincipal block text-sm px-2 py-4 text-black hover:bg-blue-500 hover:text-white transition duration-300">PAGINA PRINCIPAL</a></li>
                        @endif
                        <li><a href="{{route('conocermas')}}" class="tituloPrincipal block text-sm px-2 py-4 hover:bg-blue-500 hover:text-white transition duration-300">DICCIONARIO DE ALBURES</a></li>
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
    
            

            <!-- <button disabled style="float: right" type="button" class="text-black bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800 inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                </svg> <br>
                <select name="idioma" class="border-black text-black rounded-lg     "> 
                    <option  disabled selected>Traducir a</option>
                    <option value="1">Ingles</option>
                    <option value="2">Frances</option>
                    <option value="3">Alemán</option>
                    <option value="4">Checo</option>
                    <option value="5">Chino mandarin</option>
                </select>
            </button> -->

        <div class="grid grid-cols-4 gap-4 pl-16 pr-16 py-10 ">
            @foreach ($albures as $albur)
            <div class="col-span-2 border border-yellow-600 p-3 rounded-lg">
                <div class="grid grid-cols-3 gap-4 text-black">
                    <div class="col-span-2 opacity-75 textoAll">Albur:</div>
                    <div></div>
                    <div class="col-span-3 text-center textoAll font-black text-2xl ">{{$albur->titulo}}</div>
                    
                    <div class="col-span-2 opacity-75 textoAll">Descripción del albur:</div>
                    <div></div>
                    <div class="col-span-3 text-center textoAll text-xl">{{$albur->descripcion}}</div>
                    
                    <div class="opacity-75 textoAll">Tipo de albur:  </div>
                    <p class="opacity-100 textoAll text-xl">{{$albur->tipo->tipo}}</p>  
                </div>
                

                <div>
                </div>
            </div>

            
            @endforeach
        </div>

 
</body>

@endsection