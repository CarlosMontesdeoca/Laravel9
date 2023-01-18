<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facade\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    function upload(Request $request){
        $result = $request->file('file')->store('Archivos');
        return [ "result"->$result];
    }

    function download(Request $request){
        $path = storage_path('app\Archivos\ ');
        return respose()->download($path);
    }
}
