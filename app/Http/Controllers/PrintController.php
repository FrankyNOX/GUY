<?php

namespace App\Http\Controllers;



use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function print()
    {
        $pdf = PDF::loadView('RELEVES.cra');
        return $pdf->stream('invoice.pdf');
    }
}
