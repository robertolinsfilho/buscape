<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use mysql_xdevapi\Exception;

class HomeController extends Controller
{
    public function home(){
        $celulares = DB::table('coperacao')->where('coperacao.categoria', '57')->get();
        $computadores = DB::table('coperacao')->where('coperacao.categoria', '96')->get();
        $tv = DB::table('coperacao')->where('coperacao.categoria', '2')->get();
        $geladeira = DB::table('coperacao')->where('coperacao.categoria', '3')->get();
        $fritadeira = DB::table('coperacao')->where('coperacao.categoria', '29')->get();
        $all = DB::table('coperacao')->get();
        return view('home', compact('celulares', 'computadores','tv','geladeira','fritadeira','all')) ;
    }
    public function minhaconta(){
        $email = auth()->user()->email;
        $results = DB::table('users')->where('users.email', $email)->get();

        $endereco = DB::table('enderecos')->where('enderecos.email', $email)->get();
        $endereco2 = DB::table('enderecos')->where('enderecos.email', $email)->get();
        $coperacao = DB::table('coperacao')->where('coperacao.email', $email)->get();

        $produto = DB::table('produtos')->get();

        return view('dashboard' ,compact('results','endereco','endereco2','produto','coperacao')) ;
    }


}
