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
                            <th scope="col" class="px-6 py-3">ACCION</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($noticias as $noticia)
                                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                    <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $noticia->titulo }}</td>
                                    <td class="px-6 py-4 ">{{ $noticia->contenido }}</td>
                                    <td class="px-6 py-4">{{ $noticia->fecha }}</td>
                                    <td class="px-6 py-4">
                                        {{ $noticia->foto }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('noticias.destroy', $noticia->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $noticia->id }}').submit();">Borrar</a>
                                        <form id="delete-form-{{ $noticia->id }}" action="{{ route('noticias.destroy', $noticia->id) }}" method="POST" style="display: none;">
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
