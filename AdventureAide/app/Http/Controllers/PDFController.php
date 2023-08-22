<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generarPDF()
    {
        $ventas = CarritoProducto::where('carrito_id', $id)->get();
        $carrito = Carrito::find($id);
        
        $data = [
            'ventas' => $ventas,
            'carrito' => $carrito
        ];

        $pdf = PDF::loadView('detallesVentaPDF', $data);

        return $pdf->stream('archivo.pdf');
    }
}
