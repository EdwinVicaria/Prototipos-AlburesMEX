<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Perfil de usuario
        </h2>
    </x-slot> -->
<style>
    .titulo{
            font-family: 'Mali', cursive;
        }
</style>
    <div class="w-36 h-36 rounded-full bg-white relative mx-auto">
        <button wire:click="abrirModal" class="absolute bottom-0 right-0"><span class="material-icons">outbox</span></button>
        <img src="{{$urlfoto}}" alt="foto de perfil" class="object-cover rounded-full w-36 h-36">
    </div>

    
    <!-- <h1 class="font-black titulo">Datos del perfil: </h1> -->

    <div class="mt-3">
        <!-- <h3 class="text-2xl font-semibold mb-3 titulo">Nombre del usuario: </h3> -->
        <h2 class="text-2xl font-semibold mb-3 text-center pl-5 titulo">{{$perfil->name}}</h2>

        <h2 class="text-2xl font-semibold mb-3 pl-5 titulo">{{$perfil->email}}</h2>
        <h2 class="font-semibold mb-3 pl-5 titulo">Creado: {{$perfil->created_at}}</h2>
    </div>
    
    <div class="grid grid-cols-3">
        <div></div>
        <div></div>
        <div class="mt-8">
            <button class="border border-2 bg-green-400 rounded-full p-3 titulo" wire:click="abrirModal2()">Editar perfil <span class="material-icons"><span class="material-icons">drive_file_rename_outline</span></span></button>
        </div>
    </div>
    <div class="mt-10"></div>
    
    
    @if($open2)
    <div class="p-6 max-w-sm bg-gray-400 fixed top-44 bottom-44 ">
        <ul class="grid grid-cols-4 gap-2">
            @if($editarEmail)
            <li class="col-span-3">
            <input type="text" wire:model="email" wire:blur="guardarEmail">
            @error('email')<br> <span class="error">{{ $message }}</span> @enderror
            </li>
            @else
            <input class="col-span-3" value="{{$perfil->email}}"></input>
            @endif
            <li>
                <button class="bg-green-400 rounded-lg" wire:click="editarEmail">editar correo</button>
            </li>
            @if($editarName)
            <li class="col-span-3">
                <input type="text" wire:model="name" wire:blur="guardarName">
        @error('name')<br> <span class="error">{{ $message }}</span> @enderror
            </li>
            @else
            <input class="col-span-3" value="{{$perfil->name}}"></input>
            @endif
            <li>
                <button class="bg-green-400 rounded-lg" wire:click="editarName" >Editar Nombre</button>
            </li>
        </ul>
        <button class="border border-2 bg-red-500 p-2 rounded-lg mt-5" wire:click="cerrarModal2()">Cerrar</button>
        <button class="border border-2 bg-green-400 p-2 rounded-lg mt-5" wire:click="cerrarModal2()">Guardar</button>
    </div>
    @endif

    


    <!-- form -->
    @if($open)
                    <div class="transition-opacity ease-in-out delay-150 animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover" id="modal-id">
                        <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
                        <div class="w-full  max-w-lg px-12 py-10 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
                            <!--content-->
                            <h3 class="text-2xl mb-3">Selecciona tu foto de perfil</h3>
                            <form wire:submit.prevent="save">
                                <div>
                                    <!--body-->

                                    <div class="flex items-center space-x-6">
                                        <div class="shrink-0">
                                            @if ($photo)
                                            <img src="{{ $photo->temporaryUrl() }}" class="h-16 w-16 object-cover rounded-full">
                                            @else
                                            <img class="h-16 w-16 object-cover rounded-full" src="{{$urlfoto}}" alt="foto por defecto" />
                                            @endif
                                            
                                        </div>
                                        <label class="block">
                                            <span class="sr-only">Choose profile photo</span>
                                            <input type="file" wire:model="photo" class="block w-full text-sm text-slate-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-yellow-300 file:text-yellow-700
                                        hover:file:bg-yellow-100
                                        " />
                                        </label>

                                        @error('photo') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <!--footer-->
                                    <div class="flex gap-4  mt-5 justify-end">
                                        <button wire:click="cerrarModal">Cancelar</button>
                                        <button>Listo</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
</div>
