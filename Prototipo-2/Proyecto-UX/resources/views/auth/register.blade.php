<script src="https://cdn.tailwindcss.com"></script>

<title>Registro</title>

<style>
    .fondo{
            background-image: url(https://www.xtrafondos.com/wallpapers/lineas-de-colores-en-movimiento-7361.jpg);
            background-size: 25rem;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment: fixed;
        }
</style>
<body class="fondo backdrop-blur-sm">
    

    <div class="">
        <div class="grid grid-cols-3 gap-4">
            <div class=""></div>
            <div class="grid grid-rows-3 grid-flow-col gap-4">
                <div class="row-start-2 row-span-2 ..."></div>
                <div  class="row-end-3 row-span-2 " >
                    <a href="/">
                        <img class="w-24 justify-content" src="http://i.stack.imgur.com/e8nZC.gif" alt="logo">
                    </a>
                </div>
                <div class="row-start-1 row-end-4 ..."></div>
            </div>
            <div class=""></div>
        </div>
        <!-- Validation Errors -->
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
        <div class="grid grid-cols-3 gap-4 ">
            <div class="col-3"></div>
        
            <div class="col-6 bg-gray-900 bg-opacity-50 p-8 rounded-lg">
                <form method="POST" action="{{ route('register') }}" >
                    @csrf
                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Nombre o Apodo')" class="text-zinc-50"/>

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
                    </div>
                    <!-- Apellido Paterno -->
                  <!--  <div class="mt-4">
                        <x-label for="apellidopat" :value="__('Apellido paterno')" class="text-zinc-50"/>

                        <x-input id="apellidopat" class="block mt-1 w-full" type="text" name="apellidopat" :value="old('apellidopat')"  autofocus />
                    </div>-->
                    <!-- Apellido Materno -->
                    <!--<div class="mt-4">
                        <x-label for="apellidomat" :value="__('Apellido materno')" class="text-zinc-50"/>

                        <x-input id="apellidomat" class="block mt-1 w-full" type="text" name="apellidomat" :value="old('apellidomat')"  autofocus />
                    </div>-->
                    <!-- Apellido Materno -->
                    <!--<div class="mt-4">
                        <x-label for="sexo" :value="__('Tipo de sexo')" class="text-zinc-50"/>

                        <select id="sexo" class="block mt-1 w-full" type="select" name="sexo" :value="old('sexo')"  autofocus>
                            <option value="" disabled selected>Sexo</option>
                            <option value="1">Hombre</option>
                            <option value="2">Mujer</option>
                            <option value="3">Indefinido</option>
                        </select>
                    </div>-->
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Correo')" class="text-zinc-50"/>

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Contraseña')" class="text-zinc-50"/>

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirmar constraseña')" class="text-zinc-50"/>

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>
                    

                    <div class="grid grid-cols-2 gap-4 mt-7 text-center">
                        <div>
                            <a href="{{ url('/') }}" class="text-sm text-white hover:text-red-600 underline mr-7">Regresar al inicio</a>
                        </div>
                        <div>
                            <a class="underline text-sm text-white hover:text-red-600" href="{{ route('login') }}">
                                {{ __('Ya estas registrado?') }}
                            </a>
                        </div>
                    </div>


                    <div class="grid grid-cols-3 gap-4">
                        <div></div>
                        <div>
                            <div class="flex items-center justify-end mt-7">
                                <x-button class="ml-4">
                                    {{ __('Registrarse') }}
                                </x-button>
                            </div>
                        </div>
                        <div></div>
                    </div>
                    

                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
