@extends('layouts.inicio')
@section('contenido')
<title>Historia</title>
<style>

    /*Links de fondos de pantalla
    https://www.xtrafondos.com/wallpapers/geometria-abstracta-9698.jpg
    https://www.xtrafondos.com/wallpapers/figuras-geometricas-en-bucle-7832.jpg
    https://www.xtrafondos.com/wallpapers/lineas-de-colores-en-movimiento-7361.jpg
    https://www.xtrafondos.com/wallpapers/luces-del-trafico-a-traves-de-vidrio-con-gotas-de-lluvia-6962.jpg
    
https://fondosmil.com/fondo/50411.jpg
    https://www.xtrafondos.com/wallpapers/resized/ubuntu-15-vivid-vervet-greyscale-3442.jpg?s=large

    https://wc.wallpaperuse.com/wallp/45-459219_s.jpg)
    */
    .fondo{
            background-image: url(https://wc.wallpaperuse.com/wallp/45-459219_s.jpg);
            background-size: 25rem;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment: fixed;
        }
        .font{
        font-family: 'Orbitron', sans-serif;
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
                                <a href="{{route('dashboard')}}" class="tituloPrincipal py-4 px-2 text-white font-semibold hover:text-blue-500 transition duration-300">REGRESAR</a>
                                
                                <a href="{{route('conocermas')}}" class="tituloPrincipal py-4 px-2 text-white font-semibold hover:text-blue-500 transition duration-300">DICCIONARIO DE ALBURES</a>
                                <!-- <a href="" class="py-4 px-2 text-white font-semibold hover:text-blue-500 transition duration-300">About</a>
                                <a href="" class="py-4 px-2 text-white font-semibold hover:text-blue-500 transition duration-300">Contact Us</a> -->
                            </div>
                        </div>
                        <!-- Secondary Navbar items -->
                        <div class="hidden md:flex items-center space-x-3 ">
                                @if (Route::has('login'))
                                    <div class=" ">
                                        @auth
                                            <div class="dropdown  relative ml-96 ">
                                                <button class="text-gray-700 font-semibold rounded inline-flex items-center">
                                                <span class="mr-1 text-white tituloPrincipal">{{ Auth::user()->name }}</span>
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
                                                                        {{ __('CERRAR SESI??N') }}
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
                        <li><a href="{{route('dashboard')}}" class="tituloPrincipal block text-sm px-2 py-4 hover:bg-blue-500 hover:text-white transition duration-300">REGRESAR</a></li>
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



    
    <div class="contenedor ml-14">
        <div class="servicebox">
            <div class="icon" style="--i:#FFC51E">
                <ion-icon name="book-outline"></ion-icon>
            </div>
            <div class="content">
                <h2 class="tituloPrincipal">Definici??n</h2>
                <p class="textoAll">
                    Juego de palabras de doble sentido que en una conversaci??n sirve para comentar 
                    o responder a algo en plan de burla o escarnio, normalmente hacen referencia a 
                    situaciones en doble sentido sexual o escatol??gico.
            
                </p>
            </div>
        </div>
        <div class="servicebox">
            <div class="icon" style="--i:#FFC51E">
                <ion-icon name="earth-outline"></ion-icon>
            </div>
            <div class="content">
                <h2 class="tituloPrincipal">Origen</h2>
                <p class="textoAll">
                    Los albures son un juego de palabras muy generalizado entre los hispanohablantes, 
                    aunque es muy caracter??stico de M??xico. No se conoce una fecha exacta para su nacimiento, 
                    pero se cree que desde la ??poca colonial era usado por los mineros del ??rea de Pachuca en 
                    el hoy estado de Hidalgo.
                </p>
            </div>
        </div>
        <div class="servicebox">
            <div class="icon" style="--i:#FFC51E">
                <ion-icon name="accessibility-outline"></ion-icon>
            </div>
            <div class="content">
                <h2 class="tituloPrincipal">Participantes</h2>
                <p class="textoAll">
                    Se conoce como alburero a la persona que frecuenta este tipo de comunicaci??n y 
                    como albureado a la que es v??ctima de la misma. Ambos t??rminos se utilizan tanto 
                    en el concurso como en la vida diaria, pr??cticamente con cualquier otro tipo de broma.
                </p>
            </div>
        </div>
        <div class="servicebox">
            <div class="icon" style="--i:#FFC51E">
                <ion-icon name="receipt-outline"></ion-icon>
            </div>
            <div class="content">
                <h2 class="tituloPrincipal">Reglas</h2>
                <p class="textoAll">
                    ???	Evitar que el contrario pueda contestar lo que se le dijo.<br>
                    ???	Utilizar el verso rimado.<br>
                    ???	Usar la acentuaci??n para formar, con dos o m??s palabras. <br>
                    ???	Los versos deben ser nuevos y relacionados con una situaci??n diferente a la que se trata en la realidad. 
                </p>
            </div>
        </div>
        <div class="servicebox">
            <div class="icon" style="--i:#FFC51E">
                <ion-icon name="medal-outline"></ion-icon>
            </div>
            <div class="content">
                <h2 class="tituloPrincipal"> Reina del albur</h2>
                <p class="textoAll">
                    Lourdes Ruiz Baltazar, m??s conocida como la Reina del Albur o la Verdolaga Enmascarada,
                    fue la primera mujer ganadora del torneo de albur de la Ciudad de M??xico.
                </p>
            </div>
        </div>
    </div>


    <!-- <div class="container">

            <h1 class="font text-white text-4xl mt-5 text-center">Conozcamos un poco m??s sobre el albur</h1>

            <div class="grid grid-cols-3 gap-4 mt-5 ">
                <div>
                    <div class="bg-sky-900 bg-opacity-50 text-white p-2 rounded-lg">
                        <h1 class="text-center"><b> Definici??n</b></h1><br>
                        <p class="text-justify">
                            Juego de palabras de doble sentido que en una conversaci??n sirve para comentar 
                            o responder a algo en plan de burla o escarnio, normalmente hacen referencia a 
                            situaciones en doble sentido sexual o escatol??gico.
                        </p><br>
                        <p class="text-justify">
                            Esta forma ling????stica, que tiene antecedentes en la ??poca mesoamericana, 
                            ha sido se??alada como una forma de ingenio, creatividad y como un c??digo secreto 
                            entre las personas que lo usan, pero tambi??n criticado como una forma de lenguaje sexista, 
                            homof??bica, machista o humillante.
                        </p>
                    </div>
                </div>
                <div>
                    <div class="bg-sky-900 bg-opacity-50 text-white p-2 rounded-lg">
                        <h1 class="text-center"><b> Origen</b></h1><br>
                        <p class="text-justify">
                            Los albures son un juego de palabras muy generalizado entre los hispanohablantes, 
                            aunque es muy caracter??stico de M??xico. No se conoce una fecha exacta para su nacimiento, 
                            pero se cree que desde la ??poca colonial era usado por los mineros del ??rea de Pachuca en 
                            el hoy estado de Hidalgo, pero a finales del siglo XIX se empez?? a o??r en forma generalizada 
                            en la regi??n central de M??xico, sobre todo entre la poblaci??n de escasos recursos, quienes 
                            desarrollaron ciertas reglas informales, de las cuales la m??s b??sica es evitar que el contrario 
                            pueda contestar lo que se le dijo.
                        </p>
                    </div>
                </div>
                <div>
                    <div class="bg-sky-900 bg-opacity-50 text-white p-2 rounded-lg">
                        <h1 class="text-center"><b> Participantes</b></h1><br>
                        <p class="text-justify">
                            Se conoce como alburero a la persona que frecuenta este tipo de comunicaci??n y 
                            como albureado a la que es v??ctima de la misma. Ambos t??rminos se utilizan tanto 
                            en el concurso como en la vida diaria, pr??cticamente con cualquier otro tipo de broma.
                        </p><br><br><br><br><br><br>
                    </div>
                </div>
                <div class="ml-48 -mr-48">
                    <div class="bg-sky-900 bg-opacity-50 text-white p-2 rounded-lg">
                        <h1 class="text-center"><b> Reglas</b></h1><br>
                        <p class="text-justify">
                            Como juego, el albur tiene varias reglas: <br>
                            ???	Evitar que el contrario pueda contestar lo que se le dijo.<br>
                            ???	Utilizar el verso rimado.<br>
                            ???	Usar la acentuaci??n para formar, con dos o m??s palabras, otra que sea el verdadero sentido (calambur). <br>
                            ???	Los versos deben ser nuevos y relacionados con una situaci??n diferente a la que se trata en la realidad, ??sta siempre o casi siempre de ??ndole sexual. <br>
                            ???	Se pueden incluir ademanes, gestos, expresiones gr??ficas, escritas e incluso sonoras no ling????sticas como el silbido. 

                        </p><br><br>
                    </div>
                </div>
                <div class="ml-48 -mr-48">
                    <div class="bg-sky-900 bg-opacity-50 text-white p-2 rounded-lg">
                        <h1 class="text-center"><b> Reina del albur</b></h1><br>
                        <p class="text-justify">
                            Lourdes Ruiz Baltazar, m??s conocida como la Reina del Albur o la Verdolaga Enmascarada,
                             fue la primera mujer ganadora del torneo de albur de la Ciudad de M??xico, tallerista y 
                             difusora de la cultura popular de Tepito.
                        </p><br>
                        <p class="text-justify">
                            Realiz?? un diplomado en conjunto con Alfonso Hern??ndez, cronista y director del Centro de 
                            Estudios Tepite??os, sobre albures finos en la Galer??a Jos?? Mar??a Velasco, con aval del Instituto 
                            Nacional de Bellas Artes y de la Secretar??a de Cultura, en donde el p??blico en general aprende acerca
                            de la picard??a mexicana y del lenguaje popular de Tepito; al taller asistieron tanto amas de casa como impresionistas.
                            Por su actividad, ha visitado varias ciudades mexicanas y del extranjero.
                        </p>
                    </div>
                </div>
            </div>
    </div> -->
</body>
@endsection