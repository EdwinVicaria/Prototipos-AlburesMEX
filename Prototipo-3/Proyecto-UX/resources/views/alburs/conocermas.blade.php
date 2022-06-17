@extends('layouts.inicio')
@section('contenido')
<style>
    .dropdown:hover .dropdown-menu {
            display: block;
        }
        .fondo{
            background-image: url(https://www.xtrafondos.com/wallpapers/resized/diseno-de-amarillo-negro-y-gris-5820.jpg?s=large);
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




        .container__cards{
        max-width: 1200px;
        margin: auto;
        margin-top: 100px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        }

        .card{
        width: 300px;
        margin: 10px;
        transition: all 300ms;
        }

        .card:hover{
        width: 350px;
        }

        .card .cover{
        width: 100%;
        height: 250px;
        position: relative;
        overflow: hidden;
        }

        .card .cover img{
        width: 250px;
        display: block;
        margin: auto;
        position: relative;
        top: 40px;
        z-index: 1;
        filter: drop-shadow(5px 5px 4px rgba(0,0,0,0.5));
        transition: all 400ms;
        }

        .card:hover .cover img{
        top: 0px;
        filter: none;
        }

        .card .img__back{
        width: 100%;
        height: 200px;
        position: absolute;
        bottom: -80px;
        left: 0;
        background-size: cover;
        border-radius: 20px;
        transition: all 300ms;
        }

        .card:nth-of-type(1) .img__back{
        background-image: url(https://www.xtrafondos.com/wallpapers/resized/degradado-difuminado-amarillo-7953.jpg?s=large);
        }

        .card:nth-of-type(2) .img__back{
        background-image: url(https://www.xtrafondos.com/wallpapers/resized/degradado-difuminado-amarillo-7953.jpg?s=large);
        }

        .card:hover .img__back{
        bottom: -40px;
        }

        .card .description{
        background: #fdfcfb;
        margin-top: -10px;
        padding: 20px;
        border-radius: 0px 0px 20px 20px;
        transition: all 300ms;
        }

        .card:hover .description{
        padding: 40px;
        }

        .card .description h2{
        margin-top: 10px;
        }

        .card .description p{
        margin-top: 10px;
        }


</style>
<div>
            <nav class="border-gray-200 px-2 sm:px-4 py-7 rounded ">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            
                            @if(Auth()->user())
                                <li>
                                    <a href="{{route('dashboard')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">REGRESAR</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{url('/')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PAGINA PRINCIPAL</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('nosotros') }}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">NOSOTROS</a>
                            </li>
                            <li>
                            <a href="" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">CONOCER MÁS</a>
                            </li>
                            <li>
                                <a href="{{route('historia')}}" class=" ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">HISTORIA</a>
                            </li>
                            <li ><a href="" class="ml-64"></a></li>
                            @if (Route::has('login'))
                            
                                <div class="">
                                    @auth
                                    
                                        <div class="dropdown relative ml-86">
                                            <button class="text-white font-semibold rounded inline-flex items-center">
                                            <span class="mr-1">{{ Auth::user()->name }}</span>
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                            </button>
                                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-28 content-center">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <a href="" class="">PERFIL<span class="material-icons ml-5 ">account_circle</span></a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('dashboard')}}" class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">PRINCIPAL</a>
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
                                            <a href="{{ route('register') }}" class="ml-86 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">REGISTRARSE</a>
                                            @endif
                                            <a href="{{ route('login') }}" class="ml-5 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">INICIAR SESIÓN</a>
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
        
        <div class="grid grid-cols-3 gap-4 pl-24 pt-10">
            @foreach($tipos as $tipo)
            <div class="card">
                <div class="cover">
                    <img src="{{$tipo->img_tipo}}" alt="">
                    <div class="img__back"></div>
                </div>
                <div class="description">
                    <b class="text-2xl text-black">Tipo: {{$tipo->tipo}}</b><br><br>
                    <p class="text-lg">{{$tipo->info_tipo}}</p><br><br>
                    <button class="rounded-md font-black text-black outline-double outline-3 outline-offset-2  p-2  bg-yellow-300 ml-20"><a href="{{route('TipoAlbur', $tipo->id)}}">Leer Más</a></button>
                </div>
            </div>
            
            @endforeach

            <div class="card">
                <div class="cover">
                    <img src="https://cdn141.picsart.com/ddbf8781-d448-40a9-ae67-b3e3a3e1afd6/390063908043211.png?to=fixed&type=webp&r=274x310&q=75" alt="">
                    <div class="img__back"></div>
                </div>
                <div class="description">
                    <b class="text-2xl text-black">Todos los albures</b><br><br>
                    <p class="text-lg">Podras ver todos los albures en general</p><br><br>
                    <button class="rounded-md font-black text-black outline-double outline-3 outline-offset-2  p-2  bg-yellow-300 ml-20"><a href="{{route('albures')}}">Leer Más</a></button>
                </div>
            </div>
        </div>


        
    </div>
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