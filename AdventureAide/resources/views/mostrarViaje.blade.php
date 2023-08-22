@extends('layouts.app')
@section('body')
<!-- component -->
<div class="relative w-full">
    <div class="sticky top-0 flex h-screen items-center justify-center">
      <img src="https://th.bing.com/th/id/R.1191848d6fd4dae815b156488b066497?rik=9CKIWe%2bIY98v8A&riu=http%3a%2f%2fcaesarbay.com%2fimages%2fscreenshots%2f7.jpg&ehk=uCzyXUQFZXj3ebnYCWOUSwJ%2fCWCXQQR%2bL04IEivshb8%3d&risl=&pid=ImgRaw&r=0" class="h-full w-full object-cover" />
      <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 backdrop-blur-xl">
            <!-- component -->
<div class="flex flex-col justify-center ">
	<div
		class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
		<div class="w-full md:w-1/3 bg-white grid place-items-center">
			<img src="{{ asset('images/' . $registroAleatorioHotel->imagen) }}" alt="tailwind logo" class="rounded-xl" />
        </div>
                <div class="w-full md:w-2/3 bg-white flex flex-col p-3">
                    <div class="flex justify-between item-center">
                        <p class="text-gray-500 font-medium hidden md:block">Vacaciones</p>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <p class="text-gray-600 font-bold text-sm ml-1">
                              {{$registroAleatorioHotel->estrellas}}
                                <span class="text-gray-500 font-normal">(76 reviews)</span>
                            </p>
                        </div>
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                            Superhost</div>
                    </div>
                    <h3 class="font-black text-gray-800 md:text-3xl text-xl">Majestuoso Viaje en {{$preferencias->quien_viajas}}</h3>
                    <p class="md:text-lg text-gray-500 text-base">{{$registroAleatorioHotel->descripcion}}</p>
                    <p class="text-xl font-black text-gray-800">
                        $110
                        <span class="font-normal text-gray-600 text-base">/Noche</span>
                    </p>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="sticky top-0 flex h-screen items-center justify-center">
      <img src="https://aqqkowuysp.cloudimg.io/v7/_auirp_/imgs/04/1/5/6/7/3/5/tok_953dd4b7823cfd97cbf9809ac0093819/w1200_h630_x1000_y562_636313734_istock_Airubon-2dc36b4cacdb27d7.jpg" class="h-full w-full object-cover" />
      <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-xl">
        <h2 class="text-2xl font-bold text-white">RESTAURANTES</h2>
        @if ($preferenciasUsuario->has_allergies === null)
        <p class="font-sans text-lg text-white">Atendiendo tu dieta {{$preferenciasUsuario->diet_type}} </p>
        <p class="font-sans font-bold text-lg text-white">{{$registroAleatorioRestaurante->nombre_restaurante}} </p>
        <p class="font-sans text-lg text-white">Dirección: {{$registroAleatorioRestaurante->direccion}} </p>
        @else
            <p class="font-sans text-lg text-white">Atendiendo tu alergia a {{$preferenciasUsuario->allergy_type}} y tu dieta {{$preferenciasUsuario->diet_type}} </p>
            <p class="font-sans text-lg text-white">Dirección: {{$registroAleatorioRestaurante->direccion}} </p>
            
        @endif

      </div>
      
    </div>
  
    <div class="sticky top-0 flex h-screen items-center justify-center">
      <img src="https://blog.logitravel.com/wp-content/uploads/2020/06/Portada-1.jpg" class="h-full w-full object-cover" />
  
      <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-xl">
        <h2 class="text-2xl font-bold text-white">ACTIVIDADES</h2>
        <p class="font-sans text-lg text-white">{{$registroAleatorioActividad->nombre_actividad}}</p>
        <p class="font-sans text-lg text-white">Descripción: {{$registroAleatorioActividad->descripcion}} </p>
      </div>
    </div>
  
    <div class="sticky top-0 flex h-screen items-center justify-center">
      <img src="https://th.bing.com/th/id/R.17bbb9beea70284311ad0c9797d95007?rik=vzP9tVnL63fpAw&pid=ImgRaw&r=0" class="h-full w-full object-cover" />
  
      <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-xl">
        <h2 class="text-2xl font-bold text-white">AEROLINEA</h2>
        <p class="font-sans text-lg text-white">{{$registroAleatorioAerolinea->nombre_aerolinea}}</p>
        <p class="font-sans text-lg text-white">Descripción: {{$registroAleatorioAerolinea->descripcion}} </p>
      </div>
    </div>
  </div>
@endsection