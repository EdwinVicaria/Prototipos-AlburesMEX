@extends('layouts.inicio')
@section('contenido')


<style>

    .font{
        font-family: 'Orbitron', sans-serif;
    }
    .fondo{
            background-image: url(https://static.vecteezy.com/system/resources/previews/000/602/626/large_2x/vector-abstract-template-yellow-geometric-triangles-contrast-black-background-you-can-use-for-corporate-design-cover-brochure-book-banner-web-advertising-poster-leaflet-flyer.jpg);
            background-size: 25rem;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment: fixed;
        }
/* https://fondosmil.com/fondo/50411.jpg
https://static.vecteezy.com/system/resources/previews/000/602/626/large_2x/vector-abstract-template-yellow-geometric-triangles-contrast-black-background-you-can-use-for-corporate-design-cover-brochure-book-banner-web-advertising-poster-leaflet-flyer.jpg */
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




            <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded w-screen bg-sky-900 bg-opacity-50 ">
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

<body class="fondo">
        
@error('titulo')
<h3>Pndjo el titulo no debe esta vacio</h3>
@enderror()
@error('descripcion')
<h3>Pndjo la descripcion no debe esta vacio</h3>
@enderror()
@error('tipo_id')
<h3>Pndjo tipo de albur no debe esta vacio</h3>
@enderror()
    <div class="container mx-auto">

        <div class="">
            <h1 class="font text-center text-white text-4xl p-2">Crea tu nuevo albur e impresiona a todos con el gran humor que tienes!!!</h1>
        </div>

        <div class="mt-10 ">
            <div class="">
                <form action="/alburs" method="POST" class=" ml-32 mr-44 p-3 text-white rounded-lg bg-sky-900 bg-opacity-50">
                    @csrf

                    <div class="mb-10">
                        <label for="titulo" class="black-text font">Albur:</label>
                        <input type="text" name="titulo" placeholder="Titulo de su nuevo albur" class="flex border w-full h-10 text-black rounded-lg caret-pink-500">
                    </div>
                    <div class="mb-10">
                        <label for="descripcion" class="black-text font">Describe de que trata tu nuevo albur:</label>
                        <textarea type="text" name="descripcion" placeholder="Descripcion del albur" class="flex w-full h-32 rounded-lg text-black caret-pink-500"></textarea>
                    </div>
                    <div class="mb-10">
                        <label class="black-text rounded-lg font" for="tipo_id">Elija el tipo de albur que esta compartiendo:</label>
                        <select name="tipo_id" class="border border-2 border-black text-black rounded-lg"> 
                            <option  disabled selected>Elige el tipo de albur</option>
                            <option value="1">Nombre propio</option>
                            <option value="2">Sexual</option>
                            <option value="3">Grocero o bulgar</option>
                            <option value="4">Comida</option>
                            <option value="5">Lugar</option>
                        </select>
                    </div>
                    
                    <div>
                        <button  class="border outline-double outline-3 outline-offset-2 outline-white p-2 bg-sky-900 rounded-lg ml-96 w-32 h-10 animate-bounce">Enviar registro</button>
                    </div>
                </form>
            </div>
        </div>
        <div></div>
    </div>
</body>
@endsection