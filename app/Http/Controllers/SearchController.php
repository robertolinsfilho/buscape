<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function search($elemento){
        $pesquisas = DB::table('coperacao')->where('coperacao.nome', 'like', '%'.$elemento.'%')->get();
        return view('search', compact('pesquisas'));
    }
}
