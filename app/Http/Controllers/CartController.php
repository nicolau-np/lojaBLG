<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $data = [
            'titulo'=>"Carrinho",
            'tipo'=>"view",
            'menu'=>"Carrinho",
            'submenu'=>"",
        ];

        return view("client.cart", $data);
    }
}