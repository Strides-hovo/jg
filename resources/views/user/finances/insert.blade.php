@extends('layouts.user')

@section('title','способа оплаты')

@section('content')

    <div class="content_wrapper">
        <h1><img class="icon" src="{{asset('images/icon_2.svg')}}">Выбор способа оплаты для пополнения баланса</h1>
        <div class="content adding_content">
            <div class="wrapper_1_3">
                <div class="wrap">
                    <div class="name">Платежный способ Ethereum Wallet</div>
                    <div class="delay">обработка: моментально</div>
                    <img class="pict" src="{{asset('images/ethereum.svg')}}">
                    <div class="subname">Ethereum Кошелёк</div>
                    <div class="fee">Комиссия: 0%</div>
                    <div class="add_btn" data-payment="eth" data-cur="ETH">Пополнить через Ethereum</div>
                </div>
            </div>
            <div class="wrapper_1_3">
                <div class="wrap">
                    <div class="name">Платежный способ Bitcoin</div>
                    <div class="delay">обработка: моментально</div>
                    <img class="pict" src="{{asset('images/pay_bitcoin.svg')}}">
                    <div class="subname">Bitcoin (BTC)</div>
                    <div class="fee">Комиссия: 0%</div>
                    <div class="add_btn" data-payment="BTC" data-cur="BTC">Пополнить через BTC</div>
                </div>
            </div>
            <div class="wrapper_1_3">
                <div class="wrap">
                    <div class="name">Платежный способ Яндекс Деньги</div>
                    <div class="delay">обработка: моментально</div>
                    <img class="pict" src="{{asset('images/pay_yandex.svg')}}">
                    <div class="subname">Яндекс Деньги (ЮMoney)</div>
                    <div class="fee">Комиссия: 0.5%</div>
                    <div class="add_btn" data-payment="Яндекс" data-cur="RUB">Пополнить через Яндекс</div>
                </div>
            </div>
            <div class="wrapper_1_3">
                <div class="wrap">
                    <div class="name">Платежный способ PerfectMoney</div>
                    <div class="delay">обработка: моментально</div>
                    <img class="pict" src="{{asset('images/pay_perfect.svg')}}">
                    <div class="subname">Perfect Money</div>
                    <div class="fee">Комиссия: 0%</div>
                    <div class="add_btn" data-payment="PerfectMoney" data-cur="USD">Пополнить через PerfectMoney</div>
                </div>
            </div>
            <div class="wrapper_1_3">
                <div class="wrap">
                    <div class="name">Платежный способ PayPal</div>
                    <div class="delay">обработка: моментально</div>
                    <img class="pict" src="{{asset('images/pay_paypal.svg')}}">
                    <div class="subname">PayPal</div>
                    <div class="fee">Комиссия: 0%</div>
                    <div class="add_btn" data-payment="PayPal" data-cur="EUR">Пополнить через PayPal</div>
                </div>
            </div>
            <div class="wrapper_1_3">
                <div class="wrap">
                    <div class="name">Платежный способ банковская карта</div>
                    <div class="delay">обработка: моментально</div>
                    <img class="pict" src="{{asset('images/pay_card.svg')}}">
                    <div class="subname">Карта Visa / MasterCard</div>
                    <div class="fee">Комиссия: 0%</div>
                    <div class="add_btn" data-payment="карту" data-cur="RUB">Пополнить через карту</div>
                </div>
            </div>
        </div>
    </div>
<div class="modal" id="payment_modal">
    <div class="modal_overlay modal_close"></div>
    <div class="modal_content">
        <div class="modal_title">Пополнение баланса<br>через <span class="payment_text">Яндекс</span></div>
        <form action="{{route('payment.insert')}}" method="post">
            @csrf
            <input type="hidden" id="payment_hidden" name="payment" value="">
            <div class="input_caption">Сумма пополнения</div>
            <div class="input_wrapper">
                <input type="text" required id="pay" name="amount" class="num_input">
                <div class="cur">RUB</div>
            </div>
            <div class="message invalid">Пожалуйста, заполните все обязательные поля</div>
            <div class="message success">Баланс пополнен</div>
            <div class="message error">Ошибка</div>
            <input type="submit" class="submit_btn" value="ПОПОЛНИТЬ БАЛАНС">
        </form>
        <div class="modal_close"></div>
    </div>
</div>
@endsection