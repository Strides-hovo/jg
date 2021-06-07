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
                <form class="wallets_form" action="savewallets">
                    <div class="row cols clearfix">
                        <div class="col">
                            <div class="input_caption">Кошелёк PerfectMoney USD</div>
                            <div class="input_wrapper">
                                <input name="pmusd" placeholder="U00000000" type="text" class="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input_caption">Кошелек PerfectMoney EUR</div>
                            <div class="input_wrapper">
                                <input name="pmeur" placeholder="E00000000" type="text" class="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input_caption">Кошелек Ethereum (ETH)</div>
                        <div class="input_wrapper">
                            <input name="etr" placeholder="0x" type="text" class="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input_caption">Кошелёк Tether (USDT)</div>
                        <div class="input_wrapper">
                            <input name="usdt" type="text" class="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input_caption">Кошелек Bitcion (BTC)</div>
                        <div class="input_wrapper">
                            <input name="btc" type="text" class="">
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