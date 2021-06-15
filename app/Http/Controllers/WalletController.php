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
        $login = DB::table('wallet_info')->select($cod->cod)->where('user_id',Auth::user()->id)->first();

        switch ($cod->cod){
            case 'eth':
                $key = 'd67c804843-29ecf1b13d-86596c9b53-76b530ce75';
                $url = 'https://etherapi.net/api/v2/';
                $from = '0x995Ae2aDbd02d8F202be84550FF08D8830d49Ff4';


                $ch1 = curl_init();
                $ch2 = curl_init();
                curl_setopt($ch1, CURLOPT_URL, 'https://etherapi.net/api/v2/.give?key='.$key);
                curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
                $address = curl_exec($ch1);
                curl_close($ch1);

                $u = 'https://etherapi.net/api/v2/.send?key='. $key .'&address='.$address .'&amount=0.0035';

                curl_setopt($ch2, CURLOPT_URL, $u);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
                $res = curl_exec($ch2);
                dd( $res );
                echo 'eth';
            break;
            case 'btc':
                echo 'btc';
            break;
        }








//        dd($cod->id);
    }

    public function transfer()
    {

    }





}
