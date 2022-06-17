<div>
    {{-- Do your work, then step back. --}}

    <button wire:click="abrirEdit({{$alburs->id}})" class="border border-2 border-black ml-5 rounded-lg p-2 bg-green-600">Editar albur</button>


    @if($open)
        <div class="grid grid-cols-3 gap-4">
            <div class="p-5"></div>
            <div class="absolute inset-0 max-w-md">
                <form wire:submit.prevent="guardarAlbur" class=" p-4 text-white rounded-lg bg-sky-900 bg-opacity-50">
                    <div class="mb-10">
                        <label class="black-text font">Albur:</label>
                        <input type="text" placeholder="Titulo de su nuevo albur" wire:model="titulo" class="flex border w-full h-10 text-black rounded-lg caret-pink-500">
                        @error('titulo')<br> <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-10">
                        <label class="black-text font">Describe de que trata tu nuevo albur:</label>
                        <textarea type="text" placeholder="Descripcion del albur" wire:model="descripcion" class="flex w-full h-32 rounded-lg text-black caret-pink-500"></textarea>
                        @error('descripcion')<br> <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-10">
                        <label class="black-text rounded-lg font">Elija el tipo de albur que esta compartiendo:</label>
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
                        <button type="submit" class="border outline-double outline-3 outline-offset-2 outline-white p-2 bg-sky-900 rounded-lg  w-32 h-10 flex">Enviar modificación <span class="material-icons">send</span></button>
                        <button wire:click="cerrarModal1()" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                            Cancelar
                        </button>
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

</div>
