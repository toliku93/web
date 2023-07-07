<div>

    <button class="btn btn-guardar float-right"
            wire:click="$set('open', true)">Crear Nueva Categoria
    </button>

    <x-dialog-modal wire:model="open">

        <x-slot name="title"
                class="text-xl font-semibold text-gray-900">
            Crear Nueva Categoria
            <div class="p-2 bg-white border-b border-gray-200">
            </div>
        </x-slot>

        <x-slot name="content">
            @if ($errors->any())
                <div class="text-red-900  text-xl">
                    <strong>Whoops!</strong> Necesitas llenar todos los campos.<br><br>
                </div>
            @endif
            <div>
                <div class="mb-4 mt-8">
                    <div
                        class="relative rounded-md border border-gray-700 px-3 py-3 shadow-sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600">
                        <label for="name"
                               class="absolute -top-2 left-2 -mt-px inline-block bg-white px-1 text-l font-medium text-black-900 @error('name') text-red-500 @enderror ">Nombre</label>
                        <input type="text"
                               name="name"
                               id="name"
                               wire:model="name"
                               class="block  w-full border-0 p-0 text-black-900 placeholder-gray-500 focus:ring-0 m:text-m">
                    </div>

                    <x-input-error for="name"/>

                </div>

            </div>

            <div class="p-2 bg-white border-b border-gray-200">
            </div>
        </x-slot>

        <x-slot name="footer">

            <div class="mt-1">
                <div class="flex justify-end">


                    <button type="button"
                            class="btn btn-borrar"
                            wire:click="close">Cancelar
                    </button>


                    <button type="submit"
                            wire:click='save'
                            class="btn btn-guardar ml-2">
                        Guardar
                    </button>

                </div>
            </div>

        </x-slot>


    </x-dialog-modal>

</div>
