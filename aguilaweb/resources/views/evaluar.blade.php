<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Evaluar') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h1 class="font-semibold text-xl text-black-800 leading-tight flex justify-center">
                       Evaluar
                    </h1>

                    <br>

{{--                    <form action="{{ route('tractores.update', ['tractore' => $tractores->id]) }}" method="post"--}}
{{--                          enctype="multipart/form-data" id="guardar">--}}
                        @csrf
                        @method('PUT')

                        <div class="space-y-8 divide-y divide-gray-200">

                            <div class="pt-8">

                                <div>
                                    <h3 class="text-md font-bold leading-6 text-gray-900">Evaluar con las 3 opciones.
                                    </h3>
                                </div>


                                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">

                                    <div class="sm:col-span-2">
                                        <div
                                            class="relative rounded-md border border-gray-700 px-3 py-3 shadow-sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600">
                                            <label for="seguro_mexicano"
                                                   class="absolute -top-2 left-2 -mt-px inline-block bg-white px-1 text-l font-medium text-black-900">
                                                Categoria</label>

                                            <input type="text" name="seguro_mexicano" id="seguro_mexicano" readonly
                                                   class="block w-full border-0 p-0 text-black-900 placeholder-gray-500 focus:ring-0 m:text-m">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                    <div
                                        class="relative rounded-md border border-gray-700 px-3 py-3 shadow-sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600">
                                        <label for="tipo"
                                               class="absolute -top-2 left-2 -mt-px inline-block bg-white px-1 text-l font-medium text-black-900">Tipo</label>
                                        <select id="country" name="tipo" autocomplete="tipo"
                                                class="block w-full rounded-md border-black-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 m:text-m"value="{{ old('tipo')}}">
                                            <option>0</option>
                                            <option>50</option>
                                            <option>100</option>
                                        </select>
                                    </div>
                                </div>


                            <div class="pt-5 sm:col-span-4">
                                <div class="flex justify-end">

                                    <a href="{{ route('peoples.indexlivewire') }}"
                                       class="btn btn-borrar">
                                       Cancelar

                                    </a>

                                   <button type= "submit" id="btn-submit" class="btn btn-guardar ml-3">
                                        Guardar
                                    </button>
                                </div>
                            </div>

                    </form>
    </div>
    </div>
    </div>

</x-app-layout>
