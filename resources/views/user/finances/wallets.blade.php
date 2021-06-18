@extends('layouts.user')

@section('title','Ваши кошельки')

@section('content')

<div class="content_wrapper">
    <h1><img class="icon" src="{{asset('images/icon_5.svg')}}">Ваши кошельки</h1>
    <div class="content form_content">
        <div class="col">
            <div class="wrap long_wrapper">
                <div class="caption_wrapper">
                    <div class="caption">Кошельки для вывода средств</div>
                </div>
                <form class="wallets_form" action="{{ route('wallets.update',$wallet_info )}}" method="post">
                    @csrf
                    
                    <div class="row">
                        <div class="input_caption">Кошелек Ethereum (ETH)</div>
                        <div class="input_wrapper">
                            <input name="eth" placeholder="0x" type="text" value="{{ $wallet_info['eth'] ?? '' }}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input_caption">Кошелек Bitcion (BTC)</div>
                        <div class="input_wrapper">
                            <input name="btc" type="text" value="{{ $wallet_info['btc'] ?? '' }}">
                        </div>
                    </div>
                    <div class="message success">Данные сохранены</div>
                    <div class="message error">Ошибка</div>
                    <input type="submit" class="submit_btn" value="СОХРАНИТЬ">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection