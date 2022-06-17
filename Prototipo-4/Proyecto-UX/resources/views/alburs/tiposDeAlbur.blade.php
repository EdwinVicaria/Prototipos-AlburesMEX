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
    
            <nav class="border-gray-200 px-2 sm:px-4 py-7 rounded">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        
                            @if(Auth()->user())
                                <li>
                                    <a href="{{route('dashboard')}}" class="titulo ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">REGRESAR</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{url('/')}}" class="titulo ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">PAGINA PRINCIPAL</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('nosotros') }}" class="titulo ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">NOSOTROS</a>
                            </li>
                            <li>
                            <a href="{{route('conocermas')}}" class="titulo ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">DICCIONARIO</a>
                            </li>
                            <li>
                                <a href="{{route('historia')}}" class="titulo ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">HISTORIA</a>
                            </li>
                            <li>
                            <a href="" class="titulo ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">CONOCER MÁS</a>
                            </li>
                            <li ><a href="" class="ml-24"></a></li>
                            @if (Route::has('login'))
                                <div class="">
                                    @auth
                                    
                                        <div class="dropdown relative ">
                                            <button class="text-black font-semibold rounded inline-flex items-center">
                                            <span class="mr-1 titulo">{{ Auth::user()->name }}</span>
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                            </button>
                                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-28 content-center">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <a href="{{route('miPerfil', Auth::user()->id)}}" class="titulo">Perfil<span class="material-icons ml-5 ">account_circle</span></a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('dashboard')}}" class="titulo rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Home</a>
                                                    </li>

                                                    <li class="titulo rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
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
                                        <div class="flex">
                                            @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="titulo ml-86 block py-2 pr-4 pl-3 text-white-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">REGISTRARSE</a>
                                            @endif
                                            <a href="{{ route('login') }}" class="titulo ml-5 block py-2 pr-4 pl-3 text-white-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">INICIAR SESIÓN</a>
                                        </div>
                                    @endauth
                                </div>
                                
                            @endif
                            
                        </ul>
                    </div>
                    
                </div>
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
                    <div class="col-span-2 opacity-75 titulo">Titulo del albur:</div>
                    <div></div>
                    <div class="col-span-3 text-center titulo font-black text-2xl ">{{$albur->titulo}}</div>
                    
                    <div class="col-span-2 opacity-75 titulo">Descripción del albur:</div>
                    <div></div>
                    <div class="col-span-3 text-center titulo text-xl">{{$albur->descripcion}}</div>
                    
                    <div class="opacity-75 titulo">Tipo de albur:  </div>
                    <p class="opacity-100 titulo text-xl">{{$albur->tipo->tipo}}</p>  
                </div>
                

                <div>
                </div>
            </div>

            
            @endforeach
        </div>

 
</body>

@endsection