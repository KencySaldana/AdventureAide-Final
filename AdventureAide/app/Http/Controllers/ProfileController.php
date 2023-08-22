<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Funcion para mostrar el perfil del usuario
    public function index()
    {

        // Buscamos al usuario que se encuentra logueado
        $user = auth()->user();

        // Mostrar la vist
        return view('profile.profile', compact('user'));
    }

    // Funcion para actualizar el perfil del usuario
    public function actualizar(Request $request, $id)
    {

        dd($request->all(), $id);

        // Buscamos al usuario en base al id que nos llega por parametro
        $user = User::find($id);


        // Validamos los datos que nos llegan del formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'about' => '',
            'foto' => '',
            'nacimiento' => '',
            'pais' => '',
            'idioma' => '',
        ]);

        // Actualizamos los datos del usuario
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'descripcion' => $request->about,
            'foto' => $request->foto,
            'nacimiento' => $request->nacimiento,
            'pais' => $request->pais,
            'idioma' => $request->idioma,
        ]);

        // Guardamos los cambios
        // $user->save();


        // Redireccionamos al usuario al dashboard
        return redirect()->route('profile');
    }


    public function UsuarioImageStore(Request $request)
    {

        //identificar el archivo que se sube en dropzone
        $imagen = $request->file('file');

        //genera un id unico para cada una de las imagenes que se cargan en el server
        $nombreImagen = Str::uuid() . "." . $imagen->extension();

        //implementar intervention Image 
        $imagenServidor = Image::make($imagen);

        //agregamos efectps de intervention image: indicamos la medida de cada imagen
        $imagenServidor->fit(1000, 1000);

        //movemos la imagen a un lugar fisico del servidor
        $imagenPath = public_path('usuarios') . '/' . $nombreImagen;

        //pasamos la imagen de memoria al server
        $imagenServidor->save($imagenPath);

        ///verificamos que el nombre del archivo se ponga como unico
        return response()->json(['imagen' => $nombreImagen]);
    }
}