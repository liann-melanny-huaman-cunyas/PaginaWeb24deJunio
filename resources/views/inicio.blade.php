<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>24deJunio</title>
</head>

<body>
    <header class="">
        <div class="bg-rose-900">
            <nav class="py-2 px-10 flex justify-around items-center" aria-label="Global">
                <div class="flex items-center">
                    <a href="{{ route('inicio') }}" class="p-2">
                        <img class="h-28" src="{{ asset('imagenes/Logo-removebg-preview.png') }}" alt="" />
                    </a>
                    <div>
                        <h1 class="font-bold text-2xl text-white">INSTITUCIÓN EDUCATIVA</h1>
                        <h1 class="font-bold text-2xl text-white">24 DE JUNIO</h1>
                        <p class="text-white">Empecemos Juntos!!!!!!</p>
                    </div>
                </div>
                <button
                    class="flex flex-wrap justify-around items-center w-auto border border-white-900 text-black  rounded-md px-4 py-2 m-2 transition duration-500 ease select-none bg-white hover:text-white hover:bg-zinc-700 focus:outline-none focus:shadow-outline">
                    <a href="{{ route('dashboard') }}" class="">Ingresar al intranet
                        <span aria-hidden="true">&rarr;</span></a>
                </button>
            </nav>
        </div>

        <div class="bg-zinc-400 p-3 flex justify-center items-center">
            <a href="#inicio" class="flex flex-wrap justify-around items-center px-5 text-white hover:text-rose-900 transition duration-500 ease select-none">
                <img src="{{ asset('icons/047-home.svg') }}" alt="" class="w-5">
                <p>&nbsp INICIO</p>
            </a>
            <a href="#conocenos" class="flex flex-wrap justify-around items-center px-5 text-white hover:text-rose-900 transition duration-500 ease select-none">
                <img src="{{ asset('icons/051-info.svg') }}" alt="" class="w-5">
                <p>&nbsp CONOCENOS</p>
            </a>
            <a href="#noticias" class="flex flex-wrap justify-around items-center px-5 text-white hover:text-rose-900 transition duration-500 ease select-none">
                <img src="{{ asset('icons/022-copy.svg') }}" alt="" class="w-5">
                <p>&nbsp NOTICIAS</p>
            </a>
            <a href="#comunicados" class="flex flex-wrap justify-around items-center px-5 text-white hover:text-rose-900 transition duration-500 ease select-none">
                <img src="{{ asset('icons/095-promotion.svg') }}" alt="" class="w-5">
                <p>&nbsp COMUNICADOS</p>
            </a>
            <a href="#contactenos" class="flex flex-wrap justify-around items-center px-5 text-white hover:text-rose-900 transition duration-500 ease select-none">
                <img src="{{ asset('icons/135-contact--us.svg') }}" alt="" class="w-5">
                <p>&nbsp CONTACTENOS</p>
            </a>
        </div>

        <div class="header flex items-center justify-center xl:justify-end">
            <div class="fade-in header-card xl:mr-20 absolute flex flex-col w-5/6 xl:w-1/3 p-2 xl:p-10 rounded-lg border-dashed border border-zinc-800 ">
                <h1 class="font-bold p-2 text-white text-base xl:text-4xl font-serif">
                    BIENVENIDOS AL COLEGIO 24 DE JUNIO
                </h1>
                <p class="text-justify p-2 text-white text-sm xl:text-xl sm:visible ">
                    Somos una institucion educativa con una sólida
                    trayectoria en el ámbito educativo. Nos hemos comprometido
                    a brindar una educación de calidad y formar a nuestros
                    estudiantes de manera integral. Nuestro equipo de docentes
                    altamente capacitados está dedicado a transmitir valores fundamentales,
                    fomentar el pensamiento crítico y promover habilidades necesarias
                    para el desarrollo académico y personal de nuestros alumnos.
                </p>
            </div>
        </div>
    </header>

    <section id="conocenos" class="flex items-center overflow-hidden">
        <div class="m-20"">
            <div class="flex justify-around">
                <div class="mx-20 flex items-center">
                    <img alt="" class="max-w-2xl " src="{{ asset('imagenes/fondo.jpg') }}">
                </div>
                <div class="border border-zinc-400 font-sans p-12 ">
                    <div class="">
                        <div class="flex flex-wrap mb-6">
                            <div class="">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font text-rose-900">24 de Junio</h1>
                                <span>
                                    <p class="text-zinc-700">
                                    COLEGIO
                                    </p>
                                </span>
                                <div class="h-0.5 w-96 bg-zinc-400 rounded md:w-72"></div>
                            </div>
                        </div>
                        <div class="max-h-96 text-zinc-400 overflow-y-scroll">
                            <p class="font-sans text-base leading-relaxed text-justify">
                                Estimada comunidad educativa,<br><br>
                                Deseo darles una cálida bienvenida al inicio de un nuevo año escolar en el Colegio 24 de Junio. Este año es especialmente significativo, ya que nos encontramos frente a una nueva gestión y estamos experimentando cambios positivos en el panorama educativo de nuestro amado Perú.
                                <br><br>
                                Hemos atravesado momentos difíciles: la pandemia, la alternancia entre clases presenciales y virtuales, los contagios, la enfermedad y la pérdida de seres queridos. Sin duda, el campo educativo ha sido uno de los más afectados en nuestro país.
                                <br><br>
                                Reconocemos que todos somos partícipes de los procesos educativos, tanto en nuestras familias como en nuestra comunidad local y en todo el país. En el Colegio 24 de Junio, nos esforzaremos para seguir siendo un referente de educación de calidad, permitiéndonos crecer juntos día a día.
                                <br><br>
                                En nombre de toda la comunidad educativa, quiero expresar nuestro sincero agradecimiento por la confianza que han depositado en el Colegio 24 de Junio.
                                <br><br>
                                Reciban un cordial saludo,
                                <br><br>
                                NOMBRE DEL DIRECTOR.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="noticias" class="-mt-24 text-black body-font py-12">
        <div class="container px-5 py-10 p-24">
            <div class="ml-24">
                <div class="h-screen">
                    <div class="my-12">
                        <h1 class="text-3xl font-medium title-font mb-2 lg:ml-7">
                            <span class="text-black">Últimos</span>
                            <span class="text-white ml-1">Noticias</span>
                        </h1>
                        <div class="h-10 w-32 ml-28 -mt-12 bg-rose-900 rounded lg:ml-36 "></div>
                    </div>

                    <div class="flex flex-wrap mx-44">
                        @foreach ($noticias as $noticia)
                        <div class="flex items-center">
                            <div class="py-8 flex flex-nowrap">
                                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                    <span class="font-semibold title-font text-gray-700">Publicado</span>
                                    <span class="mt-1 text-gray-500 text-sm">{{ $noticia->fecha }}</span>
                                </div>
                                <div class="w-full flex flex-wrap">
                                    <div class="">
                                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $noticia->titulo }}</h2>
                                        <p class="leading-relaxed">{{ $noticia->contenido }}</p>
                                    </div>
                                    <div class="flex flex-wrap">
                                        <a class="text-black inline-flex items-center mt-4">Leer más
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="max-w-96 flex items-center">
                                    <div class="max-w-96 max-h-40">
                                        <div class="w-96 h-40 m-8">
                                            <img alt="content" class="object-cover object-center mt-5 h-full w-full md:-mt-0" src="{{ str_replace(' ', '%20', asset($noticia->foto)) }}" alt="{{ $noticia->titulo }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="comunicados" class=" text-gray-600 body-font">
        <div class="container px-5 py-10 p-24">
            <div class="ml-24">
                <div class="h-screen">
                    <div class="my-12">
                        <h1 class="text-3xl font-medium title-font mb-2 lg:ml-7">
                            <span class="text-black">Últimos</span>
                            <span class="text-white ml-1">Comunicados</span>
                        </h1>
                        <div class="h-10 w-48 ml-28 -mt-12 bg-rose-900 rounded lg:ml-36 "></div>
                    </div>

                    <div class="comunicados-card grid grid-cols-3 gap-8">
                        @foreach ($comunicados as $comunicado)
                        <div class="border-2 border-rose-700 rounded-3xl">
                            <div class="ml-12">
                                <div class="h-64 p-4">
                                    <img class="w-full h-full object-cover" src="{{ str_replace(' ', '%20', asset($comunicado->foto)) }}" alt="{{ $comunicado->titulo }}" />
                                </div>
                                <h3 class="title-font text-xs font-bold  mt-5 text-black">Publicado el {{ $comunicado->fecha }}</h3>
                                <h2 class="title-font my-4 text-xl font-medium text-black">{{ $comunicado->titulo }}</h2>
                                <p class="text-base px-4 break-all ">{{ $comunicado->contenido }}</p>
                                <div class="pb-4">
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
                </div>
            </div>
        </div>
    </section>

    <section id="contactenos" class="">
        <section>
            <section class="text-gray-600 body-font relative">
                    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
                    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15611.74032225834!2d-74.917656!3d-11.978994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910c1e4ccd4520e3%3A0x3ad1082942bf47d2!2sPariahuanca%2012245%2C%20Per%C3%BA!5e0!3m2!1ses!2sus!4v1688049680367!5m2!1ses!2sus" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                        <div class="lg:w-1/2 px-6">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                            <p class="mt-1">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
                        </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                <h1 class="text-3xl font-medium title-font mb-2 lg:ml-7">
                                <span class="text-black">Ubi</span>
                                <span class="text-white ml-1">canos</span>
                                </h1>
                                <div class="h-10 w-24 ml-12 -mt-11 bg-black rounded lg:ml-20 "></div>
                        </div>
                        <div>
                                <p class="leading-relaxed mb-5 text-gray-600 lg:ml-9 lg:mt-5">Pariahuanca 12245 , San Balvin  , <br> Huancayo , Junin</p>
                        </div>
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                <h1 class="text-3xl font-medium mb-2 lg:text-2xl lg:ml-7">
                                <span class="text-black">Central</span>
                                <span class="text-white lg:ml-2">Telefonica</span>
                                </h1>
                                <div class="h-10 w-36 ml-28 -mt-11 bg-black rounded lg:ml-28 "></div>
                        </div>
                        <div class="mb-5">
                                <p class="leading-relaxed lg:ml-9 lg:mt-5">123-456-7890</p>
                        </div>
                        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                <h1 class="text-3xl font-medium title-font mb-2 lg:ml-7">
                                <span class="text-black ml-1">Sigu</span>
                                <span class="text-white ml-1">enos</span>
                                </h1>
                                <div class="h-10 w-20 ml-16 -mt-11 bg-black rounded lg:ml-24 "></div>
                        </div>
                        <div class="lg:ml-9 lg:mt-5 ml-2 mt-6 flex justify-start space-x-5 md:order-last md:mb-0">
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
                </section>
            </section>
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
                    <a href="./index.html"
                        class="tracking-relaxed transform text-lg font-bold tracking-tighter text-black transition duration-500 ease-in-out lg:pr-8">
                        <img src="{{ asset('imagenes/LOGO.png') }}" class="mr-3 h-8" alt="LOGO" />
                    </a>
                </div>
                <div class="pl-4 mt-8 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0 ">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-xs font-semibold uppercase tracking-wider text-black">Paginas</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="{{ route('inicio') }}"
                                        class="text-sm font-normal text-gray-500 hover:text-gray-900"> Inicio </a>
                                </li>
                                <li>
                                    <a href="#conocenos"
                                        class="text-sm font-normal text-gray-500 hover:text-gray-900"> Conocenos </a>
                                </li>
                                <li>
                                    <a href="#comunicados"
                                        class="text-sm font-normal text-gray-500 hover:text-gray-900"> Comunicados </a>
                                </li>
                                <li>
                                    <a href="#noticias"
                                        class="text-sm font-normal text-gray-500 hover:text-gray-900"> Noticias </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-xs font-semibold uppercase tracking-wider text-black">Contactenos</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-sm font-normal text-gray-500 hover:text-gray-900">
                                        Direccion </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hidden md:grid md:grid-cols-1 lg:justify-end">
                        <div class="mt-8 w-full md:-mt-8">
                            <div class="mt-8 lg:justify-end xl:mt-8">
                                <h3 class="text-xs font-semibold uppercase tracking-wider text-black">Consultas</h3>
                                <div class="inline-flex list-none items-center gap-2 lg:ml-auto">
                                    <form action="" method="post" id="revue-form" name="revue-form"
                                        target="_blank"
                                        class="border2 mt-4 transform rounded-xl bg-gray-50 p-1 transition duration-500 ease-in-out sm:flex sm:max-w-lg">
                                        <div class="revue-form-group min-w-0 flex-1">
                                            <label for="member_email" class="sr-only">Email address</label>
                                            <input id="cta-email" type="email"
                                                class="block w-full transform rounded-md border border-transparent bg-transparent px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out focus:border-transparent focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300"
                                                placeholder="Enviar consulta" />
                                        </div>
                                        <div class="revue-form-actions mt-4 sm:ml-3 sm:mt-0">
                                            <button type="submit" value="Subscribe" name="member[subscribe]"
                                                id="member_submit"
                                                class="block w-full rounded-lg border border-transparent bg-black px-5 py-3 text-base font-medium text-white shadow hover:text-black focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:px-10">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="ml-2 mt-6 flex justify-start space-x-5 md:order-last md:mb-0">
                                    <a href="#" class="text-black hover:text-gray-500">
                                        <span class="sr-only">Facebook</span>
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-black hover:text-gray-500">
                                        <span class="sr-only">Instagram</span>
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                clip-rule="evenodd"></path>
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
            <span class="text-sm text-gray-500 sm:text-center">© 2023 <a href=""
                    class="hover:underline">Colegio 24deJunio</a>. All Rights Reserved. </span>
        </div>
    </footer>
</body>

</html>
