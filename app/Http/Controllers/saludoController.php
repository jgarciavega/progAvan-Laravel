<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class saludoController extends Controller
{

    public function saludar ($name) {
        return "¡Hola, $name!";
    }
    
    public function sumar($num1,$num2) {
        return  $num1+$num2 ;
    }
    
    public function restar($num1,$num2) {
        return  $num1-$num2 ;
    }

    public function multiplicar($num1,$num2) {
        return  $num1*$num2 ;
    }

    public function dividir($num1,$num2) {
        return  $num1/$num2 ;
    }
    
}
