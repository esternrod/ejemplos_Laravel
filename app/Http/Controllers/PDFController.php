<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class PDFController extends Controller
{
   
    public function generatePDF()
    {
        $data = [
        'title' => 'Ficha del Usuario',
        'heading' => 'Datos Personales',
        'content' => 'Aquí deberían recuperarse los datos del
        usuario desde la Base de Datos.'
 ];
    $pdf = PDF::loadView('/panel/lista_productos/myPDF', $data);

    return $pdf->download('miarchivo.pdf');}    
}
