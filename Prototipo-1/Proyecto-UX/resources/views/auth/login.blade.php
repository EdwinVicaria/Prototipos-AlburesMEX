<script src="https://cdn.tailwindcss.com"></script>

<style>
    .fondo{
            background-image: url(https://www.xtrafondos.com/wallpapers/lineas-de-colores-en-movimiento-7361.jpg);
            background-size: 25rem;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment: fixed;
        }
</style>
<body class="fondo">
    
       
    <div >
        
        <br><br><br><br>
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
            <div class="col-6 bg-sky-900 bg-opacity-50 p-8 rounded-lg">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" class="text-white" :value="__('Correo')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" class="text-white" :value="__('Contraseña')" />

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center text-white">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                    <a href="{{ url('/') }}" class="text-sm text-white hover:text-red-600 underline mr-7">Regresar al inicio</a>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-white hover:text-red-600" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-3">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
        <br><br><br><br><br><br>
    </div>
</body> 
