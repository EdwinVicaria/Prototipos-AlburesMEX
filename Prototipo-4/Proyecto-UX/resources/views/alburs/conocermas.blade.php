@extends('layouts.inicio')
@section('contenido')

<title>Diccionario</title>
<style>
    .dropdown:hover .dropdown-menu {
            display: block;
        }
        .fondo{
            background-image: url(https://wc.wallpaperuse.com/wallp/45-459219_s.jpg);
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
        body {
        display: grid;
        font-family: Avenir, sans-serif;
        color: #111;
        }

        a {
        text-decoration: none;
        color: inherit;
        }

        .card {
            transition: .4s;
        }

        .card:hover {
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
            transform: translate(0px, -12px);
            transition: .6s;
        }

        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 30px;
        }

        .social-icons .fa {
            transition: .4s;
            font-size: 40px;
            padding-right: 15px;
        }

        .social-icons .fa:hover {
            transform: scale(1.3);
            transition: .6s;
        }

        .fa-facebook-square,
        .fa-linkedin {
            color: #fff;
        }

        .fa-twitter {
            color: #1DA1F2;
        }

        .fa-instagram {
            color: #e4405f;
        }

        .fa-pinterest-square {
            color: #bd081c;
        }

        @media(max-width: 430px) {
            .card {
                margin: 10px;
            }

            .d-none {
                display: none;
            }
        }



            .modalDialog {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0,0,0,0.8);
            z-index: 99999;
            opacity:0;
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in;
            pointer-events: none;
        }
        .modalDialog:target {
            opacity:1;
            pointer-events: auto;
        }
        .modalDialog > div {
            width: 800px;
            position: relative;
            margin: 10% auto;
            padding: 5px 20px 13px 20px;
            border-radius: 10px;
            background: #fff;
            background: -moz-linear-gradient(#fff, #999);
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in;
        }
        .close {
            background: #ffa500;
            color: #FFFFFF;
            line-height: 25px;
            position: absolute;
            right: -12px;
            text-align: center;
            top: -10px;
            width: 24px;
            text-decoration: none;
            font-weight: bold;
            -webkit-border-radius: 12px;
            -moz-border-radius: 12px;
            border-radius: 12px;
            -moz-box-shadow: 1px 1px 3px #000;
            -webkit-box-shadow: 1px 1px 3px #000;
            box-shadow: 1px 1px 3px #000;
        }
        .close:hover { background: #ffffff; }

        .titulo{
            font-family: 'Mali', cursive;
        }
        /*PRUEBA DEL MODAL AUTOMATICO*/


    .modal {
        width: 25%;
        height: 25vh;
        /* background: rgba(245,55,0,0.8); */
        
        position: fixed;
        bottom:5px;
        right:10px;
        
        display: flex;
        
        animation: modal 2s 4s forwards;
        visibility: hidden;
        /* opacity: 1; */
    }

    .contenido {
        margin: auto;
        /* vertical-align: middle; */
        width: 100%;
        height: 100%;
        line-height: 50px;
        background: green;
        border-radius: 10px;
    }

    #cerrar {
        display: none;
    }

    #cerrar + label {
        position: fixed;
        /* color: #fff; */
        font-size: 25px;
        z-index: 50;
        /* background: darkred; */
        height: 20px;
        width: 20px;
        line-height: 40px;
        border-radius: 50%;
        right: 10px;
        bottom: 150px;
        cursor: pointer;
        
        animation: modal 2s 4s forwards;
        visibility: hidden;
        opacity: 1;
    }

    #cerrar:checked + label, #cerrar:checked ~ .modal {
        display: none;
    }

    @keyframes modal {
        100% {
            visibility: visible;
            opacity: 1;
        }
    }

