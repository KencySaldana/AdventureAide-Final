@extends('layouts.app')
@section('body')

<div class="min-h-screen w-full flex items-center justify-center bg-blue-100 px-4 sm:px-6 lg:px-8">
    <img style="border:20px;margin:50px;float:left;width:500px;height: 500px;" class="object-cover" src="https://images.unsplash.com/photo-1464746133101-a2c3f88e0dd9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1327&q=80">
    <hr>

    <div class="max-w-md w-full">
        <div>
            <img class="mx-auto h-20 w-auto" src="{{ asset('images/airplane.png') }}" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-bold text-gray-900">
                Trazando el viaje de tus sueños
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Responde las preguntas:
            </p>
        </div>
        <form class="mt-8 space-y-6" action="{{route('form.store')}}"  novalidate method="POST" id="form-stepper">
            @csrf
            <div class="step step-1">
                <div class="rounded-md shadow-sm -space-y-px mb-10">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad-personas">Con quién viajas</label>
                        <select id="quien-viajas" name="quien-viajas" class="mb-5 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="familia">Familia</option>
                            <option value="pareja">Pareja</option>
                            <option value="amigos">Amigos</option>
                            <option value="solo">Solo</option>
                            <option value="trabajo">Compañeros de trabajo</option>
                        </select>
                    </div>
                    <div class="mb-10">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad-personas">Selecciona la cantidad de personas</label>
                        <input type="number" id="cantidad-personas" name="cantidad-personas" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Ingresa la cantidad de personas" min="1" max="10">
                    </div>
                </div>
            </div>
            <div class="step step-2 hidden">
                <div class="rounded-md shadow-sm -space-y-px mb-10">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo-viaje">Tipos de Viaje</label>
                        <select id="tipo-viaje" name="tipo-viaje" class="mb-5 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" id="tipo-viaje">
                          <option value="" disabled selected>Selecciona una opción</option>
                          <option value="placer">Viaje de placer o turismo</option>
                          <option value="negocios">Viaje de negocios</option>
                          <option value="mochilero">Viaje de mochilero</option>
                          <option value="luna-miel">Viaje de luna de miel</option>
                          <option value="estudio">Viaje de estudio o intercambio</option>
                          <option value="crucero">Viaje de crucero</option>
                          <option value="aventura">Viaje de aventura</option>
                          <option value="gastronomico">Viaje gastronómico</option>
                          <option value="religioso">Viaje religioso o de peregrinación</option>
                          <option value="voluntariado">Viaje de voluntariado</option>
                          <option value="retiro-espiritual">Viaje de retiro espiritual o de bienestar</option>
                          <option value="crucero-fluvial">Viaje de crucero fluvial</option>
                          <option value="naturaleza">Viaje de naturaleza o ecoturismo</option>
                        </select>
                      </div>
                      
                    <div>
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad-personas">Lugar de hospedaje preferido</label>
                      <select  id="lugar-hospedaje" name="lugar-hospedaje" class="mb-5 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                          <option value="" disabled selected>Selecciona una opción</option>
                          <option value="hotel">Hotel</option>
                          <option value="hostal">Hostal</option>
                          <option value="resort">Resort</option>
                          <option value="alquilar">Alquileres vacionales(Airbnb)</option>
                      </select>
                    </div>
                </div>
            </div>
            <div class="step step-3 hidden">
                <div class="rounded-md shadow-sm -space-y-px mb-10">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo-viaje">Actividades Preferenciales</label>
                        <select id="actividades" name="actividades" class="mb-5 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" >
                          <option value="" disabled selected>Selecciona una opción</option>
                          <option value="opciones-familiares">Opciones familiares</option>
                          <option value="aire-libre">Aventuras al aire libre</option>
                          <option value="tour-gastronomico">Tours gastronómicos</option>
                          <option value="atracciones-turisticas">Atracciones turísticas</option>
                          <option value="museos-arte">Museos y arte</option>
                          <option value="discotecas">Discotecas</option>
                        </select>
                    </div>
                      
                    <div class="mb-10">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad-personas">Establece el presupuesto</label>
                        <input type="number" id="presupuesto" name="presupuesto" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Ingresa la cantidad de personas" min="1" max="10">
                    </div>

                </div>
            </div>
            <div class="step step-4 hidden">
                <div class="space-y-px mb-10">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad-personas">Selecciona fecha de inicio</label>
                    <div>
                        </label>
                        <input
                        type="date"
                        name="fecha-inicio"
                        id="fecha-inicio"
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                        
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad-personas">Selecciona fecha de fin</label>
                    <div>
                        </label>
                        <input
                        type="date"
                        name="fecha-fin"
                        id="fecha-fin"
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <!-- Botón de "Volver" oculto en el primer paso -->
                <button id="back" type="button" class="hidden col-span-1 w-full justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50">
                    Volver
                </button>

                <button id="signin" type="button" class="col-span-1 w-full justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-lightblue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50" aria-required="true">
                    Siguiente
                </button>
            </div>
            <!-- Botón de "Enviar" oculto en el formulario -->
            <div>
                <button id="form-submit" type="submit" class="hidden w-full justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-lightblue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50" aria-required="true">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        var currentStep = 1;
        var totalSteps = $(".step").length;

        // Al hacer clic en el botón "Siguiente"
        $("#signin").on("click", function (e) {
            e.preventDefault();

            // Realizar la validación de campos aquí
            var currentStepFields = $(".step-" + currentStep + " input, .step-" + currentStep + " select");
            var allFieldsFilled = true;

            currentStepFields.each(function() {
                if ($(this).val() === "") {
                    alert("Por favor, completa todos los campos antes de continuar.");
                    allFieldsFilled = false;
                    return false; // Detener la iteración
                }
            });

            if (!allFieldsFilled) {
                return;
            }

            // Si todos los campos están llenos, proceder al siguiente paso

            // Ocultar el paso actual
            $(".step-" + currentStep).addClass("hidden");

            // Incrementar el paso actual
            currentStep++;

            // Si llegamos al último paso, ocultar el botón "Siguiente" y mostrar el botón "Enviar"
            if (currentStep === totalSteps) {
                $("#signin").addClass("hidden");
                $("#form-submit").removeClass("hidden");
            }

            // Mostrar el siguiente paso
            $(".step-" + currentStep).removeClass("hidden");

            // Mostrar el botón "Volver" si no estamos en el primer paso
            if (currentStep > 1) {
                $("#back").removeClass("hidden");
            }
        });

        // Al hacer clic en el botón "Volver"
        $("#back").on("click", function (e) {
            e.preventDefault();

            // Validación de campos (puedes agregar tu propia validación aquí)

            // Ocultar el paso actual
            $(".step-" + currentStep).addClass("hidden");

            // Decrementar el paso actual
            currentStep--;

            // Si volvemos al primer paso, ocultar el botón "Volver"
            if (currentStep === 1) {
                $("#back").addClass("hidden");
            }

            // Mostrar el paso anterior
            $(".step-" + currentStep).removeClass("hidden");

            // Mostrar el botón "Siguiente"
            $("#signin").removeClass("hidden");
            // Ocultar el botón "Enviar" si volvemos a un paso anterior
            $("#form-submit").addClass("hidden");
        });
    });

</script>
@endpush
