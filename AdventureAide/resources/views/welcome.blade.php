<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Agregar los estilos de tailwind --}}
    @vite('resources/css/app.css')
    {{-- Agregamos el js de tailwind --}}
    @vite('resources/js/app.js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

    <title>AdventureAide</title>
</head>

<body>
    <!-- component -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="mt-4 min-h-screen">
        <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
            <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
                <div x-data="{ open: true }"
                    class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="flex flex-row items-center justify-between p-4">
                        <a href="#" class="rounded-lg md:hidden focus:outline-none focus:shadow-outline">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo de tu empresa" class="w-12 h-12">
                        </a>

                        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline"
                            @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="!open" fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path x-show="open" fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <nav :class="{ 'flex': open, 'hidden': !open }"
                        class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                        <a class="px-4 py-2 mt-8 text-base font-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-black md:mt-0 md:ml-4 hover:text-gray-900 focus:text-black hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#aboutUs">About Us</a>
                        <a class="px-4 py-2 mt-8 text-base font-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-black md:mt-0 md:ml-4 hover:text-gray-900 focus:text-black hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#plans">Precios</a>
                        <a class="px-4 py-2 mt-8 text-base font-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-black md:mt-0 md:ml-4 hover:text-gray-900 focus:text-black hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#app">Aplicación</a>
                        <!-- component -->
                        <a href="/login"
                            class="group relative inline-block overflow-hidden px-4 py-2 rounded border border-black bg-black text-sm font-bold md:mt-0 md:ml-4 text-white hover:text-violet-600 focus:outline-none focus:ring active:bg-indigo-600 active:text-white">
                            <span
                                class="ease absolute left-0 top-0 h-0 w-0 border-t-2 border-violet-600 transition-all duration-200 group-hover:w-full"></span>
                            <span
                                class="ease absolute right-0 top-0 h-0 w-0 border-r-2 border-violet-600 transition-all duration-200 group-hover:h-full"></span>
                            <span
                                class="ease absolute bottom-0 right-0 h-0 w-0 border-b-2 border-violet-600 transition-all duration-200 group-hover:w-full"></span>
                            <span
                                class="ease absolute bottom-0 left-0 h-0 w-0 border-l-2 border-violet-600 transition-all duration-200 group-hover:h-full"></span>
                            Log In
                        </a>

                    </nav>
                </div>
            </div>

            <!-- Carrusel de imágenes -->
            <div class="container mx-auto">
                <div id="gallery" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-96 overflow-hidden rounded-lg md:h-[400px]">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('images/1.png') }}"
                                class="absolute block w-full h-[400px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="{{ asset('images/2.png') }}"
                                class="absolute block w-full h-[400px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('images/3.png') }}"
                                class="absolute block w-full h-[400px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </div>

                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>
        </div>

        <!-- component -->
        <style>
            [x-cloak] {
                display: none;
            }
        </style>

        <!-- component -->
        <section class=" container pt-48  bg-white flex flex-col justify-center">
            <div class="grid grid-cols-2 gap-10 max-w-6xl mx-auto">
                <div class="-mt-20 flex justify-end">
                    <img class="w-2/3 h-2/3 object-cover rounded-lg overflow-hidden"
                        src="https://s-media-cache-ak0.pinimg.com/736x/5f/ed/16/5fed16fd7c9c2d40bb7176c6fe328e0d.jpg" />
                </div>
                <div class="flex justify-start">
                    <img class="rounded-lg object-cover overflow-hidden"
                        src="https://i.pinimg.com/originals/47/82/4d/47824dc2320724a79e56be69edcc73bf.jpg" />
                </div>
                <div class="-mt-64 flex justify-start">
                    <img class="rounded-lg object-cover overflow-hidden"
                        src="https://i.pinimg.com/originals/fb/2a/8b/fb2a8bf9486dbcee1b88747d940838f5.jpg" />
                </div>
                <div id="aboutUs" class="flex justify-start -mr-28 ml-28">
                    <img class="w-2/3 h-2/3 object-cover rounded-lg overflow-hidden"
                        src="https://www.milenio.com/uploads/media/2021/02/04/torre-eiffel-sutterstock_30_0_925_575.jpg" />
                </div>
                <div class="-translate-y-96 transform ml-28 -mr-28 p-16 shadow-xl rounded-xl overflow-hidden bg-white">
                    <div class="space-y-4">
                        <p class="text-5xl font-bold text-black tracking-tight">
                            AdventureAide es una emocionante aplicación diseñada para los amantes de la aventura y los
                            viajes.
                        </p>
                        <p class="text-xl text-black">
                            Nuestra plataforma revolucionaria ofrece una experiencia personalizada al ayudarte a
                            planificar tus
                            viajes de ensueño según tus preferencias individuales.

                            Con AdventureAide, puedes explorar una amplia gama de destinos emocionantes y actividades al
                            aire libre
                            en todo el mundo. Ya sea que busques la adrenalina de practicar deportes extremos, la
                            serenidad de
                            sumergirte en la naturaleza o la emoción de descubrir nuevas culturas, nuestra aplicación
                            está aquí
                            para hacerlo realidad.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-6 border-t border-b border-gray-200 my-12 py-8">
                        <div>
                            <p class="text-4xl font-bold text-black">
                                2M+
                            </p>
                            <p class="text-sm text-black">
                                Viajeros satisfechos que han confiado en nosotros para planificar sus aventuras desde 2023.
                            </p>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-black">
                                170+
                            </p>
                            <p class="text-sm text-black">
                                Destinos únicos y experiencias exclusivas disponibles solo para nuestros usuarios.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

        <div class="container mx-auto antialiased text-gray-900 bg-white" x-data="setup()">

            <main>
                <div class="text-center">
                    <h1 class="mb-4 text-5xl font-bold md:text-3xl lg:text-4xl">

                        <span id="plans"class="font-semibold">PLANES</span>
                    </h1>
                    <p class="text-sm font-normal text-gray-400">
                        Descubre nuestros tres principales planes diseñados para adaptarse a cada tipo de viajero.
                    </p>
                    <p class="text-sm font-normal text-gray-400">
                        ¡Empieza tu aventura con nosotros! Personaliza tu experiencia de viaje a tu gusto y descubre el mundo a tu manera.
                    </p>
                </div>

                <!-- Plan switch -->
                <div class="flex items-center justify-center mt-10 space-x-4">
                    <span class="text-base font-medium">Plan Mensual</span>
                    <button
                        class="relative rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        x-cloak @click="billPlan == 'monthly' ? billPlan = 'annually' : billPlan = 'monthly'">
                        <div class="w-16 h-8 transition bg-indigo-500 rounded-full shadow-md outline-none"></div>
                        <div class="absolute inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform bg-white rounded-full shadow-sm top-1 left-1"
                            :class="{ 'translate-x-0': billPlan == 'monthly', 'translate-x-8': billPlan == 'annually' }">
                        </div>
                    </button>
                    <span class="text-base font-medium">Plan Anual</span>
                </div>



                <!-- Plans -->
                <div
                    class="flex flex-col items-center justify-center mt-16 space-y-8 lg:flex-row lg:items-stretch lg:space-x-8 lg:space-y-0">
                    <template x-for="(plan, i) in plans" x-key="i">
                        <section class="flex flex-col w-full max-w-sm p-12 space-y-6 bg-white rounded-lg shadow-md">
                            <!-- Price -->
                            <div class="flex-shrink-0">
                                <span class="text-4xl font-medium tracking-tight"
                                    :class="plan.name == 'Basic' ? 'text-green-500' : ''"
                                    x-text="`$${billPlan == 'monthly' ? plan.price.monthly : plan.price.annually}`"></span>
                                <span class="text-gray-400"
                                    x-text="billPlan == 'monthly' ? '/month' : '/year'"></span>
                            </div>

                            <!--  -->
                            <div class="flex-shrink-0 pb-6 space-y-2 border-b">
                                <h2 class="text-2xl font-normal" x-text="plan.name"></h2>
                                <p class="text-sm text-gray-400" x-text="plan.discretion"></p>
                            </div>

                            <!-- Features -->
                            <ul class="flex-1 space-y-4">
                                <template x-for="(feature, i) in plan.features" x-key="i">
                                    <li class="flex items-start">
                                        <svg class="w-6 h-6 text-green-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-3 text-base font-medium" x-text="feature"></span>
                                    </li>
                                </template>
                            </ul>

                            <!-- Button -->
                            <div class="flex-shrink-0 pt-4">
                                <button
                                    class="inline-flex items-center justify-center w-full max-w-xs px-4 py-2 transition-colors border rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    :class="plan.name == 'Basic' ? 'bg-indigo-500 text-white hover:bg-indigo-700' :
                                        'hover:bg-indigo-500 hover:text-white'"
                                    x-text="`Get ${plan.name}`"></button>
                            </div>
                        </section>
                    </template>
                </div>
            </main>

            <!-- Author links -->
            <div class="fixed flex items-center space-x-4 bottom-5 left-5">
                <a href="https://twitter.com/ak_kamona" target="_blank"
                    class="transition-transform transform hover:scale-125">
                    <span class="sr-only">Twitter</span>
                    <svg aria-hidden="true" class="w-8 h-8 text-blue-500" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                        </path>
                    </svg>
                </a>
                <a href="https://github.com/Kamona-WD" target="_blank"
                    class="transition-transform transform hover:scale-125">
                    <span class="sr-only">Github</span>
                    <svg aria-hidden="true" class="w-8 h-8 text-black" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>


        <!--DESCARGA LA APP-->
        <div id="app" class="w-full h-600px relative overflow-hidden py-4">
            <video class="w-full h-full object-cover" autoplay loop muted>
                <source src="{{ asset('images/app.mp4') }}" type="video/mp4">
                <!-- Agrega más etiquetas <source> para formatos de video adicionales -->
            </video>
        </div>




        <script>
            const setup = () => {
                return {
                    isNavOpen: false,

                    billPlan: 'monthly',

                    plans: [{
                        name: 'Básico',
                        discretion: 'Ideal para viajeros ocasionales que buscan herramientas esenciales.',
                        price: {
                            monthly: 9.99,
                            annually: 99.99,
                        },
                        features: [
                            'Planificación de itinerarios básicos',
                            'Información sobre destinos populares',
                            'Integración con mapas',
                            'Gestión de gastos básica'
                        ],
                        },
                        {
                            name: 'Premium',
                            discretion: 'Perfecto para viajeros frecuentes que buscan una experiencia mejorada.',
                            price: {
                                monthly: 19.99,
                                annually: 199.99,
                            },
                            features: [
                                'Todas las características del plan Básico',
                                'Reseñas detalladas de otros viajeros',
                                'Recomendaciones personalizadas de restaurantes y lugares de interés',
                                'Alertas de seguridad en tiempo real'
                            ],
                        },
                        {
                            name: 'Elite',
                            discretion: 'Para viajeros serios que desean una experiencia de viaje sin igual.',
                            price: {
                                monthly: 29.99,
                                annually: 299.99,
                            },
                            features: [
                                'Todas las características del plan Premium',
                                'Acceso anticipado a nuevas características',
                                'Soporte prioritario 24/7',
                                'Ofertas exclusivas en alojamiento y actividades',
                                'Integración con servicios de reserva de vuelos y hoteles'
                            ],
                        },
                    ],
                }
            }
        </script>



        <!-- Agregar los scripts necesarios para el funcionamiento del carrusel -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

<!-- component -->
<footer class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div>
                <img src="{{ asset('images/logo.png') }}" class="mr-5 h-6 sm:h-9" alt="logo" />
                <p class="max-w-xs mt-4 text-sm text-gray-600">
                    Síguenos en nuestras redes sociales.
                </p>
                <div class="flex mt-8 space-x-6 text-gray-600">
                    <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                        <span class="sr-only"> Facebook </span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fillRule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clipRule="evenodd" />
                        </svg>
                    </a>
                    <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                        <span class="sr-only"> Instagram </span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fillRule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clipRule="evenodd" />
                        </svg>
                    </a>
                    <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                        <span class="sr-only"> Twitter </span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>

                </div>
            </div>
            <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
                <div>
                    <p class="font-medium">
                        Menú
                    </p>
                    <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                        <a class="hover:opacity-75" href="#aboutUs"> About Us </a>
                        <a class="hover:opacity-75" href="#plans"> Precios </a>
                        <a class="hover:opacity-75" href="#app"> Aplicación </a>
                        <a class="hover:opacity-75" href="#login"> Log In </a>
                        <a class="hover:opacity-75" href="{{ route('user-preferences.create') }}"> preferencias </a>
                    </nav>
                </div>
                <div>
                    <p class="font-medium">
                        Legal
                    </p>
                    <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                        <a class="hover:opacity-75" href> Privacy Policy </a>
                        <a class="hover:opacity-75" href> Terms &amp; Conditions </a>
                        <a class="hover:opacity-75" href> Returns Policy </a>
                        <a class="hover:opacity-75" href> Accessibility </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    </div>
</footer>

</html>
