@extends('layouts.inicio')
@section('contenido')

<title>Perfil</title>
<style>
        .texto{
            font-family: 'Annie Use Your Telescope', cursive;
        }
        .titulo{
            font-family: 'Londrina Solid', cursive;
        }
        .fondo{

            /*https://www.xtrafondos.com/wallpapers/resized/volcan-roja-abstracta-3773.jpg?s=large
            https://www.xtrafondos.com/wallpapers/resized/alizarin-104.jpg?s=large 
            https://fondosmil.com/fondo/50411.jpg*/
            background-image: url(https://media.istockphoto.com/photos/abstract-line-technology-modern-geometric-paper-shape-subtle-picture-id1353982666?b=1&k=20&m=1353982666&s=170667a&w=0&h=rQw4tC_YXXEc70gCPmHDNrHzBeR4_2JJsNYedGF5oTM=  );
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
        .titulo{
            font-family: 'Mali', cursive;
        }
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
                                <a href="{{route('dashboard')}}" class="tituloPrincipal py-4 px-2 text-black font-semibold hover:text-blue-500 transition duration-300">REGRESAR</a>
                                <a href="{{route('conocermas')}}" class="tituloPrincipal py-4 px-2 text-black font-semibold hover:text-blue-500 transition duration-300">DICCIONARIO DE ALBURES</a>
                                <a href="{{route('misAlbures', Auth::user()->id)}}" class="tituloPrincipal py-4 px-2 text-black font-semibold hover:text-blue-500 transition duration-300">MIS ALBURES</a>
                                
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
                                            <a href="{{ route('login') }}" class="tituloPrincipal py-2 px-2 font-medium text-black rounded hover:bg-blue-500 hover:text-white transition duration-300">INICIAR SESION</a>
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
                        <li><a href="{{route('dashboard')}}" class="block tituloPrincipal text-sm px-2 py-4 hover:bg-blue-500 hover:text-white transition duration-300">REGRESAR</a></li>
                        <li><a href="{{route('conocermas')}}" class="block tituloPrincipal text-sm px-2 py-4 hover:bg-blue-500 hover:text-white transition duration-300">DICCIONARIO DE ALBURES</a></li>
                        <li><a href="{{route('misAlbures', Auth::user()->id)}}" class="tituloPrincipal block text-sm px-2 py-4 hover:bg-blue-500 hover:text-white transition duration-300">MIS ALBURES</a></li>
                        
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

            

    <div class="grid grid-cols-5 gap-4">

    <!-- SECCION DEL PERFIL -->

    
        <div></div>
        <div class="col-span-3 mt-10">
            
            <div class="inset-0 bg-white bg-opacity-75 p-4 ml-16 mr-16 rounded-lg">
            <h1 class="font-black tituloPrincipal text-center my-5 text-3xl text-black">PERFIL DEL USUARIO</h1><br>
                <livewire:perfil>
                
            </div>
        </div>
        <div></div>

        <!-- SECCION DE LOS ALBURES DEL PERFIL -->

    </div>  
    
    <div clas=""></div>

</body>

@endsection