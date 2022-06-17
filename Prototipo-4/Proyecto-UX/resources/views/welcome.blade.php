@extends('layouts.inicio')
@section('contenido')

    
    <title>AlburesMEX</title>



<style>
 
</style>

<body class="fondo2 backdrop-blur-md ">
            <nav class="border-gray-200 px-2 sm:px-4 py-7 rounded ">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium ">
                            <li>
                                <a href="{{route('conocermas')}}" class="ml-10 block titulo py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-white md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">DICCIONARIO DE ALBURES</a>
                            </li>
                            <!-- <li>
                            <a href="" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ALBURES</a>
                            </li> -->
                            <!-- <li>
                            <a href="" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Conocer mas!</a>
                            </li> -->
                            <li>
                                <a href="{{route('esquema')}}" class="ml-10 block py-2 titulo pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ESQUEMA DE DATOS</a>
                            </li>
                            @if (Route::has('login'))
                                <div class=" ">
                                    @auth
                                        <div class="dropdown  relative ml-96 ">
                                            <button class="text-gray-700 font-semibold rounded inline-flex items-center">
                                            <span class="mr-1 text-black titulo">{{ Auth::user()->name }}</span>
                                            <svg class="fill-current h-4 w-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                            </button>
                                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <a href="{{ url('/dashboard') }}" class="titulo">PRINCIPAL</a>
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
                                    <div class="flex">
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-96 titulo block py-2 pr-4 pl-3 text-white-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">REGISTRARSE</a>
                                        @endif
                                        <a href="{{ route('login') }}" class="ml-5 titulo block py-2 pr-4 pl-3 text-white-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">INICIAR SESIÓN</a>
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
                    <h1 class=" font-bold text-6xl text-center titulo mt-10 text-black">Estoy seguro de que no entiendes el albur.</h1><br>
                    <h1 class=" font-bold text-4xl text-center titulo text-black">¿Me equivoco?</h1>
                    
                    <div class="mr-10 mb-16  ml-80 ">
                        <img class="w-52 " src="http://static-goengines.gocase.com.br/uploads/image/24041/src/7bcc60916c1030dcdc8f0c042e740a27.png" alt="vz">
                    </div>
                 
                 </div>    
            </div>


            

            <div class=" float-left w-2/5 h-screen ">
                <div >
                    <h1 class=" titulo text-4xl text-center top-16 text-black mt-72">¡A caray eso si<br> <span class="resaltar2 font-medium ml-40">Me interesa!</span></h1> <br>

                    

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


        <h1 class="text-center text-6xl titulo">NOSOTROS</h1>

        <div class="container mx-auto flex flex-wrap my-8 justify-center">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 ">
                <div class="shadow-white max-w-sm overflow-hidden cursor-pointer rounded card shadow-xl transition duration-700 ease-in-out bg-white"><br>
                    <div align="center" >
                    <img class="w-40" src="img/melissa.png" alt="">

                    </div>

                    <!-- CARD MELISSA ANAHI MAY CAN -->

                    <div class="px-6 py-4 "><br>
                        <div class="font-bold text-xl mb-2 text-center text-red-600">Melissa Anahi May Can</div>
                        <p class=" text-base">
                            Estudiante de la Ingeniería en Sistemas Computacionales, encargado del desarrollo de la programación Back End. <br>
                            melissa.18070069@itsmotul.edu.mx
                            
                        </p>
                    </div>
                    <div class="px-6 py-4 text-center">
                    <button class="rounded-md font-black text-black  p-2  bg-yellow-300 px-3 py-1 "><a href="">Leer Más</a></button><br>
                    </div>
                </div>

                <div class="shadow-white max-w-sm overflow-hidden cursor-pointer rounded card shadow-xl transition duration-700 ease-in-out bg-white"><br>
                    <div align="center" >
                    <img class="w-40" src="img/isaias.png" alt="">

                    </div>

                    <!-- CARD JOSE ISAIAS NAHUAT CETZ -->

                    <div class="px-6 py-4 "><br>
                        <div class="font-bold text-xl mb-2 text-center text-red-600">José Isaias Nahuat Cetz</div>
                        <p class=" text-base">
                            Estudiante de la Ingeniería en Sistemas Computacionales, encargado del desarrollo de la programación Back End.<br>
                            jose.18070047@itsmotul.edu.mx
                            
                        </p>
                    </div>
                    <div class="px-6 py-4 text-center">
                    <button class="rounded-md font-black text-black  p-2  bg-yellow-300 px-3 py-1 "><a href="">Leer Más</a></button><br>
                    </div>
                </div>

                <!-- CARD EDWIN GASPAR VICARIA XOOL -->

                <div class="shadow-white max-w-sm overflow-hidden cursor-pointer rounded card shadow-xl transition duration-700 ease-in-out bg-white"><br>
                    <div align="center" >
                    <img class="w-40" src="img/edwin.png" alt="">

                    </div>
                
                    <div class="px-6 py-4 "><br>
                        <div class="font-bold text-xl mb-2 text-center text-red-600">Edwin Gaspar Vicaria Xool</div>
                        <p class=" text-base">
                            Estudiante de la Ingeniería en Sistemas Computacionales, encargado del desarrollo de la programación Back End.<br>
                            edwin.18070070@itsmotul.edu.mx
                            
                        </p>
                    </div>
                    <div class="px-6 py-4 text-center">
                    <button class="rounded-md font-black text-black  p-2  bg-yellow-300 px-3 py-1 "><a href="">Leer Más</a></button><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <input type="checkbox" id="cerrar">
		<label for="cerrar" id="btn-cerrar">X</label>
		<div class="modal">
			<div class="contenido">
				<h2>Visita nuestro blog</h2>
				<img src="http://lorempixel.com/200/200" alt="">
			</div>
		</div> -->
</body>


@endsection