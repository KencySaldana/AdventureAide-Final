@extends('layouts.app')
@section('body')
    <div class="min-h-screen w-full flex items-stretch bg-blue-100">
        <div style="width: 500px; flex-shrink: 0;">
            <img style="object-fit: cover; height: 100vh; width: 500px;"
                src="https://images.unsplash.com/photo-1464746133101-a2c3f88e0dd9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1327&q=80">
        </div>
        <div class="flex-1 overflow-y-auto px-4 sm:px-6 lg:px-8">
            {{-- <img class="mx-auto h-20 w-auto" src="{{ asset('images/airplane.png') }}" alt="Workflow"> --}}
            <h2 class="mt-6 text-center text-3xl font-bold text-gray-900">
                Trazando el viaje de tus sueños
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Antes de comenzar responde las preguntas:
            </p>

            <form class="mt-8 space-y-6" method="POST" action="{{ route('user-preferences.store') }}" id="form-stepper">
                @csrf
                <div class="step step-1">
                    <div class="rounded-md shadow-sm -space-y-px mb-10">
                        <div class="mb-10">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="has_allergies">¿Cuentas con
                                alergias?</label>
                            <input type="checkbox" name="has_allergies" id="has_allergies"
                                class="form-checkbox h-5 w-5 text-blue-600">
                        </div>
                        <div class="mb-10">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="allergy_type">¿Qué tipo de
                                alergia?</label>
                            <input type="text" name="allergy_type" id="allergy_type" class="forms_field-input">
                        </div>

                    </div>
                </div>
                <div class="step step-2 hidden">
                    <div class="rounded-md shadow-sm -space-y-px mb-10">
                        <div class="mb-10">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="diet_type">¿Qué tipo de
                                alimentación consumes?</label>
                            <div class="flex space-x-4">
                                <button type="button"
                                    class="option flex flex-col items-center border p-2 rounded hover:bg-gray-200 cursor-pointer"
                                    data-value="vegan">
                                    <img class="w-32 h-32" src="{{ asset('images/vegana.jpg') }}" alt="Vegan">
                                    <span class="mt-2 text-center">Vegana</span>
                                </button>
                                <button type="button"
                                    class="option flex flex-col items-center border p-2 rounded hover:bg-gray-200 cursor-pointer"
                                    data-value="vegetarian">
                                    <img class="w-32 h-32" src="{{ asset('images/vegetariana.jpg') }}" alt="Vegetarian">
                                    <span class="mt-2 text-center">Vegetariana</span>
                                </button>
                                <button type="button"
                                    class="option flex flex-col items-center border p-2 rounded hover:bg-gray-200 cursor-pointer"
                                    data-value="carnivore">
                                    <img class="w-32 h-32" src="{{ asset('images/carnivoro.jpg') }}" alt="Carnivore">
                                    <span class="mt-2 text-center">Carnívora</span>
                                </button>
                            </div>
                            <input type="hidden" name="diet_type" id="diet_type" value="">
                        </div>
                    </div>
                </div>

                {{-- Campos oculto para pasar el id del usuario autenticado --}}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="grid grid-cols-2 gap-4">
                    <!-- Botón de "Volver" oculto en el primer paso -->
                    <button id="back" type="button"
                        class="hidden col-span-1 w-full justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50">
                        Volver
                    </button>

                    <button id="signin" type="button"
                        class="col-span-1 w-full justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-lightblue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50"
                        aria-required="true">
                        Siguiente
                    </button>
                </div>
                <!-- Botón de "Enviar" oculto en el formulario -->
                <div>
                    <button id="form-submit" type="submit"
                        class="hidden w-full justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-lightblue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50"
                        aria-required="true">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var currentStep = 1;
            var totalSteps = $(".step").length;

            // Al hacer clic en el botón "Siguiente"
            $("#signin").on("click", function(e) {
                e.preventDefault();

                // Validación de campos (puedes agregar tu propia validación aquí)
                console.log("entro a siguiente");
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
            $("#back").on("click", function(e) {
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

    <script>
        document.querySelectorAll('.option').forEach(function(option) {
            option.addEventListener('click', function(e) {
                // Deseleccionar otros botones
                document.querySelectorAll('.option').forEach(function(btn) {
                    btn.classList.remove('bg-gray-300');
                });

                // Seleccionar el botón actual
                e.currentTarget.classList.add('bg-gray-300');

                // Establecer el valor en el campo oculto
                var value = e.currentTarget.getAttribute('data-value');
                document.getElementById('diet_type').value = value;
            });
        });
    </script>
@endpush
