<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\pokemon;


class PDFController extends Controller
{
    public function PDF(){
        $reporte = pokemon::all();
        $pdf = PDF::loadView('reporte', compact('reporte'));
        return $pdf->download('reporte.pdf');
    }
}
