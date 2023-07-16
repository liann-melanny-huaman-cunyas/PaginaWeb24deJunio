<x-app-layout>

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">PROCESOS</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">COLEGIO 24 DE JUNIO</p>
        </div>
        <div class="flex flex-wrap">

          <div class="p-4 md:w-1/3 sm:w-1/2 text-center">
                <a  href="{{ route('listado') }}">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-black-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M8 17l4 4 4-4m-4-5v9"></path>
                            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                          </svg>
                          <h2 class="title-font font-medium text-2xl text-gray-900">VISUALIZAR <br> NOTAS</h2>
                    </div>
                </a>
          </div>

          <div class="p-4 md:w-1/3 sm:w-1/2 text-center">
              <a  href="{{ route('listadonoticias') }}">
                  <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-black-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                          <path d="M8 17l4 4 4-4m-4-5v9"></path>
                          <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                        </svg>
                        <h2 class="title-font font-medium text-2xl text-gray-900">VISUALIZAR <br> NOTICIAS</h2>
                  </div>
              </a>
          </div>

          <div class="p-4 md:w-1/3 sm:w-1/2  text-center">
            <a  href="{{ route('listadocomunicados') }}">
                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-black-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                        <path d="M8 17l4 4 4-4m-4-5v9"></path>
                        <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                      </svg>
                      <h2 class="title-font font-medium text-2xl text-gray-900">VISUALIZAR <br> COMUNICADOS</h2>
                </div>
            </a>
        </div>

        <div class="p-4 md:w-1/3 sm:w-1/2 text-center">
          <a href="{{ route('notas.create') }}">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-black w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
              </svg>
              <h2 class="title-font font-medium text-2xl text-gray-900">SUBIR <br> NOTAS</h2>
            </div>
          </a>
        </div>

        <div class="p-4 md:w-1/3 sm:w-1/2 text-center">
          <a href="{{ route('noticias.create') }}">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-black w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
              </svg>
              <h2 class="title-font font-medium text-2xl text-gray-900">SUBIR <br> NOTICIAS</h2>
            </div>
          </a>
        </div>

        <div class="p-4 md:w-1/3 sm:w-1/2 text-center">
            <a href="{{ route('comunicados.create') }}">
                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-black w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                      <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                      <circle cx="9" cy="7" r="4"></circle>
                      <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                    </svg>
                    <h2 class="title-font font-medium text-2xl text-gray-900">SUBIR <br> COMUNICADOS</h2>
                </div>
            </a>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>
