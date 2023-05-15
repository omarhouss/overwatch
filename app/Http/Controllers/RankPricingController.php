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
        $secretKey = SELIX_SECRET_KEY;
        print_r($secretKey);exit;
        $currency = $request->input('currency');
        $totalAmount = $request->input('totalAmt');
       
        $mail = 'test@gmail.com';
    $url = "https://dev.sellix.io/v1/payments";

    $data = json_encode(array(
        "title" => "Boost",
        "product_id" => null,
        "gateway" => "STRIPE",
        "value" => $totalAmount,
        "currency" => "USD",
        "quantity" => 1,
        "email" => $mail,
        "white_label" => false,
        "return_url" => "https://dev.sellix.io/v1/return" //not sure what this is supposed to do...
    ));

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       // "Content-type: application/x-www-form-urlencoded\r\n" .
        'Authorization: Bearer ' . 'm8MSpdIIDnKbJWUPFo5pkEwsNjwY4A4nElLfAyW1hoFULUrfxS5KFpyiGxOXIVXn'
    ));
     $response = curl_exec($curl);
    curl_close($curl);
    $finalUrl = strval(json_decode($response)->data->url);
    return Redirect::to($finalUrl);
     header("Location: $finalUrl"); 
    }
}    
