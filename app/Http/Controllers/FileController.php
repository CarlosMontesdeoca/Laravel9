<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class FileController extends Controller
{
    public function index($year, $month, $project, $file){

        $path = 'C:\archivos_metrologia\Informes\\' . $year . '\\' . $month . '\\' . $project . '\\' . $file;

        header("Content-type: application/pdf");
        header("Content-Length: " . filesize($path));

        @readfile($path);
    }
}
