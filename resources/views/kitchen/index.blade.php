<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pedidos pendientes') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="space-y-2">
                        <div class="grid grid-cols-5 font-bold">
                            <div>Descripción</div>
                            <div class="text-center">Notas</div>
                            <div class="text-center">Cantidad</div>
                            <div class="text-center">Mesa</div>
                            <div class="text-center">Acciones</div>
                        </div>

                        <div class="grid grid-cols-5">
                            <div>Hamburguesa con queso</div>
                            <div class="text-center">Sin salsa de tomate</div>
                            <div class="text-center">2</div>
                            <div class="text-center">Mesa 2</div>
                            <div class="text-center">
                               <button class="bg-blue-950 text-white px-5 rounded">Listo</button>
                            </div>
                        </div>

                        <div class="grid grid-cols-5">
                            <div>Hamburguesa sencilla</div>
                            <div class="text-center">Sin cebolla</div>
                            <div class="text-center">3</div>
                            <div class="text-center">Mesa 7</div>
                            <div class="text-center">
                                <button class="bg-blue-950 text-white px-5 rounded">Listo</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="font-bold text-lg">Últimos pedidos atendidos</h2>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="space-y-2">
                        <div class="grid grid-cols-5 font-bold">
                            <div>Descripción</div>
                            <div class="text-center">Notas</div>
                            <div class="text-center">Cantidad</div>
                            <div class="text-center">Mesa</div>
                            <div class="text-center"></div>
                        </div>

                        <div class="grid grid-cols-5">
                            <div>Hamburguesa con queso</div>
                            <div class="text-center">Sin salsa de tomate</div>
                            <div class="text-center">2</div>
                            <div class="text-center">Mesa 2</div>
                            <div class="text-center">
                               ✅
                            </div>
                        </div>

                        <div class="grid grid-cols-5">
                            <div>Hamburguesa sencilla</div>
                            <div class="text-center">Sin cebolla</div>
                            <div class="text-center">3</div>
                            <div class="text-center">Mesa 7</div>
                            <div class="text-center">
                                ✅
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
