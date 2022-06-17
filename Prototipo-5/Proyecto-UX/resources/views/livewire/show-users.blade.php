<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    mostrar usuarios

    <div>
        <input type="text" wire:model="buscador">
        <button class="px-3 py-2 bg-yellow-300" wire:click="buscar()">Buscar</button>
    </div>
    {{$buscador}}

    <table class="table-auto">
        <thead>
            <tr>
                <th>nombre</th>
                <th>correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
