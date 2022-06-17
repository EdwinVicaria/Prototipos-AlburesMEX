@extends('layouts.inicio')
@section('contenido')

    
    <title>AlburesMEX</title>



<style>
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
</style>

<body class="fondo2 backdrop-blur-md ">

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
							<a href="{{route('conocermas')}}" class="py-4 tituloPrincipal px-2 text-black font-semibold hover:text-blue-500 transition duration-300">DICCIONARIO DE ALBURES</a>
							<a href="{{route('esquema')}}" class="py-4 tituloPrincipal px-2 text-black font-semibold hover:text-blue-500 transition duration-300">ESQUEMAS</a>
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
					<li><a href="{{route('conocermas')}}" class="block tituloPrincipal text-sm px-2 py-4 hover:bg-blue-500 hover:text-white transition duration-300">DICCIONARIO DE ALBURES</a></li>
					<li><a href="{{route('esquema')}}" class="block tituloPrincipal text-sm px-2 py-4 hover:bg-blue-500 hover:text-white transition duration-300">ESQUEMAS</a></li>
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
		<!-- <h1 class="text-green-500 text-2xl md:text-3xl lg:text-4xl font-bold p-4">Tailwind Navigation Toolbar</h1> -->


    <div class="contenedor mx-auto">
        <section>
            <div class=" float-left md:max-w-2xl "  > 

                <div class="lado1 -ml-50"><br>
                    <h1 class=" font-bold text-6xl text-center tituloPrincipal mt-10 text-black ">Estoy seguro de que no entiendes el albur.</h1><br>
                    <h1 class=" font-bold text-4xl text-center tituloPrincipal text-black">¿Me equivoco?</h1>
                    
                    <div class="mr-10 mb-16  ml-80 ">
                        <img class="w-52 " src="http://static-goengines.gocase.com.br/uploads/image/24041/src/7bcc60916c1030dcdc8f0c042e740a27.png" alt="vz">
                    </div>
                 
                 </div>    
            </div>


            

            <div class=" float-left w-2/5 h-screen ">
                <div >
                    <h1 class="tituloPrincipal text-4xl text-center top-16 text-black mt-72 ">¡A caray eso si<br> <span class="resaltar2 tituloPrincipal font-medium ml-40">Me interesa!</span></h1> <br>

                    <div class="grid grid-cols-3 gap-4 mt-94 ml-44">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="cta animate-bounce">
                            <span> Registrate</span>
                            <svg width="13px" height="20px" >
                                
                            </svg>
                        </a>
                    @endif
                    <div>
                    
                </div>
            </div>


        </section>

        <div align="center">
            <h1 class="text-center tituloPrincipal mb-4 font-black text-4xl">Alegrate el día</h1>
            @include('frases')
        </div>

        <br>

    </div>    

        <div class="container mx-auto flex flex-wrap my-8 justify-center">

        <h1 class="text-center text-6xl tituloPrincipal mb-4">NOSOTROS</h1>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 ">
                <div class="shadow-white max-w-sm overflow-hidden cursor-pointer rounded card shadow-xl transition duration-700 ease-in-out bg-white"><br>
                    <div align="center" >
                    <img class="w-40" src="img/melissa.png" alt="">

                    </div>

                    <!-- CARD MELISSA ANAHI MAY CAN -->

                    <div class="px-6 py-4 "><br>
                        <div class="font-bold text-xl mb-2 text-center text-red-600">Melissa Anahi May Can</div>
                        <p class="textoAll text-base text-justify">
                            Estudiante de la Ingeniería en Sistemas Computacionales, encargado del desarrollo de la programación Back End. <br>
                            melissa.18070069@itsmotul.edu.mx
                            
                        </p>
                    </div>
                    <div class="px-6 py-4 text-center">
                    <!-- <button class="rounded-md font-black text-black  p-2  bg-yellow-300 px-3 py-1 "><a href="">Leer Más</a></button><br> -->
                    </div>
                </div>

                <div class="shadow-white max-w-sm overflow-hidden cursor-pointer rounded card shadow-xl transition duration-700 ease-in-out bg-white"><br>
                    <div align="center" >
                    <img class="w-40" src="img/isaias.png" alt="">

                    </div>

                    <!-- CARD JOSE ISAIAS NAHUAT CETZ -->

                    <div class="px-6 py-4 "><br>
                        <div class="font-bold text-xl mb-2 text-center text-red-600">José Isaias Nahuat Cetz</div>
                        <p class="textoAll text-base text-justify">
                            Estudiante de la Ingeniería en Sistemas Computacionales, encargado del desarrollo de la programación Back End.<br>
                            jose.18070047@itsmotul.edu.mx
                            
                        </p>
                    </div>
                    <div class="px-6 py-4 text-center">
                    <!-- <button class="rounded-md font-black text-black  p-2  bg-yellow-300 px-3 py-1 "><a href="">Leer Más</a></button><br> -->
                    </div>
                </div>

                <!-- CARD EDWIN GASPAR VICARIA XOOL -->

                <div class="shadow-white max-w-sm overflow-hidden cursor-pointer rounded card shadow-xl transition duration-700 ease-in-out bg-white"><br>
                    <div align="center" >
                    <img class="w-40" src="img/edwin.png" alt="">

                    </div>
                
                    <div class="px-6 py-4 "><br>
                        <div class="font-bold text-xl mb-2 text-center text-red-600">Edwin Gaspar Vicaria Xool</div>
                        <p class="textoAll text-base text-justify">
                            Estudiante de la Ingeniería en Sistemas Computacionales, encargado del desarrollo de la programación Back End.<br>
                            edwin.18070070@itsmotul.edu.mx
                            
                        </p>
                    </div>
                    <div class="px-6 py-4 text-center">
                    <!-- <button class="rounded-md font-black text-black  p-2  bg-yellow-300 px-3 py-1 "><a href="">Leer Más</a></button><br> -->
                    </div>
                </div>
            </div>
        </div>
    

    <!-- <div class="max-w-md p-4 mx-auto mt-4 bg-gray-200 sm:shadow-md sm::rounded-md sm:bg-gray-100 sm:p-6 md:bg-green-100">
        <h2 class="text-lg font-semibold text-center text-blue-500 sm:text-xl">Me adapto a todo</h2>
        <p class="mt-3 text-gray-600">Esta caja es adaptable. Diseño primero para las dimensiones pequeñas y voy aumentando para las grandes.</p>
    </div> -->

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