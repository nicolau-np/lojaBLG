<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    
    public function index()
    {
        $data = [
            'titulo'=>"JBL Store - Sua loja Virtual",
            'tipo'=>"home",
            'menu'=>"Home",
            'submenu'=>"",
        ];
        return view("client.home", $data);
    }



    
}