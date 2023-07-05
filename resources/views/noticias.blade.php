<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>24deJunio</title>
</head>
<body>
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="{{ route('inicio') }}" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="{{ asset('imagenes/LOGO.png') }}" alt="24deJunio" />
                </a>
            </div>
            <div class="hidden pb-6 lg:flex lg:gap-x-12">
                <a href="{{ route('inicio') }}" class="text-sm font-semibold leading-6 pt-28 text-gray-900">Inicio</a>
                <a href="{{ route('conocenos') }}" class="text-sm font-semibold leading-6 pt-28 text-gray-900">Conócenos</a>
                <a href="{{ route('comunicados') }}" class="text-sm font-semibold leading-6 pt-28 text-gray-900">Comunicados</a>
                <a href="{{ route('noticias') }}" class="text-sm font-semibold leading-6 pt-28 text-gray-900">Noticias</a>
                <a href="{{ route('contactenos') }}" class="text-sm font-semibold leading-6 pt-28 text-gray-900">Contactenos</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="{{ route('inicio') }}" class="text-sm font-semibold leading-6 text-gray-900">24Intranet <span aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
        <div class=" bg-black px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
            <div class="flex">
                <p class="text-sm leading-6 text-white">
                <strong class="font-semibold">ULTIMOS COMUNICADOS</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>Se cobrara s/15 soles por los sombreros.
                </p>
            </div>
        </div>
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="{{ route('inicio') }}" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                        <a href="{{ route('inicio') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Inicio</a>
                        <a href="{{ route('conocenos') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Conócenos</a>
                        <a href="{{ route('comunicados') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Comunicados</a>
                        <a href="{{ route('noticias') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Noticias</a>
                        <a href="{{ route('contactenos') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contactenos</a>
                        </div>
                        <div class="py-6">
                        <a href="{{ route('inicio') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">24Intranet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
      <div class="container mx-auto px-5">
          <div class="py-10 text-center">
              <h1 class="title-font text-3xl font-medium text-gray-900 sm:text-6xl">NOTICIAS</h1>
          </div>
      </div>
      <div class="mr-auto mt-10 flex justify-end lg:mr-32">
          <div class="mb-4 flex">
              <a class="0 flex-grow border-b-2 border-black px-5 py-2 text-lg text-black">Todos</a>
              <a class="flex-grow border-b-2 border-gray-300 px-5 py-2 text-lg">2023</a>
              <a class="flex-grow border-b-2 border-gray-300 px-5 py-2 text-lg">2024</a>
              <a class="flex-grow border-b-2 border-gray-300 px-5 py-2 text-lg">2025</a>
          </div>
      </div>
      <div class="my-12 flex justify-start px-6 lg:my-10 lg:ml-28">
          <div class="mb-6 w-full">
              <h1 class="title-font mb-2 text-2xl font-medium lg:text-4xl">
                  <span class="text-black">Noticias</span>
                  <span class="ml-5 text-white lg:ml-2">2023</span>
              </h1>
              <div class="-mt-12 ml-40 h-10 w-20 rounded bg-black lg:ml-36 lg:w-24"></div>
          </div>
      </div>
      <div class="-m-4 flex flex-wrap justify-center">
        @foreach ($noticias as $noticia)
        <div class="-mt-12 p-2 sm:mt-0 md:w-1/2 lg:-mr-20 xl:w-1/3">
          <div class="-mb-12 rounded-lg p-12">
            <img class="mb-6 h-40 w-full rounded object-cover object-center" src="{{ str_replace(' ', '%20', asset($noticia->foto)) }}" alt="{{ $noticia->titulo }}" />
            <h3 class="title-font text-xs font-medium tracking-widest text-black">Publicado el {{ $noticia->fecha }}</h3>
            <h2 class="title-font my-4 text-lg font-medium text-gray-900">{{ $noticia->titulo }}</h2>
            <p class="text-base leading-relaxed">{{ $noticia->contenido }}</p>
            <div>
              <a class="mt-4 inline-flex items-center text-black">Leer más
                <svg class="ml-2 h-4 w-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      @endforeach
      
      </div>
  </section>

    <footer class="bg-white" aria-labelledby="footer-heading">
        <div>
            <p class="-mb-4 flex items-center justify-center p-6">
                <strong>
                <span class="mr-4">Empecemos juntos</span>
                </strong>
            </p>
        </div>

        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />

        <div class="mx-auto max-w-7xl  lg:px-20 lg:py-16">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="flex justify-center space-y-8 xl:col-span-1">
                    <a href="./index.html" class="tracking-relaxed transform text-lg font-bold tracking-tighter text-black transition duration-500 ease-in-out lg:pr-8">
                    <img src="{{ asset('imagenes/LOGO.png') }}" class="mr-3 h-8" alt="LOGO" />
                    </a>
                </div>
                <div class="pl-4 mt-8 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0 ">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-xs font-semibold uppercase tracking-wider text-black">Paginas</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                    <li>
                                    <a href="{{ route('inicio') }}" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Inicio </a>
                                    </li>
                                    <li>
                                    <a href="{{ route('conocenos') }}" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Conocenos </a>
                                    </li>
                                    <li>
                                    <a href="{{ route('comunicados') }}" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Comunicados </a>
                                    </li>
                                    <li>
                                    <a href="{{ route('noticias') }}" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Noticias </a>
                                    </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-xs font-semibold uppercase tracking-wider text-black">Contactenos</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                <a href="{{ route('contactenos') }}" class="text-sm font-normal text-gray-500 hover:text-gray-900"> Direccion </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hidden md:grid md:grid-cols-1 lg:justify-end">
                        <div class="mt-8 w-full md:-mt-8">
                            <div class="mt-8 lg:justify-end xl:mt-8">
                                <h3 class="text-xs font-semibold uppercase tracking-wider text-black">Consultas</h3>
                                <div class="inline-flex list-none items-center gap-2 lg:ml-auto">
                                <form action="" method="post" id="revue-form" name="revue-form" target="_blank" class="border2 mt-4 transform rounded-xl bg-gray-50 p-1 transition duration-500 ease-in-out sm:flex sm:max-w-lg">
                                    <div class="revue-form-group min-w-0 flex-1">
                                        <label for="member_email" class="sr-only">Email address</label>
                                        <input id="cta-email" type="email" class="block w-full transform rounded-md border border-transparent bg-transparent px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out focus:border-transparent focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Enviar consulta" />
                                    </div>
                                    <div class="revue-form-actions mt-4 sm:ml-3 sm:mt-0">
                                    <button type="submit" value="Subscribe" name="member[subscribe]" id="member_submit" class="block w-full rounded-lg border border-transparent bg-black px-5 py-3 text-base font-medium text-white shadow hover:text-black focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:px-10">Enviar</button>
                                    </div>
                                </form>
                                </div>
                                <div class="ml-2 mt-6 flex justify-start space-x-5 md:order-last md:mb-0">
                                    <a href="#" class="text-black hover:text-gray-500">
                                        <span class="sr-only">Facebook</span>
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-black hover:text-gray-500">
                                        <span class="sr-only">Instagram</span>
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
        <hr class="my-6 border-gray-200  lg:my-8" />
        <div class="my-6 sm:flex sm:items-center sm:justify-center">
            <span class="text-sm text-gray-500 sm:text-center">© 2023 <a href="https://flowbite.com/" class="hover:underline">Colegio 24deJunio</a>. All Rights Reserved. </span>
        </div>
    </footer>
</body>
</html>