<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produto;

class ProdutoController extends Controller
{
    public function Show(Produto $produto)
    {
        return view('produto', [
            "produto" => $produto
        ]);
    }


}
