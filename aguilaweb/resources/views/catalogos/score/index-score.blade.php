<div wire:init="loadPeople">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Tipo de Remolques') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="sm:flex sm:items-center">


                            <div class="sm:flex-auto">
                                <h1 class="text-xl font-semibold text-gray-900">Catalogo Tipo de Remolques</h1>
                                <p class="mt-2 text-sm text-gray-700">Lista de Tipo de Remolques</p>
                            </div>


                            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">

                                {{--                                <button x-data="{}" x-on:click="window.livewire.emitTo('emergencia-modal', 'show')"--}}
                                {{--                                        class="mr-4 inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">--}}
                                {{--                                    Crear Nueva Ruta--}}
                                {{--                                </button>--}}

                            </div>

                        </div>

                        <br>

                        <x-table>


                            <div class="px-6 py-4 flex items-center bg-gray-100">

                                <div class="flex items-center pr-4">
                            <span class="float-left">
                                     Mostrar
                                </span>

                                    <select wire:model="cantidad"
                                            class="mx-2 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>

                                <div class="flex items-center mr-auto">
                            <span class="float-none">
                                     <x-input type="text"
                                              wire:model="search"></x-input>
                                </span>
                                </div>

                                <div class="flex items-center mr-2">
                                    @livewire('create-tipo')
                                </div>

                                {{--                                <div class="flex items-center">--}}
                                {{--                                    <a href="{{ route('rutas.archive') }}"--}}
                                {{--                                       class="btn-guardar">--}}
                                {{--                                        Archivados/Borrados--}}
                                {{--                                    </a>--}}
                                {{--                                </div>--}}

                            </div>


                            <table class="min-w-full divide-y divide-gray-300">

                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="cursor-pointer py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6"
                                        wire:click="order('tipo')">
                                        Tipo de Remolque

                                        {{--SORT--}}
                                        @if($sort === 'tipo')
                                            @if($direction === 'asc')
                                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                            @else
                                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                            @endif
                                        @else
                                            <i class="fas fa-sort float-right mt-1"></i>
                                        @endif

                                    </th>


                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        {{--ABRIR--}}
                                    </th>


                                </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach($people as $item)
                                    <tr>
                                        <td class="ml-4 py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="font-medium text-gray-900">{{ $item->name }}
                                            </div>

                                        </td>

                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <a class="btn btn-editar"
                                               wire:click="editar({{$item}})">
                                                <i class="fas fa-edit mr-1"></i> Editar
                                            </a>

                                            <a class="btn btn-borrar ml-2"
                                               wire:click="$emit('borra', {{$item->id}} )">
                                                <i class="fas fa-trash mr-1"></i> Borrar
                                            </a>

                                        </td>

                                    </tr>
                                @endforeach
                                <!-- More people... -->
                                </tbody>
                            </table>


                            @if(count($peoples))
                                <table class="min-w-full divide-y divide-gray-300">
                                </table>

                                @if($peoples->hasPages())
                                    <div class="px-6 py-4 bg-gray-50">
                                        {!! $peoples->links() !!}
                                    </div>
                                @endif

                            @else
                                <div class="text-red-900 px-6 py-4">
                                    No existen registros con esa informacion.
                                </div>
                            @endif

                        </x-table>


                    </div>

                </div>
            </div>
        </div>
    </div>

{{--    <x-dialog-modal wire:model="open_editar">--}}


{{--        <x-slot name="title"--}}
{{--                class="text-xl font-semibold text-gray-900">--}}

{{--            Editar Tipo de Remolque--}}

{{--            <div class="p-2 bg-white border-b border-gray-200">--}}
{{--            </div>--}}
{{--        </x-slot>--}}

{{--        <x-slot name="content">--}}

{{--            @if ($errors->any())--}}
{{--                <div class="text-red-900  text-xl">--}}
{{--                    <strong>Whoops!</strong> Necesitas llenar todos los campos.<br><br>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div>--}}
{{--                <div class="mb-4 mt-8">--}}
{{--                    <div--}}
{{--                        class="relative rounded-md border border-gray-700 px-3 py-3 shadow-sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600">--}}
{{--                        <label for="tipo"--}}
{{--                               class="absolute -top-2 left-2 -mt-px inline-block bg-white px-1 text-l font-medium text-black-900 @error('tipo') text-red-500 @enderror ">Tipo de Remolque</label>--}}
{{--                        <input type="text"--}}
{{--                               name="tipo"--}}
{{--                               id="tipo"--}}
{{--                               wire:model="tipo_remolque.tipo"--}}
{{--                               class="block  w-full border-0 p-0 text-black-900 placeholder-gray-500 focus:ring-0 m:text-m">--}}
{{--                    </div>--}}

{{--                    <x-input-error for="tipo"/>--}}

{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="p-2 bg-white border-b border-gray-200">--}}
{{--            </div>--}}
{{--        </x-slot>--}}

{{--        <x-slot name="footer">--}}

{{--            <div class="mt-1">--}}
{{--                <div class="flex justify-end">--}}


{{--                    <button type="button"--}}
{{--                            class="btn btn-borrar"--}}
{{--                            wire:click="$set('open_editar', false)">--}}
{{--                        Cancelar--}}
{{--                    </button>--}}


{{--                    <button type="submit"--}}
{{--                            wire:click="update"--}}
{{--                            class="btn btn-guardar ml-2">--}}
{{--                        Guardar--}}
{{--                    </button>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </x-slot>--}}


{{--    </x-dialog-modal>--}}


</div>

