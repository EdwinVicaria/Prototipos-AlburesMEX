
<div>
<style>
        .texto{
            font-family: 'Annie Use Your Telescope', cursive;
        }
        .titulo{
            font-family: 'Londrina Solid', cursive;
        }
        .fondo{
            background-image: url(https://www.xtrafondos.com/wallpapers/resized/ubuntu-15-vivid-vervet-greyscale-3442.jpg?s=large);
            background-size: 25rem;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment: fixed;
        }
        .font{
            font-family: 'Orbitron', sans-serif;
        }
        .titulo{
            font-family: 'Mali', cursive;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .input-wrapper {
            position: relative;
            width: 271px;
            }

            .input {
            box-sizing: border-box;
            color: #191919;
            padding: 15px 15px 15px 35px;
            width: 100%;
            }

            .input.password {
            padding: 15px 35px 15px 15px;
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
<body class="fondo">

    <div class="container mx-auto">

            <nav class="border-gray-200 px-2 sm:px-4 py-7 rounded w-full ">
                <div class="container flex flex-wrap  justify-between items-center mx-auto">
                    
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        
                            @if(Auth()->user())
                                <li>
                                    <a href="{{route('dashboard')}}" class="titulo ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">REGRESAR</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{url('/')}}" class="titulo ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">PAGINA PRINCIPAL</a>
                                </li>
                            @endif
                            <!-- <li>
                                <a href="{{ route('nosotros') }}" class="ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">NOSOTROS</a>
                            </li> -->
                            <li>
                            <a href="{{route('conocermas')}}" class="titulo ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black font-black md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">DICCIONARIO DE ALBURES</a>
                            </li>
                            <!-- <li>
                                <a href="{{route('historia')}}" class=" ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">HISTORIA</a>
                            </li>
                            <li>
                            <a href="" class="ml-10 block py-2 pr-4 pl-3 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">CONOCER MÁS</a>
                            </li> -->
                            <li ><a href="" class="ml-24"></a></li>
                            @if (Route::has('login'))
                                <div class="">
                                    @auth
                                    
                                        <div class="dropdown relative ml-96">
                                            <button class="text-black font-semibold rounded inline-flex items-center">
                                            <span class="mr-1 titulo">{{ Auth::user()->name }}</span>
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                            </button>
                                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-28 content-center">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <a href="{{route('miPerfil', Auth::user()->id)}}" class="titulo">Perfil<span class="material-icons ml-5 ">account_circle</span></a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('dashboard')}}" class="titulo rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Home</a>
                                                    </li>

                                                    <li class="titulo rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                                        <button>
                                                            <a :href="route('logout')"
                                                                        onclick="event.preventDefault();
                                                                                    this.closest('form').submit();">
                                                                    {{ __('Cerrar sesión ') }}
                                                            </a>
                                                        </button>
                                                    </li>
                                                    
                                                </form>
                                            
                                            </ul>
                                        </div>
                                    @else
                                        <div class="flex">
                                            @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="titulo ml-86 block py-2 pr-4 pl-3 text-black-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black-400 md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">REGISTRARSE</a>
                                            @endif
                                            <a href="{{ route('login') }}" class="titulo ml-5 block py-2 pr-4 pl-3 text-black-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">INICIAR SESIÓN</a>
                                        </div>
                                    @endauth
                                </div>
                                
                            @endif
                            
                        </ul>
                    </div>
                    
                </div>
            </nav>

            <!--
            <div class="input-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
                <input class="border border-2 rounded-lg input" type="text" wire:model="buscador">
                <button class="px-3 py-2 bg-yellow-300" wire:click="buscar()">Buscar</button>
            </div>
            -->

            <!-- <button disabled style="float: right" type="button" class="text-black bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800 inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                </svg> <br>
                <select name="idioma" class="border-black text-black rounded-lg     "> 
                    <option  disabled selected>Traducir a</option>
                    <option value="1">Ingles</option>
                    <option value="2">Frances</option>
                    <option value="3">Alemán</option>
                    <option value="4">Checo</option>
                    <option value="5">Chino mandarin</option>
                </select>
            </button> -->
            @if(Auth()->user())
                <div class="ml-96 top-0 right-0 fixed mt-20">
                    <livewire:crear-albur>
                </div>
                @else
            @endif
            <div class="flex">
                <div class="flex fixed">
                    <div class="input-wrapper">
            
                        <input type="search" class="input " placeholder="Buscar un albur" wire:model="buscador">

                        <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <button class="px-3 py-2 bg-yellow-300" wire:click="buscar()">Buscar</button>
                </div>


    <!-- PARTE DEL BOTON PARA CREAR UN NUEVO ALBUR IMPLEMENTADO CON UN COMPONENTE LIVEWIRE -->

            
                
        </div>


        @if (session('mensaje'))
        <div class="text-center">
            <p class="font text-4xl text-white">{{session('mensaje')}}</p>
        </div>
        @endif

        <div class="grid grid-cols-4 gap-4 pl-16 pr-16 py-10 ">
            @foreach ($alburs as $alburs)


            <div class="col-span-2 border border-yellow-600 rounded-lg p-2  mt-10">
                <div class="grid grid-cols-3 gap-4 text-black">
                    <div class="col-span-2 opacity-50 titulo text-black">Albur:</div>
                    <div></div>
                    <div class="col-span-3 text-center titulo font-black text-2xl ">{{$alburs->titulo}}</div>
                    
                    <div class="col-span-2 titulo opacity-50 text-black">Descripción:</div>
                    <div></div>
                    <div class="col-span-3 text-center titulo text-xl">{{$alburs->descripcion}}</div>
                    
                    <div class="opacity-50 titulo text-black">Tipo:  </div>
                    <p class="opacity-100 titulo text-xl ">{{$alburs->tipo->tipo}}</p>  
                </div>
                <div class="col-span-2 flex ml-60 mt-5">
                @if (Route::has('login'))
                    @auth
                        @if(Auth()->user()-> id == $alburs->user_id) 
                            <form action="{{route('alburs.destroy',$alburs->id)}}" id="formulario-eliminar" method="POST">
                            @method('DELETE')
                            @csrf
                            
                                <button type="submit" class="titulo border border-2 border-black rounded-lg p-2 bg-red-400">Eliminar</button>
                            </form>
                        
                            <button wire:click="abrirEdit({{$alburs->id}})" class="titulo border border-2 border-black rounded-lg p-2 ml-3 bg-green-400">Editar</button>
                        @endif
                    @else
                        
                    @endauth
                @endif
                </div>

                <div>
                </div>
            </div>

            
            @endforeach
        </div>

        <img class="bottom-0 right-0 fixed w-40" src="img/12.png" alt="imagenAlbures">

        <div align="center">
            <img class="w-96 conatin-center" src="img/mecoboy.png" alt="">
        </div>
    @if($abrir)
        <div class="grid grid-cols-3 gap-4 ml-96 inset-x-0 top-0 mt-24 fixed">
            <div class="p-5"></div>
            <div class="absolute inset-0 max-w-md">
                <form wire:submit.prevent="guardarAlbur" class=" p-4 text-white rounded-lg bg-yellow-400 ">
                    <div class="mb-10">
                        <label class="black-text font text-black">Albur:</label>
                        <input type="text" placeholder="Titulo de su nuevo albur" wire:model="titulo" class="flex border w-full h-10 text-black rounded-lg caret-pink-500">
                        @error('titulo')<br> <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-10">
                        <label class="black-text font text-black">Describe de que trata tu nuevo albur:</label>
                        <textarea type="text" placeholder="Descripcion del albur" wire:model="descripcion" class="flex w-full h-32 rounded-lg text-black caret-pink-500"></textarea>
                        @error('descripcion')<br> <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-10">
                        <label class="black-text rounded-lg font text-black">Elija el tipo de albur que esta compartiendo:</label>
                        <select wire:model="tipo_id" class="border border-2 border-black text-black rounded-lg"> 
                            <option  disabled selected>Elige el tipo de albur</option>
                            <option value="1">Nombre propio</option>
                            <option value="2">Sexual</option>
                            <option value="3">Grocero o bulgar</option>
                            <option value="4">Comida</option>
                            <option value="5">Lugar</option>
                        </select>
                        @error('tipo_id')<br> <span class="error">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <button wire:click="cerrarEdit()" class=" border p-2 bg-red-500 rounded-lg text-black w-32 h-10">
                            Cancelar
                        </button>
                        <button type="submit" class="border p-2 bg-green-500 rounded-lg text-black w-32 h-10 ">Enviar registro</button>
                        
                    </div>
                    
                <!--footer
                <div class="p-3  mt-2 text-center space-x-4 md:block">
                    <button wire:click="cerrarModal" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                        Cancelar
                    </button>
                    <button type="submit" class="mb-2 md:mb-0 bg-yellow-500 border border-yellow-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-yellow-600">Guardar</button>
                    
                </div>-->
                </form>
            </div>
            <div class="p-5"></div>
        </div>
    @endif
<!-- 

onsubmit="return confirm('Seguro quieres eliminar este albur?')"
        <br><br><br><br>
        <h1 class="border border-2 underline"><a href="/">hola</a> </h1>
        <button class="border border-2 bg-slate-500" ><a href="{{ route('alburs.create') }}">Crear un nuevo algur</a></button>
        -->
        <!-- <button class="border border-2 bg-slate-500" ><a href="{{ route('alburs.create') }}">Crear un nuevo algur</a></button> -->
    </div>
</body>
    


<!--          
                    <div class="col-span-2 flex ml-24">
                        <form action="{{route('alburs.destroy',$alburs->id)}}" onsubmit="return confirm('Seguro?')" method="POST">
                        @method('DELETE')
                        @csrf
                        
                            <button type="submit" class="border border-2 border-black rounded-lg p-2 bg-red-700">Eliminar</button>
                        </form>
                    <button class="border border-2 border-black ml-5 rounded-lg p-2 bg-green-600"><a href="{{ route('alburs.edit',$alburs->id) }}">Editar</a></button> 
                    
                    </div>
    -->
    
</div>