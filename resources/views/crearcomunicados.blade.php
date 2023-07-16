<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-wrap">
                <div class="w-1/6 p-2">
                    <a href="{{ route('dashboard') }}" class="font-semibold text-xl text-gray-800 leading-tight">
                            Procesos
                    </a>
                </div>
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="body-font relative text-gray-600">
                        <div class="container mx-auto px-5 py-24">
                        <div class="mb-12 flex w-full flex-col text-center">
                            <h1 class="title-font mb-4 text-2xl font-medium text-gray-900 sm:text-3xl">COMUNICADOS</h1>
                        </div>
                        <div class="mx-auto md:w-2/3 lg:w-1/2">
                            <form action="{{ route('comunicados.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="-m-2 flex flex-wrap">
                                <div class="w-1/2 p-2">
                                    <div class="relative">
                                        <label for="titulo" class="text-sm leading-7 text-gray-600">Titulo</label>
                                        <div>
                                            <input name='titulo' id="titulo" class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 py-0.5 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/2 p-2">
                                    <div class="relative">
                                        <label for="contenido" class="text-sm leading-7 text-gray-600">Contenido</label>
                                        <div>
                                            <textarea name='contenido' id="contenido" class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 py-0.5 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/2 p-2">
                                    <div class="relative">
                                        <label for="fecha" class="text-sm leading-7 text-gray-600">Fecha</label>
                                        <div class="flex justify-end mt-1">
                                            <input type="date" name='fecha' id="fecha" class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 py-0.5 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/2 p-2">
                                    <div class="relative">
                                        <label for="foto" class="text-sm leading-7 text-gray-600">Adjuntar imagen</label>
                                        <input type="file" name="foto" id="foto" class="w-full resize-none mt-2 text-base leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                    </div>
                                </div>
                                <div class="w-full p-2">
                                    <button class="mx-auto flex rounded border-0 bg-black px-8 py-2 text-lg text-white hover:border-2 hover:bg-white hover:text-black focus:outline-none">Cargar comunicados </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </section>
            </div>
            </div>
        </div>
    </div>

</x-app-layout>
