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
                    <section>
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                                <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">TITULO</th>
                                        <th scope="col" class="px-6 py-3">CONTENIDO</th>
                                        <th scope="col" class="px-6 py-3">FECHA</th>
                                        <th scope="col" class="px-6 py-3">IMAGEN</th>
                                        <th scope="col" colspan="2" class="text-center py-3">ACCION</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($comunicados as $comunicado)
                                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                    <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $comunicado->titulo }}</td>
                                    <td class="px-6 py-4">{{ $comunicado->contenido }}</td>
                                    <td class="px-6 py-4">{{ $comunicado->fecha }}</td>
                                    <td class="px-6 py-4">
                                        {{ $comunicado->foto }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('comunicados.destroy', $comunicado->id) }}"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $comunicado->id }}').submit();">Borrar</a>
                                        <form id="delete-form-{{ $comunicado->id }}"
                                            action="{{ route('comunicados.destroy', $comunicado->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button
                                            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                                            onclick="openModal('{{ $comunicado->id }}')">Editar</button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div id="editModal" class="fixed top-0 left-0 flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50 ">
        <div class="bg-white rounded shadow-lg w-1/2">
            <div class="p-4">
                <h2 class="text-lg font-semibold">Editar Comunicado</h2>
                <form id="editForm" action="{{ route('comunicados.update', $comunicado->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <section class="body-font relative text-gray-600">
                        <div class="container mx-auto px-5 py-24">
                            <div class="mb-12 flex w-full flex-col text-center">
                                <h1 class="title-font mb-4 text-2xl font-medium text-gray-900 sm:text-3xl">COMUNICADOS</h1>
                            </div>
                            <div class="-m-2 flex flex-wrap">
                                    <div class="w-1/2 p-2">
                                        <div class="relative">
                                            <label for="titulo" class="text-sm leading-7 text-gray-600">Titulo</label>
                                            <div>
                                                <input name='titulo' value="{{ $comunicado->titulo }}" id="titulo" class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 py-0.5 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 p-2">
                                        <div class="relative">
                                            <label for="contenido" class="text-sm leading-7 text-gray-600">Contenido</label>
                                            <div>
                                                <textarea name='contenido' id="contenido" class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 py-0.5 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $comunicado->contenido }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 p-2">
                                        <div class="relative">
                                            <label for="fecha" class="text-sm leading-7 text-gray-600">Fecha</label>
                                            <div class="flex justify-end mt-1">
                                                <input type="date" name='fecha' value="{{ $comunicado->fecha }}"id="fecha" class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 py-0.5 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 p-2">
                                        <div class="relative">
                                            <label for="foto" class="text-sm leading-7 text-gray-600">Adjuntar imagen</label>
                                            <input type="file" value="{{ $comunicado->foto }}" name="foto" id="foto" class="w-full resize-none mt-2 text-base leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        </div>
                                    </div>

                                </div>
                                <div class="mt-8 flex justify-end">
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Guardar
                                        cambios</button>
                                    <button type="button"
                                        class="ml-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400"
                                        onclick="closeModal()">Cancelar</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
            </form>
    </div>


    <script>
        function openModal(comunicadoId) {
            var modal = document.getElementById('editModal');
            modal.style.display = 'flex';

            // Obtener el formulario y actualizar la acción con el ID de la comunicado
            var form = document.getElementById('editForm');
            form.action = '/comunicados/' + comunicadoId;

            // Realizar petición AJAX para obtener los datos de la comunicado
            axios.get('/comunicados/' + comunicadoId)
                .then(function(response) {
                    var comunicado = response.data;

                    // Asignar los datos de la comunicado a los campos del formulario
                    form.querySelector('input[name="titulo"]').value = comunicado.titulo;
                    form.querySelector('textarea[name="contenido"]').value = comunicado.contenido;
                    form.querySelector('input[name="fecha"]').value = comunicado.fecha;
                    form.querySelector('input[name="foto_actual"]').value = comunicado.foto;
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        function closeModal() {
            var modal = document.getElementById('editModal');
            modal.style.display = 'none';
        }
    </script>

</x-app-layout>
