<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facade\Validator;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    function upload(Request $request){

        $request->validate([
            'name' => 'required|string|unique:files|max:100',
            'file' => 'required|mimes:pdf',
        ]);

//        $article = Article::create($request->all());

        $file = new File($request->all());
        $path = $request->file->store('public/reports');
//        $path = $request->image->storeAs('public/articles', $request->user()->id . '_' . $article->title . '.' . $request->image->extension());

        $file->path = 'reports/' . basename($path);
        $file->save();

        return response()->json($file, 201);
    }

    function download(Request $request){
        // $path = storage_path('app\Archivos\ ');
        // return respose()->download($path);
    }
}
