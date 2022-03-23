<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\enderecos;
class CheckoutController extends Controller
{
    public function checkout($id){
        $produto = DB::table('produtos')->where('produtos.imagem', $id)->get();
        if(auth()->user()) {
            $endereco = DB::table('enderecos')->where('enderecos.email', auth()->user()->email)->get();



            if(!$endereco->isNotEmpty())
            {
                $endereco = NULL;
            }

        }else{
            $endereco = NULL;
        }

        return view('checkout', compact('endereco', 'produto'));
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
    public function process_payment(Request $request){

        require_once '../vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-7594661504459778-030800-ac588eece63cfdbc2c8420a8928ebdfd-1039744168");

    $payment = new MercadoPago\Payment();
   $payment->transaction_amount = (float)$_POST['transactionAmount'];
    $payment->token = $_POST['token'];
    $payment->description = $_POST['description'];
    $payment->installments = (int)$_POST['installments'];
    $payment->payment_method_id = $_POST['paymentMethodId'];
    $payment->issuer_id = (int)$_POST['issuer'];

    $payer = new MercadoPago\Payer();
    $payer->email = $_POST['cardholderEmail'];
    $payer->identification = array(
        "type" => $_POST['identificationType'],
        "number" => $_POST['identificationNumber']
    );
    $payer->first_name = $_POST['cardholderName'];
    $payment->payer = $payer;

    $payment->save();

    $response = array(
        'status' => $payment->status,
        'status_detail' => $payment->status_detail,
        'id' => $payment->id
    );
    echo json_encode($response);


    }
}
