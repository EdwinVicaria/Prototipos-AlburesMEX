
<div>

<title>AlburesMEX</title>
<link rel="shortcut icon"
        href="img/icono.png" />


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
                                @if(Auth()->user())
                                <a href="{{route('dashboard')}}" class="py-4 tituloPrincipal px-2 text-black font-semibold hover:text-blue-500 transition duration-300">REGRESAR</a>
                                @else
                                <a href="{{url('/')}}" class="py-4 px-2 text-black tituloPrincipal font-semibold hover:text-blue-500 transition duration-300">PAGINA PRINCIPAL</a>
                                @endif
                                <a href="{{route('conocermas')}}" class="py-4 px-2 tituloPrincipal text-black font-semibold hover:text-blue-500 transition duration-300">DICCIONARIO DE ALBURES</a>
                                <!-- <a href="{{route('historia')}}" class="py-4 px-2 text-black font-semibold hover:text-blue-500 transition duration-300">HISTORIA</a> -->
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
                                            <a href="{{ route('login') }}" class="py-2 px-2 tituloPrincipal font-medium text-black rounded hover:bg-blue-500 hover:text-white transition duration-300">INICIAR SESION</a>
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
                        @if(Auth()->user())
                        <li><a href="{{route('dashboard')}}" class="tituloPrincipal block text-sm px-2 py-4 text-black hover:bg-blue-500 hover:text-white transition duration-300">REGRESAR</a></li>
                        @else
                        <li><a href="{{url('/')}}" class="tituloPrincipal block text-sm px-2 py-4 text-black hover:bg-blue-500 hover:text-white transition duration-300">PAGINA PRINCIPAL</a></li>
                        @endif
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
            
                        <input type="search" class="input " placeholder="Ingrese su albur a buscar" wire:model="buscador">

                        <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <button class="px-3 py-2 bg-yellow-300" wire:click="buscar()">Buscar</button>
                </div>

                <button disabled style="float: right" type="button" class="ml-96 fixed text-black bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800 inline-flex items-center">
                <span class="material-icons">leaderboard</span> <br>
                    <select name="idioma" class="border-black text-black rounded-lg     "> 
                        <option  disabled selected>Escala censura</option>
                        <option value="1">Extremo</option>
                        <option value="2">Fuerte</option>
                        <option value="3">Intermedio</option>
                        <option value="4">Más o menos</option>
                        <option value="5">Tranquilo</option>
                    </select>
                </button>

    <!-- PARTE DEL BOTON PARA CREAR UN NUEVO ALBUR IMPLEMENTADO CON UN COMPONENTE LIVEWIRE -->

            
                
        </div>


        @if (session('mensaje'))
        <div class="text-center">
            <p class="font text-4xl text-black">{{session('mensaje')}}</p>
        </div>
        @endif

        <div class="grid grid-cols-4 gap-4 pl-16 pr-16 py-10 ">
            @foreach ($alburs as $alburs)

            
            <div class="js col-span-2 border border-yellow-600 rounded-lg p-2  mt-10">
                <div class="grid grid-cols-3 gap-4 text-black">
                    <div class="col-span-2  textoAll text-black">Albur:</div>
                    <div></div>
                    <div class="col-span-3 text-center textoAll font-black text-2xl ">{{$alburs->titulo}}</div>
                    
                    <div class="col-span-2 textoAll  text-black">Descripción:</div>
                    <div></div>
                    <div class="col-span-3 text-center textoAll text-xl">{{$alburs->descripcion}}</div>
                    
                    <div class=" textoAll text-black">Tipo:  </div>
                    <p class="opacity-100 textoAll text-xl ">{{$alburs->tipo->tipo}}</p>  
                </div>
                <div class="col-span-2 flex ml-60 mt-5">
                @if (Route::has('login'))
                    @auth
                        @if(Auth()->user()-> id == $alburs->user_id) 
                            <!-- <form action="" id="formulario-eliminar" method="POST">
                            @method('DELETE')
                            @csrf
                            
                                
                            </form> -->
                            <button wire:click.prevent="deleteConfirmation({{$alburs->id}})" class="tituloPrincipal border border-2 border-black rounded-lg p-1 bg-red-400 p-2">Eliminar<span class="material-icons">delete</span></button>
                            <button wire:click="abrirEdit({{$alburs->id}})" class="tituloPrincipal border border-2 border-black rounded-lg p-2 ml-3 bg-green-400">Editar<span class="material-icons">mode</span></button>
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
                        <label class="black-text tituloPrincipal text-black">Albur:</label>
                        <input type="text" placeholder="Titulo de su nuevo albur" wire:model="titulo" class="flex border w-full h-10 text-black rounded-lg caret-pink-500">
                        @error('titulo')<br> <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-10">
                        <label class="black-text tituloPrincipal text-black">Describe de que trata tu nuevo albur:</label>
                        <textarea type="text" placeholder="Descripcion del albur" wire:model="descripcion" class="flex w-full h-32 rounded-lg text-black caret-pink-500"></textarea>
                        @error('descripcion')<br> <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-10">
                        <label class="black-text rounded-lg tituloPrincipal text-black">Elija el tipo de albur que esta compartiendo:</label>
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
                    
                    <div class="flex">
                        <button wire:click="cerrarEdit()" class=" border p-2 bg-red-500 rounded-lg text-black w-32 h-10 flex tituloPrincipal">
                            Cancelar<span class="material-icons ml-1">block</span>
                        </button>
                        <button type="submit" class="border p-2 bg-green-500 rounded-lg text-black w-36 h-10 flex tituloPrincipal">Enviar registro <span class="material-icons">send</span></button>
                        
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

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 

    <script>

        window.addEventListener('show-delete-confirmation', event=> {
            Swal.fire({
                title: 'Estas seguro?',
                text: "Se eliminara permanentemente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ahuevo prro!'
                }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed')
                }
            })
        });

        window.addEventListener('deleteAlbur', event=> {
            Swal.fire(
                'Eliminado!',
                'Tu albur ha sido eliminado.',
                'success'
            )
        });

        window.addEventListener('crearExitoso', event=> {
            Swal.fire(
                'Registrado!',
                'Tu nuevo albur ha sido agregado exitosamente.',
                'success'
            )
        });

        window.addEventListener('editarExitoso', event=> {
            Swal.fire(
                'Editado!',
                'Tu albur ha sido editado existosamente.',
                'success'
            )
        });

       

    
    </script>
@endsection
    
</div>





