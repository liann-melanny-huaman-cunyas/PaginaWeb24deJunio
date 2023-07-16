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
                                        <th scope="col" class="px-6 py-3">CURSO</th>
                                        <th scope="col" class="px-6 py-3">GRADO</th>
                                        <th scope="col" class="px-6 py-3">SECCION</th>
                                        <th scope="col" class="px-6 py-3">BIMESTRE</th>
                                        <th scope="col" class="px-6 py-3">ARCHIVO DE NOTAS</th>
                                        <th scope="col" colspan="2" class="text-center py-3">ACCION</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($notas as $nota)
                                    <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                        <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $nota->curso }}</td>
                                        <td class="px-6 py-4">{{ $nota->grado }}</td>
                                        <td class="px-6 py-4">{{ $nota->seccion }}</td>
                                        <td class="px-6 py-4">{{ $nota->bimestre }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ asset($nota->ruta_pdf) }}" target="_blank">Ver PDF</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('notas.destroy', $nota->id) }}"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $nota->id }}').submit();">Borrar</a>
                                            <form id="delete-form-{{ $nota->id }}"
                                                action="{{ route('notas.destroy', $nota->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                        <td class="px-6 py-4">
                                            <button
                                                class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                                                onclick="openModal('{{ $nota->id }}')">Editar</button>
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
                <h2 class="text-lg font-semibold">Editar Nota</h2>
                <form id="editForm" action="{{ route('notas.update', $nota->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <section class="body-font relative text-gray-600">
                        <div class="container mx-auto px-5 py-24">
                            <div class="mb-12 flex w-full flex-col text-center">
                                <h1 class="title-font mb-4 text-2xl font-medium text-gray-900 sm:text-3xl">NOTAS</h1>
                            </div>
                            <div class="mx-auto md:w-2/3 lg:w-1/2">
                                <div class="-m-2 flex flex-wrap">
                                    <div class="w-1/2 p-2">
                                        <div class="relative">
                                            <label for="curso" class="text-sm leading-7 text-gray-600">Curso</label>
                                            <div>
                                                <select name="curso" id="curso"
                                                    class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                                    <option value="{{ $nota->curso }}"
                                                        selected>{{ $nota->curso }}</option>
                                                    <option value="Comunicacion">Comunicacion</option>
                                                    <option value="Ingles">Ingles</option>
                                                    <option value="PFRH">PFRH</option>
                                                    <option value="CTA">CTA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 p-2">
                                        <div class="relative">
                                            <label for="grado" class="text-sm leading-7 text-gray-600">Grado</label>
                                            <div>
                                                <select name="grado" id="grado"
                                                    class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                                    <option value="{{ $nota->grado }}"
                                                        selected>{{ $nota->grado }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 p-2">
                                        <div class="relative">
                                            <label for="seccion" class="text-sm leading-7 text-gray-600">Seccion</label>
                                            <div class="flex justify-end mt-1">
                                                <select name="seccion" id="seccion"
                                                    class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                                    <option value="{{ $nota->seccion }}"
                                                        selected>{{ $nota->seccion }}</option>
                                                    <option value="Unico">Unico</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2 p-2">
                                        <div class="relative">
                                            <label for="bimestre"
                                                class="text-sm leading-7 text-gray-600">Bimestre</label>
                                            <div class="flex justify-end mt-1">
                                                <select name="bimestre" id="bimestre"
                                                    class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                                    <option value="{{ $nota->bimestre }}"
                                                        selected>{{ $nota->bimestre }}</option>
                                                    <option value="Primer">Primer</option>
                                                    <option value="Segundo">Segundo</option>
                                                    <option value="Tercer">Tercer</option>
                                                    <option value="Cuarto">Cuarto</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full p-2">
                                        <div class="relative">
                                            <label for="pdf"
                                                class="text-sm leading-7 text-gray-600">Archivo de notas</label>
                                            <input type="file" name="pdf" id="pdf"
                                                class="w-full resize-none px-3 py-1 text-base leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="mt-4 flex justify-end">
                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Guardar
                            cambios</button>
                        <button type="button"
                            class="ml-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400"
                            onclick="closeModal()">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openModal(notaId) {
            var modal = document.getElementById('editModal');
            modal.style.display = 'flex';
    
            // Obtener el formulario y actualizar la acción con el ID de la nota
            var form = document.getElementById('editForm');
            form.action = '/notas/' + notaId;
    
            // Realizar petición AJAX para obtener los datos de la nota
            axios.get('/notas/' + notaId)
                .then(function(response) {
                    var nota = response.data;
    
                    // Asignar los datos de la nota a los campos del formulario
                    form.querySelector('select[name="curso"] option[value="' + nota.curso + '"]').selected = true;
                    form.querySelector('select[name="grado"] option[value="' + nota.grado + '"]').selected = true;
                    form.querySelector('select[name="seccion"] option[value="' + nota.seccion + '"]').selected = true;
                    form.querySelector('select[name="bimestre"] option[value="' + nota.bimestre + '"]').selected = true;
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    
        function closeModal() {
            var modal = document.getElementById('editModal');
            modal.style.display = 'none';
        }
    
        function closeModalOnReload() {
            var modal = document.getElementById('editModal');
            modal.style.display = 'none';
        }
    
        window.addEventListener('DOMContentLoaded', function() {
            closeModalOnReload();
        });
    </script>
</x-app-layout>
