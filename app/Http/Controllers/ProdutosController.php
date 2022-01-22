<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
       return view('produtos/produto');
    }

    public function show($id)
    {
       return view('produtos/produtos',[
           'id' => $id
        ]);
    }
}
