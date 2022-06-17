@extends('layouts.inicio')
@section('contenido')
<script src="https://cdn.tailwindcss.com"></script>
<title>Inicio de sesión</title>
<style>
    .fondo{
        /*https://media.istockphoto.com/photos/abstract-line-technology-modern-geometric-paper-shape-subtle-picture-id1353982666?b=1&k=20&m=1353982666&s=170667a&w=0&h=rQw4tC_YXXEc70gCPmHDNrHzBeR4_2JJsNYedGF5oTM= 
        
        https://www.xtrafondos.com/wallpapers/resized/luces-del-trafico-a-traves-de-vidrio-con-gotas-de-lluvia-6962.jpg?s=large*/
            background-image: url(https://media.istockphoto.com/photos/abstract-line-technology-modern-geometric-paper-shape-subtle-picture-id1353982666?b=1&k=20&m=1353982666&s=170667a&w=0&h=rQw4tC_YXXEc70gCPmHDNrHzBeR4_2JJsNYedGF5oTM=);
            background-size: 25rem;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment: fixed;
        }
        .input-wrapper {
            position: relative;
            width: 100%;
            }

            .input-icon {
            color: #191919;
            position: absolute;
            width: 20px;
            height: 20px;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
        }

        .titulo{
            font-family: 'Mali', cursive;
        }
</style>
<body class="fondo backdrop-blur-md">
    
    <div >

        <div class="grid grid-cols-5 gap-4">
            <div class="col-span-3">

                
                <div class="hidden md:flex relative min-h-screen flex flex-col sm:justify-center items-center  ">
                <div class="hidden md:flex relative sm:max-w-sm w-full">
                    <div class="hidden md:flex card bg-green-600 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-12 origin-top-left"></div>
                    <div class="hidden md:flex card bg-white shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-12 origin-bottom " ></div>
                    <div class="hidden md:flex card bg-red-600 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-12"></div>
                    <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-300 bg-opacity-50 shadow-md">
                        <label for="" class="hidden md:flex mb-4 block mt-3 text-3xl text-black text-center font-semibold titulo">Iniciar Sesión</label>
                    <!-- <div class="grid grid-cols-5">
                        <div></div>
                        <div class="flex col-span-3">
                            <h1 for="" class="c mb-4 block mt-3 text-3xl text-green-600 text-center font-semibold">
                                Inic
                            </h1>
                            <h1 for="" class="text-center mb-4 block mt-3 text-3xl text-white text-center font-semibold">
                                iar Se
                            </h1>
                            <h1 for="" class="text-center mb-4 block mt-3 text-3xl text-red-600 text-center font-semibold">
                            sion
                            </h1>
                        </div>
                        <div></div>
                    </div> -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->

                                <div class="flex">
                                    <div class="input-wrapper">
                            
                                        <input id="email" class=" w-full p-3 rounded-r-lg rounded-l-full text-center input" type="email" placeholder="CORREO" name="email" :value="old('email')" required />
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none"/><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                </div>
                                

                                <!-- Password -->

                                <div class="mt-4 flex ">
                                    <div class="input-wrapper">
                                <!--  <x-label for="password" class="text-white" :value="__('Contraseña')" />-->

                                        <input class="p-3 w-full text-center rounded-l-full rounded-r-lg input" placeholder="CONTRASEÑA" id="password" 
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />

                                        <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
                                        </svg>
                                    </div>
                                </div>

                                

                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center text-white">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                        <span class="ml-2 text-sm text-gray-600 titulo">{{ __('Recordarme siempre') }}</span>
                                    </label>
                                </div>

                                <div class="grid grid-cols-4 gap-4">
                                    <div></div>
                                    <div class="col-span-2">
                                        <div class="mt-4">
                                            <button class="border border-2 p-2 bg-indigo-400 w-40 hover:bg-blue-500 rounded-lg titulo">Iniciar sesión</button>
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                                <br>

                                @if (Route::has('register'))
                                <!-- <x-button class="w-full mt-3"><a href="" class=" ">Registrarse</a></x-button> -->
                                    <div class="">
                                        <label for="" class="font-black titulo">Eres nueva chiquita?</label>
                                        <a class="underline text-sm text-white hover:text-red-600 titulo" href="{{ route('register') }}">
                                            {{ __('Registrate wey') }}
                                        </a>
                                    </div>
                                @endif
                                <div class="grid grid-cols-2 gap-4 mt-3">
                                    <div>
                                        <a href="{{ url('/') }}" class="titulo text-sm text-white hover:text-red-600 underline">Regresar al inicio</a>
                                    </div>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a class="titulo underline text-sm text-white hover:text-red-600" href="{{ route('password.request') }}">
                                                {{ __('No sabes tu contraseña?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                
                                
                            </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-span-2">
                <div>
                    <img class="hidden md:flex mt-10" src="img/LOGO.png" alt="logo">
                    <h1 class="hidden md:flex text-4xl text-center titulo font-black">No se apene, pásele joven</h1>
                </div>
            </div>
        </div>
    

                <div class="md:hidden flex relative min-h-screen flex flex-col sm:justify-center items-center  ">
                <div class="md:hidden flex relative sm:max-w-sm w-full">
                    <div class="md:hidden flex card bg-green-600 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-12 origin-top-left"></div>
                    <div class="md:hidden flex card bg-white shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-12 origin-bottom " ></div>
                    <div class="md:hidden flex card bg-red-600 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-12"></div>
                    <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-300 bg-opacity-50 shadow-md">
                        <label for="" class="md:hidden flex mb-4 block mt-3 text-3xl text-black text-center font-semibold titulo">Iniciar Sesión</label>
                    <!-- <div class="grid grid-cols-5">
                        <div></div>
                        <div class="flex col-span-3">
                            <h1 for="" class="c mb-4 block mt-3 text-3xl text-green-600 text-center font-semibold">
                                Inic
                            </h1>
                            <h1 for="" class="text-center mb-4 block mt-3 text-3xl text-white text-center font-semibold">
                                iar Se
                            </h1>
                            <h1 for="" class="text-center mb-4 block mt-3 text-3xl text-red-600 text-center font-semibold">
                            sion
                            </h1>
                        </div>
                        <div></div>
                    </div> -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->

                                <div class="flex">
                                    <div class="input-wrapper">
                            
                                        <input id="email" class=" w-full p-3 rounded-r-lg rounded-l-full text-center input" type="email" placeholder="CORREO" name="email" :value="old('email')" required />
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none"/><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                </div>
                                

                                <!-- Password -->

                                <div class="mt-4 flex ">
                                    <div class="input-wrapper">
                                <!--  <x-label for="password" class="text-white" :value="__('Contraseña')" />-->

                                        <input class="p-3 w-full text-center rounded-l-full rounded-r-lg input" placeholder="CONTRASEÑA" id="password" 
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />

                                        <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
                                        </svg>
                                    </div>
                                </div>

                                

                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center text-white">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                        <span class="ml-2 text-sm text-gray-600 titulo">{{ __('Recordarme siempre') }}</span>
                                    </label>
                                </div>

                                <div class="grid grid-cols-4 gap-4">
                                    <div></div>
                                    <div class="col-span-2">
                                        <div class="mt-4">
                                            <button class="border border-2 p-2 bg-indigo-400 w-40 hover:bg-blue-500 rounded-lg titulo">Iniciar sesión</button>
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                                <br>

                                @if (Route::has('register'))
                                <!-- <x-button class="w-full mt-3"><a href="" class=" ">Registrarse</a></x-button> -->
                                    <div class="">
                                        <label for="" class="font-black titulo">Eres nueva chiquita?</label>
                                        <a class="underline text-sm text-white hover:text-red-600 titulo" href="{{ route('register') }}">
                                            {{ __('Registrate wey') }}
                                        </a>
                                    </div>
                                @endif
                                <div class="grid grid-cols-2 gap-4 mt-3">
                                    <div>
                                        <a href="{{ url('/') }}" class="titulo text-sm text-white hover:text-red-600 underline">Regresar al inicio</a>
                                    </div>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a class="titulo underline text-sm text-white hover:text-red-600" href="{{ route('password.request') }}">
                                                {{ __('No sabes tu contraseña?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                
                                
                            </form>
                    </div>
                </div>


    </div>
</body> 
@endsection