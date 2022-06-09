<x-slot name="header">
    <h1 class="text-gray-900">Crud Prestamos</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3 fas fa-file-medical" >Nuevo</button>
            @if($modal)
                @include('livewire.crear-pago-dpi')
            @endif


            <table class="table-fixed w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">DPI</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Fecha de pago</th>
                        <th class="px-4 py-2">Monto</th>
                        <th class="px-4 py-2">Estado</th>
                        <th class="px-4 py-2">Ornato</th>
                        <th class="px-4 py-2">Usuario</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pago as $pagos)
                    <tr>
                        <td class="border px-4 py-2">{{$pagos->id}}</td>
                        <td class="border px-4 py-2">{{$pagos->dpi}}</td>
                        <td class="border px-4 py-2">{{$pagos->nombre}}</td>
                        <td class="border px-4 py-2">{{$pagos->fechaPago}}</td>
                        <td class="border px-4 py-2">{{$pagos->monto}}</td>
                        @if($pagos->estado == 0)
                        <td class="border px-4 py-2">Pendiente</td>
                        @elseif($pagos->estado == 1)
                        <td class="border px-4 py-2">Canselado</td>
                        @endif
                        <td class="border px-4 py-2">{{$pagos->ornato_id}}</td>
                        <td class="border px-4 py-2">{{$pagos->user_id}}</td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$pagos->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                            <button wire:click="borrar({{$pagos->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>