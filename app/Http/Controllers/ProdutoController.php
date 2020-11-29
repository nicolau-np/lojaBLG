<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $data = [
            'titulo'=>"Produtos",
            'tipo'=>"view",
            'menu'=>"Produtos",
            'submenu'=>"Todos",
        ];

        return view("client.products", $data);
    }
}