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
                        <h1 class="title-font mb-4 text-2xl font-medium text-gray-900 sm:text-3xl">NOTAS</h1>
                      </div>
                      <div class="mx-auto md:w-2/3 lg:w-1/2">
                        <form action="{{ route('notas.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="-m-2 flex flex-wrap">
                          <div class="w-1/2 p-2">
                            <div class="relative">
                              <label for="name" class="text-sm leading-7 text-gray-600">Curso</label>
                              <div>
                                <select name='curso' class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                  <option selected>Seleccionar curso</option>
                                  <option value="Matematica">Matematica</option>
                                  <option value="Comunicacion">Comunicacion</option>
                                  <option value="Ingles">Ingles</option>
                                  <option value="pfrh">PFRH</option>
                                  <option value="cta">CTA</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="w-1/2 p-2">
                            <div class="relative">
                              <label for="name" class="text-sm leading-7 text-gray-600">Grado</label>
                              <div>
                                <select name='grado' class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                  <option selected>Seleccionar grado</option>
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
                              <label for="email"  class="text-sm leading-7 text-gray-600">Seccion</label>
                              <div class="flex justify-end mt-1">
                                <select name='seccion' class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                  <option selected>Seleccionar seccion</option>
                                  <option value="UNICO">Unico</option>
                                  <option value="A">A</option>
                                  <option value="B">B</option>
                                  <option value="C">C</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="w-1/2 p-2">
                            <div class="relative">
                              <label for="email"  class="text-sm leading-7 text-gray-600">Bimestre</label>
                              <div class="flex justify-end mt-1">
                                <select name='bimestre' class="w-full rounded border border-gray-300 bg-gray-100 bg-opacity-50 px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                  <option selected>Seleccionar bimestre</option>
                                  <option value="primer">Primer</option>
                                  <option value="segundo">Segundo</option>
                                  <option value="tercer">Tercer</option>
                                  <option value="cuarto">Cuarto</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="w-full p-2">
                            <div class="relative">
                              <label for="message" class="text-sm leading-7 text-gray-600">Archivo de notas</label>
                              <input type="file" name="pdf" class=" w-full resize-none   px-3 py-1 text-base leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                            </div>
                          </div>
                          <div class="w-full p-2">
                            <button class="mx-auto flex rounded border-0 bg-black px-8 py-2 text-lg text-white hover:border-2 hover:bg-white hover:text-black focus:outline-none">Cargar notas</button>
                          </div>
                          <div class="mt-8 w-full border-t border-gray-200 p-2 pt-8 text-center"></div>
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