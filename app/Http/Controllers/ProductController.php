<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    public function home($id){
        $dados = DB::table('produtos')->join('coperacao', 'produtos.imagem', '=', 'coperacao.imagem')->where('produtos.imagem', $id)->get();
        return view('product', compact('dados'));
    }
}
