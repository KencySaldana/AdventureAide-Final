<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Ciudad;
use App\Models\Actividad;
use App\Models\Aerolinea;
use App\Models\Restaurante;
use Illuminate\Http\Request;
use App\Models\TravelPreference;
use App\Models\UserPreference;

class FormController extends Controller
{
    public function index(){
        // Mostrar la vista
        return view('formViaje');
    }
    public function store(Request $request)
    {
        // Validación de campos (puedes agregar tus propias reglas de validación aquí)
        $validatedData = $request->validate([
            'quien-viajas' => 'required',
            'cantidad-personas' => 'required|integer|min:1|max:10',
            'tipo-viaje' => 'required',
            'lugar-hospedaje' => 'required',
            'actividades' => 'required',
            'presupuesto' => 'required|numeric|min:0',
            'fecha-inicio' => 'required|date',
            'fecha-fin' => 'required|date|after_or_equal:fecha-inicio',
        ]);
        $user = auth()->user();
        $userId = $user->id;

        // Crear una nueva instancia del modelo y asignar los valores validados
        $preferencias = new TravelPreference();
        $preferencias->user_id = $userId;
        $preferencias->quien_viajas = $validatedData['quien-viajas'];
        $preferencias->cantidad_personas = $validatedData['cantidad-personas'];
        $preferencias->tipo_viaje = $validatedData['tipo-viaje'];
        $preferencias->lugar_hospedaje = $validatedData['lugar-hospedaje'];
        $preferencias->actividades_preferenciales = $validatedData['actividades'];
        $preferencias->presupuesto = $validatedData['presupuesto'];
        $preferencias->fecha_inicio = $validatedData['fecha-inicio'];
        $preferencias->fecha_fin = $validatedData['fecha-fin'];
        $preferencias->save();

        // Después de guardar las preferencias en el método store
        $preferencias = TravelPreference::find($preferencias->id);
        // Obtener el número de registros en cada tabla
        $numHoteles = Hotel::count();
        $numActividades = Actividad::count();
        $numRestaurantes = Restaurante::count();
        $numCiudades = Ciudad::count();
        $numAerolineas = Aerolinea::count();

        // Generar números aleatorios en base a la cantidad de registros
        $randHotel = rand(1, 30);
        $randActividad = rand(1, 13);
        $randRestaurante = rand(1, 20);
        $randCiudad = rand(1, 3);
        $randAerolinea = rand(1, 10);

        // Obtener registros aleatorios en base a los números aleatorios generados
        $registroAleatorioHotel = Hotel::where('id_hotel', $randHotel)->first();
        $registroAleatorioActividad = Actividad::where('id_actividad', $randActividad)->first();
        $registroAleatorioRestaurante = Restaurante::where('id_restaurante', $randRestaurante)->first();
        $registroAleatorioCiudad = Ciudad::where('id_ciudad', $randCiudad)->first();
        $registroAleatorioAerolinea = Aerolinea::where('id_aerolinea', $randAerolinea)->first();

        // Buscar las preferencias del usuario por el user_id
        $preferenciasUsuario = UserPreference::where('user_id', $userId)->first();
    
       // Pasar las variables a la vista utilizando compact()
        return view('mostrarViaje', compact('preferencias', 'preferenciasUsuario',
            'registroAleatorioHotel',
            'registroAleatorioActividad',
            'registroAleatorioRestaurante',
            'registroAleatorioCiudad',
            'registroAleatorioAerolinea'
        ));
    }
}