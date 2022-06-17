<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Perfil de usuario
        </h2>
    </x-slot> -->

    <div class="w-36 h-36 rounded-full bg-white relative mx-auto">
        <button wire:click="abrirModal" class="absolute bottom-0 right-0"><span class="material-icons">outbox</span></button>
        <img src="{{$urlfoto}}" alt="foto de perfil" class="object-cover rounded-full w-36 h-36">
    </div>


    <h1 class="font-black">Datos del perfil: </h1>

    <div class="flex">
        <h3 class="text-2xl font-semibold mb-3 ">Nombre del usuario: </h3>
        <h2 class="text-2xl font-semibold mb-3 text-center pl-5">{{$perfil->name}}</h2>
    </div>
    
    <div class="grid grid-cols-3">
        <div></div>
        <div></div>
        <div class="">
            <button class="border border-2 bg-red-500 rounded-full p-3 " wire:click="abrirModal2()">Editar perfil <span class="material-icons"><span class="material-icons">drive_file_rename_outline</span></span></button>
        </div>
    </div>
    
    
    @if($open2)
    <ul class="grid grid-cols-4 gap-2">
        @if($editarEmail)
        <li class="col-span-3">
        <input type="text" wire:model="email" wire:blur="guardarEmail">
        @error('email')<br> <span class="error">{{ $message }}</span> @enderror
        </li>
        @else
        <li class="col-span-3">{{$perfil->email}}</li>
        @endif
        <li>
            <button wire:click="editarEmail">editar correo</button>
        </li>
        @if($editarName)
        <li class="col-span-3">
            <input type="text" wire:model="name" wire:blur="guardarName">
    @error('name')<br> <span class="error">{{ $message }}</span> @enderror
        </li>
        @else
        <li class="col-span-3">{{$perfil->name}}</li>
        @endif
        <li>
            <button wire:click="editarName" >Editar Nombre</button>
        </li>
    </ul>
    <button class="border border-2 bg-border-red" wire:click="cerrarModal2()">cerrar</button>
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
