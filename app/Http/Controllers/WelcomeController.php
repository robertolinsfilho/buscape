<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use DB;
class WelcomeController
{
 public function __invoke(){

     $busca = 'arcondicionado';
     $categoria = '445';
     $main =  'https://www.jacotei.com.br/busca/?cids=445&bids=&fids=&n=32&p=3';
     $dadosSite = file_get_contents($main);
     $var2 = array();
     $valor2 = array();
     $marca2 = array();
     $imagens2 = array();


for ($x =1;$x < 33; $x++){
    $produtos = new Produtos;
    $produtos->categoria = $categoria;
    $var1 = explode('<h3 class="text-center tituloProdutosNovos">',$dadosSite);
    $var2[$x]  = explode("</h3>",$var1[$x]);

    $valor1 = explode('<strong><span class="faixa_preco">R$</span>',$dadosSite);
    $valor2[$x]  = explode('</strong>',$valor1[$x]);
    $produtos->preco = $valor2[$x][0];
    $marca1 = explode('class="linkMarca">',$dadosSite);
    $marca2[$x] =explode('</p>',$marca1[$x]);
    $marca = strval($marca2[$x][0]);
    $marca = substr($marca,0 , -11);
    $produtos->marca = $marca;
    $imagens1 = explode('data-original=',$dadosSite);
    $imagens2[$x] =explode('</a>',$imagens1[$x]);
    $link = strval($imagens2[$x][0]);
    $link = substr($link, 1);
    $link = str_replace(array(">", "'", '"','//','https:'), '', $link);
    $nome = strval($var2[$x][0]);
    $nome = substr($nome, strrpos($nome, '""') + 3);
    $nome = substr($nome,0 , -10);
    $idimagem = rand(1,100000000000);
echo $nome;
    $produtos->nome = $nome;
    $produtos->imagem = $idimagem;
    $url = substr($link, 0, 100);;
    $url = trim($url);
    $ch = curl_init($url);
    $fp = fopen('imagens/'.$idimagem.'.jpg', 'wb');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_exec($ch);
    curl_close($ch);
    fclose($fp);
    $produtos->save();
}



     //return view('welcome',  compact('var2', 'valor2', 'marca2', 'imagens2' )) ;
 }
}
