<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\enderecos;
require_once '../vendor/autoload.php';

use Safe2Pay\API\PaymentRequest;
use Safe2Pay\Models\Payment\BankSlip;
use Safe2Pay\Models\Payment\CreditCard;
use Safe2Pay\Models\Transactions\Transaction;
use Safe2Pay\Models\General\Customer;
use Safe2Pay\Models\General\Product;
use Safe2Pay\Models\General\Address;

use Safe2Pay\Models\Core\Config as Enviroment;

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

        $enviroment = new Enviroment();
        $enviroment->setAPIKEY('F238F433563C4A27BB78AC392ADEB528');
      //  3334CDD348C74B94B1956CAEB05C45BE317CD6C5ACD84B6F9F4A1ACDCB8C8A56
//Inicializar método de pagamento
        $payload  = new Transaction();
//Ambiente de homologação
        $payload->setIsSandbox(true);
//Descrição geral
        $payload->setApplication("Teste SDK PHP");
//Nome do vendedor
        $payload->setVendor("João da Silva");
//Url de callback
        $payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

//Código da forma de pagamento
// 1 - Boleto bancário
// 2 - Cartão de crédito
// 3 - Criptomoeda
// 4 - Cartão de débito
        $payload->setPaymentMethod("2");

        $CreditCard = new CreditCard("João da Silva", "5484375429225691", "03/2024", "367");

//Objeto de pagamento - para boleto bancário
        $payload->setPaymentObject($CreditCard);

        $Products = array();

        $payloadProduct = new Product();
        $payloadProduct->setCode(1);
        $payloadProduct->setDescription("Produto 1");
        $payloadProduct->setUnitPrice(2.50);
        $payloadProduct->setQuantity(2);

        array_push($Products, $payloadProduct);

        $payload->setProducts($Products);

//Customer
        $Customer =  new Customer();
        $Customer->setName("Teste Cliente");
        $Customer->setIdentity("01579286000174");
        $Customer->setEmail("Teste@Teste.com.br");
        $Customer->setPhone("51999999999");

        $Customer->Address = new Address();
        $Customer->Address->setZipCode("90620000");
        $Customer->Address->setStreet("Avenida Princesa Isabel");
        $Customer->Address->setNumber("828");
        $Customer->Address->setComplement("Lado B");
        $Customer->Address->setDistrict("Santana");
        $Customer->Address->setStateInitials("RS");
        $Customer->Address->setCityName("Porto Alegre");
        $Customer->Address->setCountryName("Brasil");


        $payload->setCustomer($Customer);

        $response  = PaymentRequest::CreatePayment($payload);
       //dd($payload);
        dd($response);

    }
    public function boleto(Request $request){

        $enviroment = new Enviroment();
        $enviroment->setAPIKEY('x-api-key');
        
        //Inicializar método de pagamento
        $payload  = new Transaction();
        //Ambiente de homologação
        $payload->setIsSandbox(true);
        //Descrição geral 
        $payload->setApplication("Teste SDK PHP");
        //Nome do vendedor
        $payload->setVendor("João da Silva");
        //Url de callback
        $payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");
        
        //Código da forma de pagamento
        // 1 - Boleto bancário
        // 2 - Cartão de crédito
        // 3 - Criptomoeda
        // 4 - Cartão de débito 
        $payload->setPaymentMethod("1");
        
        //Informa o objeto de pagamento
        $BankSlip = new BankSlip();
        //Data de vencimento
        $BankSlip->setDueDate("16/10/2019");
        //Instrução
        $BankSlip->setInstruction("Instrução de Exemplo");
        //Multa
        $BankSlip->setPenaltyRate(2.00);
        //Juros
        $BankSlip->setInterestRate(4.00);
        //Cancelar após o vencimento
        $BankSlip->setCancelAfterDue(false);
        //Pagamento parcial
        $BankSlip->setIsEnablePartialPayment(false);
        //Mensagens
        $BankSlip->setMessage(array(
            "mensagem 1",
            "mensagem 2",
            "mensagem 3"
        ));
        
        //Objeto de pagamento - para boleto bancário
        $payload->setPaymentObject($BankSlip);
        
        $Products = array();
        
         $payloadProduct = new Product();
         $payloadProduct->setCode(1);
         $payloadProduct->setDescription("Produto 1");
         $payloadProduct->setUnitPrice(2.50);
         $payloadProduct->setQuantity(2);
        
         array_push($Products, $payloadProduct);
        
        $payload->setProducts($Products);
        
        //Customer
        $Customer =  new Customer();
        $Customer->setName("Teste Cliente");
        $Customer->setIdentity("01579286000174");
        $Customer->setEmail("Teste@Teste.com.br");
        $Customer->setPhone("51999999999");
        
        $Customer->Address = new Address();
        $Customer->Address->setZipCode("90620000");
        $Customer->Address->setStreet("Avenida Princesa Isabel");
        $Customer->Address->setNumber("828");
        $Customer->Address->setComplement("Lado B");
        $Customer->Address->setDistrict("Santana");
        $Customer->Address->setStateInitials("RS");
        $Customer->Address->setCityName("Porto Alegre");
        $Customer->Address->setCountryName("Brasil");
        
        
        $payload->setCustomer($Customer);
        
        $response  = PaymentRequest::CreatePayment($payload);

    }
}
