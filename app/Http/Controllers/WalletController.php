<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{


    public function replenish(Request $request )
    {
        $cod = DB::table('currency')->where('cod',$request->payment)->first();
        // $login = DB::table('wallet_info')->select($cod->cod)->where('user_id',Auth::user()->id)->first();


        if ( is_object($cod) ){
            switch ($cod->cod){
                case 'eth':
                    $key = 'eff6fac20c-0b9e7bef48-a4274e5742-264342f418';
                    $ch1 = curl_init();
                    curl_setopt($ch1, CURLOPT_URL, 'https://etherapi.net/api/v2/.give?key='.$key);
                    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
                    $address = curl_exec($ch1);
                    curl_close($ch1);
                    $address = json_decode($address,1);
                    $address['amount'] = $request->amount;

                    if ( key_exists('result',$address)  ){
                        DB::table('orders')
                            ->insert(
                                [
                                    'created_at'    => date('Y-m-d H:i:s'),
                                    'user_id'       => Auth::user()->id,
                                    'currency_id'  => $cod->id,
                                    'to'            => "$address[result]",
                                    'cost'          => $request->amount,
                                    'action'        => 'add'
                                ]
                            );

                    }
                    exit(json_encode( $address ));
                    break;
                case 'btc':
                    $key = 'c7df5f2204-3633c4c456-fb3d7d6e93-ef5c61a3aa';
                    $ch1 = curl_init();
                    curl_setopt($ch1, CURLOPT_URL, 'https://cryptocurrencyapi.net/api/.give?key='. $key . '&currency=BTC');
                    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
                    $address = curl_exec($ch1);
                    curl_close($ch1);
                    $address = json_decode($address,1);
                    $address['amount'] = $request->amount;
                    //dd($address);
                    if ( key_exists('result',$address)  ){
                        DB::table('orders')
                            ->insert(
                                [
                                    'created_at'    => date('Y-m-d H:i:s'),
                                    'user_id'       => Auth::user()->id,
                                    'currency_id'  => $cod->id,
                                    'to'            => "$address[result]",
                                    'cost'          => $request->amount,
                                    'action'        => 'add'
                                ]
                            );

                    }
                    exit(json_encode( $address ));
                    break;
            }
        }
        else{
            exit(json_encode('error'));
        }
    }









    public function history( Request $request )
    {
        $orders = DB::table('orders')->where('status','0')->get()->toArray();
        $key = 'c7df5f2204-3633c4c456-fb3d7d6e93-ef5c61a3aa';
       /* $p = 'https://cryptocurrencyapi.net/api/.track?key='.$key.'&currency=BTC&address='. $order->to .'&amount='. $order->cost .'&tag=oper12';
        $d = 'https://cryptocurrencyapi.net/api/.track?key='.$key.'&currency=BTC&address='. $order->to .'&amount='. $order->cost;*/
        foreach ($orders as $k => $order) {//btc
            // curl_setopt($ch1, CURLOPT_URL, 'https://cryptocurrencyapi.net/api/.track?key='.$key.'&currency=BTC&address='. $order->to .'&amount='. $order->cost .'&id='.$order->id);
            // curl_setopt($ch1, CURLOPT_URL, 'https://cryptocurrencyapi.net/api/.balance?key='. $key .'&currency=BTC');
            $ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_URL, 'https://cryptocurrencyapi.net/api/.balance?key='. $key .'&currency=BTC');
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
            $address[] = curl_exec($ch1);
            curl_close($ch1);

        }
           


        
        debugs($address);

    }










    public function transfer()
    {
    }





}
