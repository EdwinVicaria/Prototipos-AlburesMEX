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
            background-image: url(https://fondosmil.com/fondo/50411.jpg);
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
</style>
<body class="fondo">
    <div class="container">
            <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded w-screen bg-sky-900 bg-opacity-50">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            
                            <li>
                                <a href="{{ route('alburs.index') }}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">ALBURES</a>
                            </li>
                            <li>
                            <a href="{{route('conocermas')}}" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Diccionario!</a>
                            </li>
                            <li>
                                <a href="{{route('nosotros')}}" class=" ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Nosotros</a>
                            </li>
                            <li>
                            <a href="" class="ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Conocer m??s!</a>
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

                                                    <li>
                                                        <a href="{{route('dashboard')}}" class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Home</a>
                                                    </li>

                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <button>
                                                            <a :href="route('logout')"
                                                                        onclick="event.preventDefault();
                                                                                    this.closest('form').submit();">
                                                                    {{ __('Cerrar sesi??n ') }}
                                                            </a>
                                                        </button>
                                                    </li>
                                                    
                                                </form>
                                            
                                            </ul>
                                        </div>
                                    @else
                                        <a href="{{ route('login') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Iniciar Sesi??n</a>
                                    @endauth
                                </div>
                                
                            @endif
                            
                        </ul>
                    </div>
                    
                </div>
            </nav>

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
    </div>
</body>
@endsection