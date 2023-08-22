@extends('layouts.app')
@section('body')

    <!-- Dummy Scrollable Content -->
    <div class="flex flex-wrap w-full">
        <!-- component -->
        <section class="w-full">
        <div class="sliderAx h-auto">
            <div id="slider-1" class="container mx-auto">
                <div class="bg-cover bg-center  h-[500px] text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                    <div class="md:w-1/2">
                        <p class="text-5xl font-bold">Planea los viajes de tus sueños</p>
                        <p class="mt-5 text-2xl mb-10 leading-none">Busca alojamientos que ofrezcan estancias largas, hay muchas con tarifa mensual reducida</p>
                    </div>  
                </div> <!-- container -->
            <br>
            </div>
        
            <div id="slider-2" class="container mx-auto">
                <div class="bg-cover bg-top h-[500px] text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">           
                <p class="text-5xl font-bold ">Experiencia personalizada</p>
                <p class="mt-5 text-2xl mb-10 leading-none">Inspírate, compara y reserva vuelos con más flexibilidad</p>                
            </div> <!-- container -->
            <br>
            </div>
            </div> 
        </section>
    
        <!-- component -->
        <div
        class="container mx-auto mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3"
        >
        <div>
        <div class="rounded-lg overflow-hidden">
            <div class="relative overflow-hidden pb-60">
            <img
                class="absolute h-full w-full object-cover object-center"
                src="{{ asset('images/eiffel-tower.jpg') }}"
                alt=""
            />
            </div>
            <div class="relative bg-blue-200">
            <div class="py-10 px-8">
                <h3 class="text-2xl font-bold">Torre Eiffel</h3>
                <div class="text-gray-600 text-sm font-medium flex mb-4 mt-2">
                    <p>Ubicada en&nbsp;</p>
                    <span>París, Francia</span>
                </div>
                <p class="leading-7">
                    Un icónico monumento francés y una de las estructuras más reconocidas en el mundo. 
                    La Torre Eiffel es un destino obligado para cualquier viajero en París.
                </p>
                <div class="mt-10 flex justify-between items-center">
                <div>
                    <img
                    src="https://collect.criggzdesign.com/wp-content/uploads/2020/07/Ps.svg"
                    alt=""
                    class="w-6"
                    />
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div>
        <div class="rounded-lg overflow-hidden">
            <div class="relative overflow-hidden pb-60">
            <img
                class="absolute h-full w-full object-cover object-center"
                src="{{ asset('images/grand-canyon-usa.jpg') }}"
                alt=""
            />
            </div>
            <div class="relative bg-blue-200">
            <div class="py-10 px-8">
                <h3 class="text-2xl font-bold">Gran Cañón</h3>
                <div class="text-gray-600 text-sm font-medium flex mb-4 mt-2">
                    <p>Ubicado en&nbsp;</p>
                    <span>Arizona, EE.UU.</span>
                </div>
                <p class="leading-7">
                    Una maravilla natural del mundo, el Gran Cañón ofrece vistas impresionantes y oportunidades para actividades al aire libre como senderismo y rafting.
                </p>
                <div class="mt-10 flex justify-between items-center">
                <div>
                    <img
                    src="https://collect.criggzdesign.com/wp-content/uploads/2020/07/Ps.svg"
                    alt=""
                    class="w-6"
                    />
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div>
        <div class="rounded-lg overflow-hidden">
            <div class="relative overflow-hidden pb-60">
            <img
                class="absolute h-full w-full object-cover object-center"
                src="{{ asset('images/giza-plateau-pyramids.jpg') }}"
                alt=""
            />
            </div>
            <div class="relative bg-blue-200">
            <div class="py-10 px-8">
                <h3 class="text-2xl font-bold">Pirámides de Giza</h3>
                <div class="text-gray-600 text-sm font-medium flex mb-4 mt-2">
                    <p>Ubicadas en&nbsp;</p>
                    <span>Giza, Egipto</span>
                </div>
                <p class="leading-7">
                    Las Pirámides de Giza son uno de los monumentos más antiguos y misteriosos del mundo. Estas estructuras milenarias son un testimonio del ingenio y la cultura del antiguo Egipto.
                </p>
                <div class="mt-10 flex justify-between items-center">
                <div>
                    <img
                    src="https://collect.criggzdesign.com/wp-content/uploads/2020/07/Ps.svg"
                    alt=""
                    class="w-6"
                    />
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
        <div
        class="container max-w-5xl mx-auto mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-2"
        >
        <div>
        <div>
            <div class="relative overflow-hidden pb-60">
            <img
                class="absolute h-full w-full object-cover object-center"
                src="{{ asset('images/dashboard5.png') }}"
                alt=""
            />
            </div>
            <div class="flex">
            <div
                class="w-20 h-20 bg-yellow-500 flex justify-center items-center flex-col text-white font-bold text-center"
            >
                <p class="text-2xl">21</p>
                <p class="uppercase -mt-1">Ago</p>
            </div>
            <div class="bg-white h-20 flex-grow flex items-center px-4">
                <p class="font-bold text-lg">Playa del Carmen, Quintana Roo</p>
            </div>
            </div>
        </div>
        </div>
        <div>
        <div>
            <div class="relative overflow-hidden pb-60">
            <img
                class="absolute h-full w-full object-cover object-center"
                src="{{ asset('images/dashboard6.png') }}"
                alt=""
            />
            </div>
            <div class="flex">
            <div
                class="w-20 h-20 bg-yellow-500 flex justify-center items-center flex-col text-white font-bold text-center"
            >
                <p class="text-2xl">05</p>
                <p class="uppercase -mt-1">Sep</p>
            </div>
            <div class="bg-white h-20 flex-grow flex items-center px-4">
                <p class="font-bold text-lg">Cabo San Lucas, Baja California Sur</p>
            </div>
            </div>
        </div>
        </div>
        </div>
        <div
        class="container mx-auto mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3"
        >
        <div class="rounded-xl bg-gray-800 flex flex-col p-8">
        <div
            class="w-16 h-16 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0 p-4"
        >
            <svg
            class="w-24 h-24"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"
            ></path>
            </svg>
        </div>
        <div class="flex-grow text-white">
            <h2 class="text-xl title-font font-medium mb-3">Machu Picchu, Perú</h2>
            <p class="leading-relaxed text-sm text-justify">
                Conocida como la "Ciudad Perdida de los Incas", Machu Picchu es una de las maravillas del mundo moderno. Situada en lo alto de las montañas de los Andes, ofrece vistas panorámicas y ruinas históricas que atraen a viajeros de todo el mundo. Es un testimonio del ingenio y la habilidad de la civilización inca.
            </p>
        </div>
        </div>
        <div class="rounded-xl bg-gray-800 flex flex-col p-8">
        <div
            class="w-16 h-16 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0 p-4"
        >
            <svg
            class="w-24 h-24"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"
            ></path>
            </svg>
        </div>
        <div class="flex-grow text-white">
            <h2 class="text-xl title-font font-medium mb-3">Santorini, Grecia</h2>
            <p class="leading-relaxed text-sm text-justify">
                Santorini es famosa por sus impresionantes puestas de sol, sus casas blancas y sus iglesias de cúpulas azules. Es una isla volcánica en el mar Egeo que ofrece playas únicas con arena de colores y aguas cristalinas. Es el destino perfecto para una escapada romántica.
            </p>
        </div>
        </div>
        <div class="rounded-xl bg-gray-800 flex flex-col p-8">
        <div
            class="w-16 h-16 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0 p-4"
        >
            <svg
            class="w-24 h-24"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"
            ></path>
            </svg>
        </div>
        <div class="flex-grow text-white">
            <h2 class="text-xl title-font font-medium mb-3">Kyoto, Japón</h2>
            <p class="leading-relaxed text-sm text-justify">
                Conocida como el corazón cultural de Japón, Kyoto alberga templos centenarios, santuarios y jardines tradicionales. Es una ciudad que combina lo antiguo con lo moderno, ofreciendo una experiencia única de la cultura y la historia japonesa. Durante la primavera, los cerezos en flor transforman la ciudad en un espectáculo visual.
            </p>
        </div>
        </div>
        </div>
        <div
        class="container mx-auto mt-20 grid grid-cols-2 gap-8 md:grid-cols-3 xl:grid-cols-4"
        >
        <div class="">
        <div class="flex flex-row bg-white shadow-sm rounded-xl p-4">
            <div
            class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500"
            >
            <svg
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                ></path>
            </svg>
            </div>
            <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-gray-500">Usuarios</div>
            <div class="font-bold text-lg">1259</div>
            </div>
        </div>
        </div>
        <div class="">
        <div class="flex flex-row bg-white shadow-sm rounded-xl p-4">
            <div
            class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500"
            >
            <svg
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                ></path>
            </svg>
            </div>
            <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-gray-500">Viajes</div>
            <div class="font-bold text-lg">230</div>
            </div>
        </div>
        </div>
        <div class="">
        <div class="flex flex-row bg-white shadow-sm rounded-xl p-4">
            <div
            class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500"
            >
            <svg
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                ></path>
            </svg>
            </div>
            <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-gray-500">Clientes nuevos</div>
            <div class="font-bold text-lg">190</div>
            </div>
        </div>
        </div>
        <div class="">
        <div class="flex flex-row bg-white shadow-sm rounded-xl p-4">
            <div
            class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500"
            >
            <svg
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
            </svg>
            </div>
            <div class="flex flex-col flex-grow ml-4">
            <div class="text-sm text-gray-500">Gastos en vuelos</div>
            <div class="font-bold text-lg">$ 32k</div>
            </div>
        </div>
        </div>
        </div>
        <div
        class="container mx-auto mt-20 grid grid-cols-2 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        >
        <div class="flex flex-col items-center">
        <div
            class="bg-white overflow-hidden rounded-lg w-full relative pb-36"
        >
            <img
            src="{{ asset('images/dashboard11.png') }}"
            class="absolute h-full w-full object-cover object-center"
            alt=""
            />
        </div>
        <div class="z-10 -mt-12 px-6 w-full">
            <div class="bg-white shadow-lg rounded-lg py-5 px-5">
            <span class="font-bold text-gray-800 text-lg">Vuelo a Cancún</span>
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-600 font-light">Clase : Económica</div>
                <div class="text-2xl text-red-600 font-bold">$ 250.00</div>
            </div>
            </div>
        </div>
        </div>
        <div class="flex flex-col items-center">
        <div
            class="bg-white overflow-hidden rounded-lg w-full relative pb-36"
        >
            <img
            src="{{ asset('images/dashboard8.png') }}"
            class="absolute h-full w-full object-cover object-center"
            alt=""
            />
        </div>
        <div class="z-10 -mt-12 px-6 w-full">
            <div class="bg-white shadow-lg rounded-lg py-5 px-5">
            <span class="font-bold text-gray-800 text-lg">Hotel en Playa del Carmen</span>
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-600 font-light">Habitación : Dobler</div>
                <div class="text-2xl text-red-600 font-bold">$ 120.00</div>
            </div>
            </div>
        </div>
        </div>
        <div class="flex flex-col items-center">
        <div
            class="bg-white overflow-hidden rounded-lg w-full relative pb-36"
        >
            <img
            src="{{ asset('images/dashboard7.png') }}"
            class="absolute h-full w-full object-cover object-center"
            alt=""
            />
        </div>
        <div class="z-10 -mt-12 px-6 w-full">
            <div class="bg-white shadow-lg rounded-lg py-5 px-5">
            <span class="font-bold text-gray-800 text-lg">Tour a Chichén Itzá</span>
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-600 font-light">Incluye : Transporte y guía</div>
                <div class="text-2xl text-red-600 font-bold">$ 80.00</div>
            </div>
            </div>
        </div>
        </div>
        <div class="flex flex-col items-center">
        <div
            class="bg-white overflow-hidden rounded-lg w-full relative pb-36"
        >
            <img
            src="{{ asset('images/dashboard9.png') }}"
            class="absolute h-full w-full object-cover object-center"
            alt=""
            />
        </div>
        <div class="z-10 -mt-12 px-6 w-full">
            <div class="bg-white shadow-lg rounded-lg py-5 px-5">
            <span class="font-bold text-gray-800 text-lg">Alquiler de coche en Tulum</span>
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-600 font-light">Tipo : Compacto</div>
                <div class="text-2xl text-red-600 font-bold">$ 45.00</div>
            </div>
            </div>
        </div>
        </div>
        </div>
        <div
        class="container mx-auto mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-2"
        >
        <div class="flex flex-row bg-white rounded-xl overflow-hidden">
        <div class="w-1/3 flex-shrink-0 h-auto overflow-hidden relative">
            <img
            src="{{ asset('images/dashboard10.png') }}"
            class="absolute h-full w-full object-cover object-center"
            alt=""
            />
        </div>
        <div class="flex-grow p-8 flex flex-col justify-between leading-normal">
            <div class="mb-8">
            <p class="text-sm text-grey-dark flex items-center">
                <svg
                class="text-grey w-3 h-3 mr-2"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                >
                <path
                    d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"
                />
                </svg>
                Members only
            </p>
            <div class="text-black font-bold text-xl mb-2">
                5 consejos para viajar de forma sostenible
            </div>
            <p class="text-grey-darker text-base">
                Viajar es una de las experiencias más enriquecedoras, pero también puede tener un impacto en el medio ambiente. Aprende cómo puedes hacer la diferencia con estos consejos.
            </p>
            </div>
            <div class="flex items-center">
            <img
                class="w-10 h-10 rounded-full mr-4"
                src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg"
                alt="Avatar of Jonathan Reinink"
            />
            <div class="text-sm">
                <p class="text-black leading-none">Jonathan Reinink</p>
                <p class="text-grey-dark">Aug 18</p>
            </div>
            </div>
        </div>
        </div>
        <div class="flex flex-row bg-white rounded-xl overflow-hidden">
        <div class="w-1/3 flex-shrink-0 h-auto overflow-hidden relative">
            <img
            src="https://source.unsplash.com/MNtag_eXMKw/1600x900"
            class="absolute h-full w-full object-cover object-center"
            alt=""
            />
        </div>
        <div class="flex-grow p-8 flex flex-col justify-between leading-normal">
            <div class="mb-8">
            <p class="text-sm text-grey-dark flex items-center">
                <svg
                class="text-grey w-3 h-3 mr-2"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                >
                <path
                    d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"
                />
                </svg>
                Members only
            </p>
            <div class="text-black font-bold text-xl mb-2">
                ¿Cómo elegir el destino perfecto para tus próximas vacaciones?
            </div>
            <p class="text-grey-darker text-base">
                Elegir el destino perfecto puede ser abrumador con tantas opciones disponibles. Descubre cómo identificar lugares que se alineen con tus intereses y presupuesto.
            </p>
            </div>
            <div class="flex items-center">
            <img
                class="w-10 h-10 rounded-full mr-4"
                src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg"
                alt="Avatar of Jonathan Reinink"
            />
            <div class="text-sm">
                <p class="text-black leading-none">Jonathan Reinink</p>
                <p class="text-grey-dark">Aug 18</p>
            </div>
            </div>
        </div>
        </div>  
        </div>
    </div>
@endsection

@push('styles')
<script>
    var cont=0;
    function loopSlider(){
        var xx= setInterval(function(){
            switch(cont)
            {
            case 0:{
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
            cont=1;
            
            break;
            }
            case 1:
            {
            
                $("#slider-2").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
            cont=0;
            
            break;
            }
                
            }},8000);
        
        }
        
        function reinitLoop(time){
        clearInterval(xx);
        setTimeout(loopSlider(),time);
        }
        
        $(window).ready(function(){
            $("#slider-2").hide();        
            loopSlider();
        
        });
        
    </script>
    <script>
        const appData = () => {
            return {
                percent: 0,
    
                appInit() {
                    // source: https://codepen.io/A_kamel/pen/qBmmGKJ
                    window.addEventListener('scroll', () => {
                        let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
                            height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    
                        this.percent = Math.round((winScroll / height) * 100);
                    });
                },
            };
        };
    </sctip>
@endpush