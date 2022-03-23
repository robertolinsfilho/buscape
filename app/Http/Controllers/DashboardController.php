<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enderecos;
use App\Models\coperacao;
use DB;
class DashboardController extends Controller
{
    public function salvarendereco(Request $request){
        $enderecos = new Enderecos;
        $enderecos->rua = $request->rua;
        $enderecos->email =  auth()->user()->email;
        $enderecos->nome =  auth()->user()->name;
        $enderecos->numero = $request->numero;
        $enderecos->estado = $request->estado;
        $enderecos->cidade = $request->cidade;
        $enderecos->telefone = $request->telefone;
        $enderecos->complemento = $request->complemento;
        if($request->hasFile('foto') && $request->file('foto')->isValid()){
            $requestImage = $request->foto;
            $extension = $requestImage->extension();
            $imageName = $requestImage->getClientOriginalName();
            $request->foto->move(public_path('imagens'), $imageName);
            $enderecos->foto = $imageName;
        }
        $enderecos->save();
        $endereco2 = DB::table('enderecos')->where('enderecos.email', auth()->user()->email)->get();
        return redirect('/minhaconta') ;

    }
    public function salvarcoperacao(Request $request){
        $coperacao = new Coperacao;
        $coperacao->email =  auth()->user()->email;
        $coperacao->nome = $request->nome;
        $coperacao->imagem = $request->imagem;
        $coperacao->preco = $request->preco;
        $coperacao->marca = $request->marca;
        $coperacao->quantidade = $request->quantidade;
        $coperacao->tempo = $request->tempo;
        $coperacao->categoria = $request->categoria;

        $coperacao->save();

        return redirect('/minhaconta') ;

    }
    public function produtos(){
        $id = $_GET['msg'];
        $resultproduto = DB::table('produtos')->where('produtos.imagem', $id)->get();

     foreach ($resultproduto as $result){
         $id = $result->id;
         $nome = $result->nome;
         $marca = $result->marca;
         $preco = $result->preco;
         $imagem = $result->imagem;
         $categoria = $result->categoria;

     }
$array = $id.','.$nome.','.$marca.','.$preco.','.$imagem.','.$categoria;
echo $array;
    }
}
