@extends('layouts.inicio') 
@section('contenido')
<title>Esquemas</title>
<body>
    <nav class="border-gray-200 px-2 sm:px-4 py-7 rounded">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    @if(Auth()->user())
                    <li>
                        <a href="{{route('dashboard')}}"
                            class="titulo ml-10 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">REGRESAR</a>
                    </li>
                    @else
                    <li>
                        <a href="{{url('/')}}"
                            class="titulo ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">PAGINA
                            PRINCIPAL</a>
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
                    <li><a href="" class="ml-64"></a></li>
                    @if (Route::has('login'))

                    <div class="">
                        @auth

                        <div class="dropdown relative ml-86">
                            <button class="text-black font-semibold rounded inline-flex items-center">
                                <span class="mr-1 titulo">{{ Auth::user()->name }}</span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </button>
                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-28 content-center">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li
                                        class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                        <a href="{{route('miPerfil', Auth::user()->id)}}" class="titulo">PERFIL<span
                                                class="material-icons ml-5">account_circle</span></a>
                                    </li>

                                    <!-- <li>
                                                        <a href="{{route('dashboard')}}" class="titulo rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">PRINCIPAL</a>
                                                    </li> -->

                                    <li
                                        class="titulo rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                        <button>
                                            <a :href="route('logout')" onclick="event.preventDefault();
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
                            <a href="{{ route('register') }}"
                                class="titulo ml-96 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-red dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">REGISTRARSE</a>
                            @endif
                            <a href="{{ route('login') }}"
                                class="titulo ml-5 block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-red dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">INICIAR
                                SESIÓN</a>
                        </div>
                        @endauth
                    </div>

                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center text-4xl font-black">Sabias que....</h1>
    <div class="flex">
        <img class="w-64" src="img/grafica1.png" alt="" />
        <h1 class="text-center text-4xl font-black mt-24">De los albures más usados en México el 72% son <b>Vúlgares</b> </h1>
    </div>
    <br>
    <h1 class="text-center text-4xl font-black">Resultados de los albures mas buscados</h1><br>
    <img  src="img/grafica2.png" alt="" /><br>
    <h1 class="text-center text-4xl font-black">albures más usados por los mexicanos</h1><br>
    <img  src="img/grafica3.png" alt="" />

    <h1>Chart.js</h1>
<h4>Comparacion de navegadores</h4>
<canvas id="myChart"></canvas>
<br>
<h4>Gráfico de barras</h4>
<canvas id="myChart1"></canvas>
<br>
<h4>Gráfico de líneas</h4>
<canvas id="myChart2"></canvas>
<br>
<script src="chart.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
            label: 'Ingresos',
            backgroundColor: '#42a5f5',
            borderColor: 'gray',
            data: [7, 8, 5, 2, 8, 10, 7,-7,4,9,-8,5]
        },{
            label: 'Gastos',
            backgroundColor: '#ffab91',
            borderColor: 'yellow',
            data: [5, -8, 10, 3,-7,6,8,-2,-6,9,-7,2]
        }		
		]},
    options: {responsive: true}
});
var ctx1 = document.getElementById('myChart1').getContext('2d');
var chart = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
            label: 'Ganancias',
            backgroundColor: '#42a5f5',
            borderColor: 'gray',
            data: [7, 8, 5, 2, 8, 10, 7,-7,4,9,-8,5]
        }		
		]},
    options: {}
});
var ctx2 = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx2, {
    type: 'doughnut',
    data: 	
	{
				datasets: [{
					 data: [60,18,10, 8, 4],
					backgroundColor: ['#42a5f5', 'red', 'green','blue','violet'],
					label: 'Comparacion de navegadores'
				}],
				labels: [
					'Google Chrome',
					'Safari',
					'Edge',
					'Firefox',
					'Opera'
				]},
    options: {}
});
</script>

</body>

@endsection