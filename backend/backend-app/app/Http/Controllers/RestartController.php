<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestartController extends Controller
{
    public function restartFunction()
    {
       
        return response()->json(['message' => 'Anfrage erfolgreich empfangen']);
    }
}