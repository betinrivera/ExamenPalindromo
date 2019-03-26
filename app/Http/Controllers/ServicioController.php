<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Pais;
use App\Estado;


class ServicioController extends Controller
{
        public function espalindromo($cadena) {
            
        $separar = explode(" ", strtolower($cadena));
        $nuevo = "";

        foreach($separar as $palabra)
        {
            trim($palabra);
            $nuevo .= $palabra;
        }

        if ($nuevo == strrev($nuevo))
        {
            return "Simon";
        }
        else 
        {
            return "Nel";
        }
    }
}