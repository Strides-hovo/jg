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
                    <div class="row cols clearfix">
                        <div class="col">
                            <div class="input_caption">Кошелёк PerfectMoney USD</div>
                            <div class="input_wrapper">
                                <input name="PerfectMoney_USD" placeholder="U00000000" type="text" value="{{ $wallet_info['PerfectMoney_USD'] ?? '' }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input_caption">Кошелек PerfectMoney EUR</div>
                            <div class="input_wrapper">
                                <input name="PerfectMoney_EUR" placeholder="E00000000" type="text" value="{{ $wallet_info['PerfectMoney_EUR'] ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input_caption">Кошелек Ethereum (ETH)</div>
                        <div class="input_wrapper">
                            <input name="Ethereum" placeholder="0x" type="text" value="{{ $wallet_info['Ethereum'] ?? '' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input_caption">Кошелёк Tether (USDT)</div>
                        <div class="input_wrapper">
                            <input name="Tether" type="text" value="{{ $wallet_info['Tether'] ?? '' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input_caption">Кошелек Bitcion (BTC)</div>
                        <div class="input_wrapper">
                            <input name="Bitcion" type="text" value="{{ $wallet_info['Bitcion'] ?? '' }}">
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