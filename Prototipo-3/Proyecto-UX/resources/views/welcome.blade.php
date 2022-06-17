@extends('layouts.inicio')
@section('contenido')
<style>
 .fondo{
        height: 650px;
     
        background-image: url("https://www.xtrafondos.com/wallpapers/resized/rio-en-las-montanas-al-atardecer-9190.jpg?s=large");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        backdrop-filter: blur(8px);
    }

        
    a {
    text-decoration: none;
    color: inherit;
    display: grid;
    font-family: Avenir, sans-serif;
    color: rgb(250, 247, 221);
    }        
    .cta {
    position: relative;
    margin: auto;
    padding: 19px 22px;
    transition: all 0.2s ease;
    }
    .cta:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    border-radius: 28px;
    background: rgba(255, 171, 157, 0.5);
    width: 56px;
    height: 56px;
    transition: all 0.3s ease;
    }
    .cta span {
    position: relative;
    font-size: 16px;
    line-height: 18px;
    font-weight: 900;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    vertical-align: middle;
    }
    .cta svg {
    position: relative;
    top: 0;
    margin-left: 10px;
    fill: none;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke: #111;
    stroke-width: 2;
    transform: translateX(-5px);
    transition: all 0.3s ease;
    }
    .cta:hover:before {
    width: 100%;
    background: #ffab9d;
    }
    .cta:hover svg {
    transform: translateX(0);
    }
    .cta:active {
    transform: scale(0.96);
    }    
    .font{
        font-family: 'Orbitron', sans-serif;
    }
</style>

<body class="fondo filter">
            <nav class="border-gray-200 px-2 sm:px-4 py-7 rounded ">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="{{route('conocermas')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">DICCIONARIO DE ALBURES</a>
                            </li>
                            <!-- <li>
                            <a href="" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ALBURES</a>
                            </li> -->
                            <!-- <li>
                            <a href="" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Conocer mas!</a>
                            </li> -->
                            <li>
                                <a href="{{route('esquema')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ESQUEMA DE DATOS</a>
                            </li>
                            @if (Route::has('login'))
                                <div class=" ">
                                    @auth
                                        <div class="dropdown  relative ml-96 ">
                                            <button class="text-gray-700 font-semibold rounded inline-flex items-center">
                                            <span class="mr-1 text-white">{{ Auth::user()->name }}</span>
                                            <svg class="fill-current h-4 w-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                            </button>
                                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <a href="{{ url('/dashboard') }}" class="">PRINCIPAL</a>
                                                    </li>

                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
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
                                    <div class="flex">
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-96 block py-2 pr-4 pl-3 text-white-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">REGISTRARSE</a>
                                        @endif
                                        <a href="{{ route('login') }}" class="ml-5 block py-2 pr-4 pl-3 text-white-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">INICIAR SESIÓN</a>
                                    </div>
                                    @endauth
                                </div>
                                
                            @endif
                            
                        </ul>
                    </div>
                    
                </div>
            </nav>

    <div class="contenedor">
        <section>
            <div class="texto float-left w-3/5 h-screen "  > 

                <div class="lado1 -ml-50"><br>
                    <h1 class=" font-bold text-6xl text-center font mt-10 text-yellow-100">Estoy seguro de que no entiendes el albur.</h1><br>
                    <h1 class=" font-bold text-4xl text-center font text-yellow-100">¿Me equivoco?</h1>
                    
                    <div class="mr-10 mb-16  ml-80 ">
                        <img class="w-52 " src="http://static-goengines.gocase.com.br/uploads/image/24041/src/7bcc60916c1030dcdc8f0c042e740a27.png" alt="vz">
                    </div>
                 
                 </div>    
            </div>


            

            <div class=" float-left w-2/5 h-screen ">
                <div >
                    <h1 class=" font-bold text-4xl text-center top-16 text-yellow-100 mt-72">¡A caray eso si<br> <span class="resaltar2 font-medium ml-40">Me interesa!</span></h1> <br>

                    

                    <div class="grid grid-cols-3 gap-4 mt-94 ml-44">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="cta">
                            <span> Registrate </span>
                            <svg width="13px" height="20px" >
                                
                            </svg>
                        </a>
                    @endif
                    <div>
                    
                </div>
            </div>


        </section>



      
</body>


@endsection