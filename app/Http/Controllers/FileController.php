<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class FileController extends Controller
{
    public function index(Request $request){
        $path = 'C:\archivos_metrologia\Informes\2022\01 - Enero\ICC-220101 EQF EL QUESO FRANCES S.A\OEM_Sam_Hua_Xia_JULY(10)_22 (1).pdf';

        header("Content-type: application/pdf");
        header("Content-Length: " . filesize($path));
  
// Send the file to the browser.
// readfile($path);
//         $path = 'C:\archivos_metrologia\Informes\2022\01 - Enero\ICC-220101 EQF EL QUESO FRANCES S.A\OEM_Sam_Hua_Xia_JULY(10)_22 (1).pdf';
        $directories = readfile($path);
        return $directories;
    }
}
