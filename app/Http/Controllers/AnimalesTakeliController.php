<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalesTakeliController extends Controller
{
    public function getAnimales(){
        $animales = ['Takeli', 'Leon', 'Gazela', 'Hiena', 'Simba'];
        return response()->json(['mensaje' => 'Estos son mis animales', 'datos' => $animales]);
    }
}
