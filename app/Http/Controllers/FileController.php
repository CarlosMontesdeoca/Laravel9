<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller{
    
    public function upload(Request $request) {
        $request->file('excel')->store('public');
        return response()->json('success', 201);
    }
}