</style>
<div>
            <nav class="border-gray-200 px-2 sm:px-4 py-7 rounded ">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            
                            @if(Auth()->user())
                                <li>
                                    <a href="{{route('dashboard')}}" class="titulo ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">REGRESAR</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{url('/')}}" class="titulo ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PAGINA PRINCIPAL</a>
                                </li>
                            @endif
                            <!-- <li>
                                <a href="{{ route('nosotros') }}" class="titulo ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">NOSOTROS</a>
                            </li> -->
                            <!-- <li>
                                <a href="" class="titulo ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">CONOCER MÁS</a>
                            </li> -->
                            <!-- <li>
                                <a href="{{route('historia')}}" class="titulo ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">HISTORIA</a>
                            </li> -->
                            <li ><a href="" class="ml-64"></a></li>
                            @if (Route::has('login'))
                            
                                <div class="">
                                    @auth
                                    
                                        <div class="dropdown relative ml-86">
                                            <button class="text-white font-semibold rounded inline-flex items-center">
                                            <span class="mr-1 titulo">{{ Auth::user()->name }}</span>
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                            </button>
                                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-28 content-center">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <a href="{{route('miPerfil', Auth::user()->id)}}" class="titulo ">PERFIL<span class="material-icons ml-5 ">account_circle</span></a>
                                                    </li>

                                                    <!-- <li>
                                                        <a href="{{route('dashboard')}}" class="titulo rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">PRINCIPAL</a>
                                                    </li> -->

                                                    <li class="titulo rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
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
                                        <div class="flex ">
                                            @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="titulo ml-96 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">REGISTRARSE</a>
                                            @endif
                                            <a href="{{ route('login') }}" class="titulo ml-5 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">INICIAR SESIÓN</a>
                                        </div>
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

        <div align="center" class="-mt-14 -mb-24">
            <img class="ml-40" src="img/albur.png" alt="">
        </div>

        <div class="container mx-auto flex my-8 justify-center">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 ">
                <div class="shadow-white max-w-sm overflow-hidden cursor-pointer rounded card shadow-xl transition duration-700 ease-in-out bg-white"><br>
                    <div align="center" >
                    <img class="w-40" src="img/albures.png" alt="">

                    </div>
                
                    <div class="px-6 py-4 "><br>
                        <div class="font-bold text-xl mb-2 text-center text-red-600">Todos los albures</div>
                        <p class=" text-base">
                        En este sección podras ver todos los ablures.
                        </p>
                    </div>
                    <div class="px-6 py-4 text-center">
                    <button class="rounded-md font-black text-black  p-2  bg-yellow-300 px-3 py-1 "><a href="{{route('albures')}}">Leer Más</a></button><br>
                    </div>
                </div>
                @foreach($tipos as $tipo)
                <div class="shadow-white max-w-sm overflow-hidden cursor-pointer rounded card shadow-xl transition duration-700 ease-in-out bg-white"><br>
                    <div align="center" >
                    <img class="w-40" src="{{$tipo->img_tipo}}" alt="">

                    </div>
                
                    <div class="px-6 py-4 "><br>
                        <div class="font-bold text-xl mb-2 text-center text-red-600">Tipo: {{$tipo->tipo}}</div>
                        <p class=" text-base">
                        {{$tipo->info_tipo}}
                        </p>
                    </div>
                    <div class="px-6 py-4 text-center">
                    <button class="rounded-md font-black text-black  p-2  bg-yellow-300 px-3 py-1 "><a href="{{route('TipoAlbur', $tipo->id)}}">Leer Más</a></button><br>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        


        <div align="center"><br>
            <button class=" ml-52 text-2xl animate-bounce font-bold rounded-md text-black  p-2  bg-yellow-300 px-3 py-1 "><a href="#openModal">Tocame esta</a></button>
        </div><br>
            

        <div id="openModal" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <img src="https://i.pinimg.com/originals/8a/f2/b8/8af2b882f4de5d14a0d6fcb3dab5f5f3.png" alt="">
            </div>
        </div>
        
    </div>
    @if(Auth()->user())

    @else
    <input type="checkbox" id="cerrar">
		<label for="cerrar" id="btn-cerrar">X</label>
		<div class="modal">
			<div class="contenido">
				<h2 class="text-justify font-black titulo">Woow veo que eres nuevo</h2>
				<div class="flex">
                    <img class="w-40"src="img/darkar.png" alt="">
                    @if (Route::has('register'))
                    <button class="flex border border-2 bg-yellow-600 h-12 titulo"><a href="{{ route('register') }}">REGISTRATE</a></button>
                    @endif
                </div>
                
			</div>
		</div>
    @endif
</body>
</div>





@endsection




<!-- <div class="bg-sky-900 bg-opacity-50 rounded-lg p-3 text-white">
                <img class="w-64 ml-36" src="https://media1.giphy.com/media/yORY6M2cxAhxJOcgQF/200w.webp?cid=ecf05e475wel6clh58z0v3pm8k7hon491nv2dol1n3rqg20e&rid=200w.webp&ct=s" alt="edad">
                <div class="px-6 py-4">
                    <div class="font-serif font-bold text-xl text-center mb-2"></div>
                    <p class="text-black-700 font-mono text-justify font-medium text-base">
                        Jóvenes entre los 18 y 25 años de edad es decir que sean suficientemente jóvenes para seguirle el
                        ritmo a los participantes del evento y suficientemente adultos para ser responsables, ya que este trabajo
                        involucra un nivel de seriedad adecuado.
                    </p><br><br>
                    <button class="border font-black text-white outline-double outline-3 outline-offset-2 outline-white p-2 bg-sky-900 rounded-full animate-bounce ml-56"><a href="{{route('TipoAlbur', $tipo->id)}}">¡¡VER MÁS!!</a></button>
                </div>
            </div> -->