<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <button class="border-black border-2 bg-yellow-500 bg-opacity-50 p-3 rounded-full tituloPrincipal" wire:click="abrirModal()">CREA UN NUEVO ALBUR!!</button>

@if($open)
        <div class="grid grid-cols-3 gap-4">
            <div class="p-5"></div>
            <div class="absolute -left-96  max-w-md">
                <form wire:submit.prevent="submit" class=" p-4 text-white rounded-lg bg-yellow-400 ">
                    @csrf

                    <div class="mb-10">
                        <label class="text-black tituloPrincipal">Albur:</label>
                        <input type="text" placeholder="Ingrese su nuevo albur" wire:model="titulo" class="flex border w-full h-10 text-black rounded-lg caret-pink-500">
                    </div>
                    <div class="mb-10">
                        <label class="text-black tituloPrincipal">Describe de que trata tu nuevo albur:</label>
                        <textarea type="text" placeholder="Descripcion del albur" wire:model="descripcion" class="flex w-full h-32 rounded-lg text-black caret-pink-500"></textarea>
                    </div>
                    <div class="mb-10">
                        <label class="text-black rounded-lg tituloPrincipal">Elija el tipo de albur que esta compartiendo:</label>
                        <select wire:model="tipo_id" class="border border-2 border-black text-black rounded-lg"> 
                            <option  disabled selected>Elige el tipo de albur</option>
                            <option value="">Elige el tipo de albur</option>
                            <option value="1">Nombre propio</option>
                            <option value="2">Sexual</option>
                            <option value="3">Grocero o bulgar</option>
                            <option value="4">Comida</option>
                            <option value="5">Lugar</option>
                        </select>
                    </div>

                    <input type="hidden" name="" id="" wire:model="valor">
                    
                    <div class="flex">
                        <button wire:click="cerrarModal1()" class="border p-2 bg-red-500 rounded-lg text-black w-32 h-10 flex tituloPrincipal">
                            Cancelar<span class="material-icons ml-1">block</span>
                        </button>
                        <button type="submit" class="border p-2 bg-green-500 rounded-lg text-black w-36 h-10 flex text-center tituloPrincipal">Enviar albur<span class="material-icons ml-1">send</span></button>
                        
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



<!-- <script> 
    Livewire.on('cerrar', postId => {
        $('#modal1').modal('close');
    })
</script>-->



</div>
