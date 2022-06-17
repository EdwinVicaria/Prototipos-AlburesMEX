@extends('layouts.inicio')
@section('contenido')
<script src="https://cdn.tailwindcss.com"></script>

<style>
    .fondo{
            background-image: url(https://www.xtrafondos.com/wallpapers/lineas-de-colores-en-movimiento-7361.jpg);
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
</style>
<body class="fondo backdrop-blur-sm">
    
       
    <div >
        
        <br><br><br><br>
        <div class="grid grid-cols-3 gap-4">
            <div class=""></div>
            <div class="grid grid-rows-3 grid-flow-col gap-4">
                <div class="row-start-2 row-span-2 ..."></div>
                <div  class="row-end-3 row-span-2 " >
                    <a href="/">
                        <img class="justify-content" src="img/logo_small.png" alt="logo">
                    </a>
                </div>
                <div class="row-start-1 row-end-4 ..."></div>
            </div>
            <div class=""></div>
        </div>
        <!-- Session Status -->
       <x-auth-session-status class="mb-4" :status="session('status')" />
        
        <!-- Validation Errors -->
       <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
        <div>
            @if ($errors->any())
                <div {{ $attributes }}>
                    <div class="font-medium text-red-600">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="grid grid-cols-3 gap-4">
            <div class="col-3"></div>
            <div class="col-6 bg-gray-900 bg-opacity-50 p-8 rounded-lg">
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
                            <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme siempre') }}</span>
                        </label>
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        <div></div>
                        <div>
                            <div class="mt-4">
                                <x-button class="w-full">
                                    {{ __('Iniciar sesión') }}
                                </x-button>

                                @if (Route::has('register'))
                                    <x-button class="w-full mt-3"><a href="{{ route('register') }}" class=" ">Registrarse</a></x-button>
                                @endif
                            </div>
                        </div>
                        <div></div>
                    </div>
                    <br>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <a href="{{ url('/') }}" class="text-sm text-white hover:text-red-600 underline">Regresar al inicio</a>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-white hover:text-red-600" href="{{ route('password.request') }}">
                                    {{ __('Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="col-3"></div>
        </div>
        <br><br><br><br><br><br>
    </div>
</body> 
@endsection