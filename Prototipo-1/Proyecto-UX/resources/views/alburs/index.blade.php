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
            background-image: url(https://fondosmil.com/fondo/50419.jpg);
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
    </style>
<body class="fondo">



    <div class="container ">

            <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded w-screen bg-sky-900 bg-opacity-50 ">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="{{route('dashboard')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('nosotros') }}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Nosotros</a>
                            </li>
                            <li>
                            <a href="{{route('conocermas')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Diccionario!</a>
                            </li>
                            <li>
                                <a href="" class=" ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Historia</a>
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


        @if (session('mensaje'))
        <div class="text-center">
            <p class="font text-4xl text-white">{{session('mensaje')}}</p>
        </div>
        @endif

        <div class="grid grid-cols-3 gap-4 pl-72 pr-72 py-10 ">
            @foreach ($alburs as $alburs)
            <div class="col-span-3 border border-black rounded-lg bg-sky-900 bg-opacity-50">
                <div class="grid grid-cols-3 gap-4 text-white">
                    <div class="col-span-2 opacity-50 ">Titulo del albur:</div>
                    <div></div>
                    <div class="col-span-3 text-center titulo font-black text-2xl ">{{$alburs->titulo}}</div>
                    
                    <div class="col-span-2 opacity-50">Descripción del albur:</div>
                    <div></div>
                    <div class="col-span-3 text-center texto text-2xl font-black">{{$alburs->descripcion}}</div>
                    
                    <div class="opacity-50">Tipo de albur:  </div>
                    <p class="opacity-100 texto text-2xl font-black">{{$alburs->tipo->tipo}}</p>  
                </div>
                <div class="col-span-2 flex ml-60">
                        @can('eliminar albur')
                        <form action="{{route('alburs.destroy',$alburs->id)}}" onsubmit="return confirm('Seguro quieres eliminar este albur?')" method="POST">
                        @method('DELETE')
                        @csrf
                        
                            <button type="submit" class="border border-2 border-black rounded-lg p-2 bg-red-700">Eliminar</button>
                        </form>
                        @endcan
                        @can('editar albur')
                        <button class="border border-2 border-black ml-5 rounded-lg p-2 bg-green-600"><a href="{{ route('alburs.edit',$alburs->id) }}">Editar</a></button> 
                        @endcan
                </div>
            </div>

            
            @endforeach
        </div>
<!-- 
        <br><br><br><br>
        <h1 class="border border-2 underline"><a href="/">hola</a> </h1>
        <button class="border border-2 bg-slate-500" ><a href="{{ route('alburs.create') }}">Crear un nuevo algur</a></button>
        -->
        <button class="border border-2 bg-slate-500" ><a href="{{ route('alburs.create') }}">Crear un nuevo algur</a></button>
    </div>
</body>
@endsection




<!--          
                    <div class="col-span-2 flex ml-24">
                        <form action="{{route('alburs.destroy',$alburs->id)}}" onsubmit="return confirm('Seguro?')" method="POST">
                        @method('DELETE')
                        @csrf
                        
                            <button type="submit" class="border border-2 border-black rounded-lg p-2 bg-red-700">Eliminar</button>
                        </form>
                    <button class="border border-2 border-black ml-5 rounded-lg p-2 bg-green-600"><a href="{{ route('alburs.edit',$alburs->id) }}">Editar</a></button> 
                    
                    </div>
    -->
