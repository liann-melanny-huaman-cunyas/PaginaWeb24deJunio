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
                            <th scope="col" class="px-6 py-3">ACCION</th>
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
                                        <a href="{{ route('notas.show', $nota->id) }}" target="_blank">Ver PDF</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('notas.destroy', $nota->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $nota->id }}').submit();">Borrar</a>
                                        <form id="delete-form-{{ $nota->id }}" action="{{ route('notas.destroy', $nota->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
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
</x-app-layout>
