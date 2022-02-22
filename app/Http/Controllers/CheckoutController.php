<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\enderecos;
class CheckoutController extends Controller
{
    public function checkout($id){

        if(auth()->user()) {
            $endereco = DB::table('enderecos')->where('enderecos.email', auth()->user()->email)->get();
            if(!$endereco->isNotEmpty())
            {
                $endereco = NULL;
            }

        }else{
            $endereco = NULL;
        }

        return view('checkout', compact('endereco'));
    }
    public function salvarcheckout(Request $request){
        $enderecos = new Enderecos;
        $enderecos->rua = $request->rua;
        $enderecos->email =  auth()->user()->email;
        $enderecos->nome =  auth()->user()->name;
        $enderecos->numero = $request->numero;
        $enderecos->estado = $request->estado;
        $enderecos->cidade = $request->cidade;
        $enderecos->telefone = $request->telefone;
        $enderecos->complemento = $request->complemento;
        $enderecos->save();
        $endereco2 = DB::table('enderecos')->where('enderecos.email', auth()->user()->email)->get();
        return redirect('/minhaconta') ;
    }
}
