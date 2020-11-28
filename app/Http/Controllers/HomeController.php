<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    
    public function index()
    {
        $data = [
            'titulo'=>"Sua Loja JBL",
            'tipo'=>"home",
            'menu'=>"Home",
            'submenu'=>""
        ];
        return view("client.home");
    }



    
}