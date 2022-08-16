<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\MailResource;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function assignment(Request $request){
        // $info = [
        //     'title' => 'Usuario Asignado',
        //     'body' => '220801',
        //     'nomCli' => 'SUPERMAXI',
        //     'dirCli' => "RAFALE LEON LARREZA Y VIZCAYA",
        //     'cont' => 'EDUARDO LOPEZ',
        //     'telf' => '0978885465',
        //     'email' => 'henovar12@gmail.com'
        // ];
       
        $info = new MailResource($request);
        // $info = [
        //     'codPro' => $aux->codPro,
        //     'metrologist' => $aux->metrologist,
        //     'nomCli' => $aux->nomCli,
        //     'dirCli' => $aux->dirCli,
        //     'cont' => $aux->cont,
        //     'telf' => $aux->telf,
        //     'email' => $aux->email,
        //     // 'balances' => Project::find($this->id)->certificates
        // ];

        Mail::to('henovar12@gmail.com')->send(new \App\Mail\CreateProjectMail($info));
        // Mail::to()->send(new \App\Mail\CreateProjectMail($info));


        // return response()->json('Notificacón exitosa', 202);
        return response()->json($info, 202);
    }
}
