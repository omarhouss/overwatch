<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Redirect;
class RankPricingController extends Controller
{
    public function index()
    {
        $orders = Order::all();    
        return view('admin.dashboard', compact('orders'));
    }
    public function index2()
    {
        $orders = Order::all();
        return view('admin.orders2', compact('orders'));
    }
    public function orderdetail(int $id)
    {
        $order = Order::findOrfail($id);
        return view('admin.orderdetails',compact('order'));
    }

    public function storeOrder(Request $request)
    {
        $validatedData = $request->validate([
            'rank' => 'required|string',
            'wins' => 'required|integer|min:1|max:5',
            'total_price' => 'required|numeric|min:0',
            'service'=>'required|string',
        ]);
    
        $orders = new Order;
        $orders->number = '#'.random_int(1000, 9999);
        $orders->rank = $validatedData['rank'];
        $orders->wins = $validatedData['wins'];
        $orders->total_price = $validatedData['total_price'];
        $orders->service = $validatedData['service'];
        $orders->save();    
        // Redirect the user to a success page or show a success message
        return response()->json($orders, 201);
    }
    public function storeOrder2(Request $request)
    {
        $validatedData = $request->validate([
            'currentrank' => 'required|string',
            'desiredrank' => 'required|string',
            'total_price' => 'required|numeric|min:0',
            'service'=>'required|string',
            'currentNumber'=>'required|numeric',
            'chosenPlatform'=>'required|string',
            'desiredNumber'=>'required|numeric',
            'selectedRole'=>'required|string',
            'selectedServer' => 'required|string',
        ]);
        $orders = new Order;
        $orders->number = '#'.random_int(1000, 9999);
        $orders->currentrank = $validatedData['currentrank'];
        $orders->desiredrank = $validatedData['desiredrank'];
        $orders->total_price = $validatedData['total_price'];
        $orders->service = $validatedData['service'];
        $orders->platform = $validatedData['chosenPlatform'];
        $orders->currentnumber = $validatedData['currentNumber'];
        $orders->desirednumber = $validatedData['desiredNumber'];
        $orders->role = $validatedData['selectedRole'];
        $orders->server = $validatedData['selectedServer'];
        $orders->save();
        return response()->json($orders, 201);
    }
    public function storeOrder3(Request $request)
    {
        $validatedData = $request->validate([
            'wins' => 'required|integer|min:1|max:5',
            'total_price' => 'required|numeric|min:0',
            'service'=>'required|string',
        ]);
        $orders = new Order;
        $orders->number = '#'.random_int(1000, 9999);      
        $orders->wins = $validatedData['wins'];
        $orders->total_price = $validatedData['total_price'];
        $orders->service = $validatedData['service'];
        $orders->save();
    }
    public function payments(Request $request){

        $payment_id = '#'.time();

        $orders = new Order;
        $orders->number = $payment_id;
        $orders->rank = '';
        $orders->currentrank = '';
        $orders->desiredrank = '';
        $orders->currentnumber = 0;
        $orders->desirednumber = 0;
        $orders->wins = 0;
        $orders->platform = '';
        $orders->role = '';
        $orders->server = '';
        $orders->service = '';
        $orders->total_price = $request->input('totalAmt');
        $orders->status = 0;
        $orders->save();

       $SECRET_KEY = env('SELIX_SECRET_KEY');
       $url = env('SELIX_PAYMENT_LINK');
       $return_url = env('SELIX_PAYMENT_RETURN_LINK');
       $currency = $request->input('currency');
       $totalAmount = $request->input('totalAmt');
       $mail = 'test@gmail.com';

    $data = json_encode(array(
        "custom_fields" => array('payment_id'=>$payment_id),
        "title" => "Boost",
        "product_id" => null,
        "gateway" => null,
        "value" => $totalAmount,
        "currency" => "USD",
        "quantity" => 1,
        "email" => $mail,
        "white_label" => false,
        "return_url" => $return_url //not sure what this is supposed to do...
    ));

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       // "Content-type: application/x-www-form-urlencoded\r\n" .
        'Authorization: Bearer ' . $SECRET_KEY
    ));
     $response = curl_exec($curl);
    curl_close($curl);
 //   print_r($response);
    $finalUrl = strval(json_decode($response)->data->url);
    return Redirect::to($finalUrl);
     header("Location: $finalUrl"); 
    }
    public function sellix_webhook_response(){
        $response_data_arr = file_get_contents('php://input');
        $response = json_decode($response_data_arr,true);
        $file = storage_path().'/logs/sellix_webhook.log';
        ob_start();
        echo '============================ '.date('Y-m-d h:i:s').' ============================'."\n";
        print_r($response);
        $res = ob_get_clean();
        file_put_contents($file, $res, FILE_APPEND);
        if(isset($response['event'])&&$response['event']=='order:paid'&&isset($response['data'])&&!empty($response['data'])&&is_array($response['data'])&&isset($response['data']['status'])&&$response['data']['status']=='COMPLETED'&&isset($response['data']['custom_fields']['payment_id'])){
            $order = Order::where('number',$response['data']['custom_fields']['payment_id'])->first();
            $order->status = 1;
            $order->save();
        }
    }
}    
