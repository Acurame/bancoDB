<x-slot name="header">
    <h1 class="text-gray-900">Crud Prestamos</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3 fas fa-file-medical" >Nuevo</button>
            @if($modal)
                @include('livewire.create-ornato')
            @endif


            <table class="table-fixed w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">numero ornato</th>
                        <th class="px-4 py-2">monto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ornatos as $ornato)
                    <tr>
                        <td class="border px-4 py-2">{{$ornato->id}}</td>
                        <td class="border px-4 py-2">{{$ornato->numero_ornato}}</td>
                        <td class="border px-4 py-2">{{$ornato->monto}}</td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$ornato->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                            <button wire:click="borrar({{$ornato->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>