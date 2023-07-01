<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap">
            <div class="w-1/6 p-2">
                <a href="{{ route('dashboard') }}" class="font-semibold text-xl bgtext-gray-800 leading-tight">
                        Registro de Notas
                </a>
            </div>
            <div class="w-1/6 p-2">
                <a href="{{ route('listado') }}" class="font-semibold text-xl bgtext-gray-800 leading-tight">
                        Listado de Notas
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
                            <th scope="col" class="px-6 py-3">ARCHIVO DE NOTAS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">Apple MacBook Pro 17"</th>
                            <td class="px-6 py-4">Silver</td>
                            <td class="px-6 py-4">Laptop</td>
                            <td class="px-6 py-4">$2999</td>
                          </tr>
                          <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">Microsoft Surface Pro</th>
                            <td class="px-6 py-4">White</td>
                            <td class="px-6 py-4">Laptop PC</td>
                            <td class="px-6 py-4">$1999</td>
                          </tr>
                          <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">Magic Mouse 2</th>
                            <td class="px-6 py-4">Black</td>
                            <td class="px-6 py-4">Accessories</td>
                            <td class="px-6 py-4">$99</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </section>
                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>