@extends('layouts.inicio')
@section('contenido')

<script src="https://cdn.tailwindcss.com"></script>

<title>Registro</title>

<style>
    .fondo{
        /*https://www.xtrafondos.com/wallpapers/lineas-de-colores-en-movimiento-7361.jpg */
            background-image: url(https://media.istockphoto.com/photos/abstract-line-technology-modern-geometric-paper-shape-subtle-picture-id1353982666?b=1&k=20&m=1353982666&s=170667a&w=0&h=rQw4tC_YXXEc70gCPmHDNrHzBeR4_2JJsNYedGF5oTM=);
            background-size: 25rem;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment: fixed;
        }
        .titulo{
        font-family: 'Mali', cursive;
    }
</style>
<body class="fondo backdrop-blur-md">
    <
    <div>
        <div class="grid grid-cols-5 gap-4 ">
            <div class="col-span-3">

                
                <div class="hidden md:flex relative min-h-screen flex flex-col sm:justify-center items-center  ">
                <div class="hidden md:flex relative sm:max-w-sm w-full">
                    <div class="hidden md:flex card bg-green-600 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-12 origin-top-left"></div>
                    <div class="hidden md:flex card bg-white shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-12 origin-bottom " ></div>
                    <div class="hidden md:flex card bg-red-600 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-12"></div>
                    <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-300 bg-opacity-50 shadow-md">
                    <label for="" class="hidden md:flex mb-4 block mt-3 text-3xl text-black text-center font-semibold titulo">Registrate</label>
                    <!-- <div class="grid grid-cols-5">
                        <div></div>
                        <div class="flex col-span-3">
                            <h1 for="" class="c mb-4 block mt-3 text-4xl text-green-600 text-center font-semibold">
                                Reg
                            </h1>
                            <h1 for="" class="text-center mb-4 block mt-3 text-4xl text-white text-center font-semibold">
                                istra
                            </h1>
                            <h1 for="" class="text-center mb-4 block mt-3 text-4xl text-red-600 text-center font-semibold">
                                rse
                            </h1>
                        </div>
                        <div></div>
                    </div> -->
                            <!-- form del registro -->
                            <form method="POST" action="{{ route('register') }}" >
                                @csrf
                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Nombre o Apodo')" class="titulo text-zinc-50"/>

                                    <x-input id="name" class="titulo block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
                                </div>
                                
                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Correo')" class="titulo text-zinc-50"/>

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
                                </div>
                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Contraseña')" class="titulo text-zinc-50"/>

                                    <x-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                </div>
                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirmar constraseña')" class="titulo text-zinc-50"/>

                                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required />
                                </div>
                                

                                <!-- <div class="grid grid-cols-2 gap-4 mt-7 text-center"> -->
                                    <!-- <div>
                                        <a href="{{ url('/') }}" class="text-sm text-white hover:text-red-600 underline mr-7">Regresar al inicio</a>
                                    </div> -->
                                    
                                <!-- </div> -->


                                <div class="grid grid-cols-4 gap-4">
                                    <div></div>
                                    <div class="col-span-2">
                                        <div class="mt-4">
                                            <button class="border border-2 p-2 bg-indigo-400 w-40 hover:bg-blue-500 rounded-lg titulo">Registrarse</button>
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                                
                                <div class="mt-5">
                                    <label for="" class="font-black titulo">Ya te tienes registrado?</label>
                                    <a class="titulo underline text-sm text-white hover:text-red-600" href="{{ route('login') }}">
                                        {{ __('Inicia sesión wey') }}
                                    </a>
                                </div>

                            </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-span-2">
                <div class="">
                    <img class="hidden md:flex mt-10" src="img/LOGO.png" alt="logo">
                    <h1 class="hidden md:flex text-4xl text-center titulo font-black">No se apene, pásele joven</h1>
                </div>
            </div>
        </div>


        

                <div class="md:hidden flex items-center relative min-h-screen flex flex-col sm:justify-center items-center  ">
                <div class="md:hidden flex items-center relative sm:max-w-sm w-full">
                    <div class="md:hidden flex items-center card bg-green-600 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-12 origin-top-left"></div>
                    <div class="md:hidden flex items-center card bg-white shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-12 origin-bottom " ></div>
                    <div class="md:hidden flex items-center card bg-red-600 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-12"></div>
                    <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-300 bg-opacity-50 shadow-md">
                    <label for="" class="md:hidden flex items-center mb-4 block mt-3 text-3xl text-black text-center font-semibold titulo">Registrate</label>
                    <!-- <div class="grid grid-cols-5">
                        <div></div>
                        <div class="flex col-span-3">
                            <h1 for="" class="c mb-4 block mt-3 text-4xl text-green-600 text-center font-semibold">
                                Reg
                            </h1>
                            <h1 for="" class="text-center mb-4 block mt-3 text-4xl text-white text-center font-semibold">
                                istra
                            </h1>
                            <h1 for="" class="text-center mb-4 block mt-3 text-4xl text-red-600 text-center font-semibold">
                                rse
                            </h1>
                        </div>
                        <div></div>
                    </div> -->
                            <!-- form del registro -->
                            <form method="POST" action="{{ route('register') }}" >
                                @csrf
                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Nombre o Apodo')" class="titulo text-zinc-50"/>

                                    <x-input id="name" class="titulo block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
                                </div>
                                
                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Correo')" class="titulo text-zinc-50"/>

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
                                </div>
                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Contraseña')" class="titulo text-zinc-50"/>

                                    <x-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                </div>
                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirmar constraseña')" class="titulo text-zinc-50"/>

                                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required />
                                </div>
                                

                                <!-- <div class="grid grid-cols-2 gap-4 mt-7 text-center"> -->
                                    <!-- <div>
                                        <a href="{{ url('/') }}" class="text-sm text-white hover:text-red-600 underline mr-7">Regresar al inicio</a>
                                    </div> -->
                                    
                                <!-- </div> -->


                                <div class="grid grid-cols-4 gap-4">
                                    <div></div>
                                    <div class="col-span-2">
                                        <div class="mt-4">
                                            <button class="border border-2 p-2 bg-indigo-400 w-40 hover:bg-blue-500 rounded-lg titulo">Registrarse</button>
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                                
                                <div class="mt-5">
                                    <label for="" class="font-black titulo">Ya te tienes registrado?</label>
                                    <a class="titulo underline text-sm text-white hover:text-red-600" href="{{ route('login') }}">
                                        {{ __('Inicia sesión wey') }}
                                    </a>
                                </div>

                            </form>
                    </div>
                </div>


    </div>
    
</body>
@endsection