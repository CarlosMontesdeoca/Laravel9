<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonController extends Controller
{
    public function run($codPro){
        $command = escapeshellcmd('python C:\Tester\Python\testpython.py' . " {$codPro}");
        $output = shell_exec($command);
        return $output;
    }
}
