
@extends('layouts.user')

@section('title','tit')

@section('content')

<div class="content_wrapper">
        <h1><img class="icon" src="{{asset('images/icon_5.svg')}}">Вывод на ваш кошелёк</h1>
        <div class="content form_content clearfix">
            <div class="col">
                <div class="wrap long_wrapper">
                    <div class="caption_wrapper">
                        <div class="caption">Выберите кошелек для вывода средств</div>
                    </div>
                    <form class="out_form" validate="" action="out">
                        <div class="radio_group">
                            <div class="row cols clearfix">
                                <div class="col">
                                    <label class="radio_wrapper">
                                        <input type="radio" name="wallet" value="1" class="wallet">
                                        <div class="radio_btn">PerfectMoney (USD, EUR)</div>
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="radio_wrapper">
                                        <input type="radio" name="wallet" value="2" class="wallet">
                                        <div class="radio_btn">Ethereum (ETH)</div>
                                    </label>
                                </div>
                            </div>
                            <div class="row cols clearfix">
                                <div class="col">
                                    <label class="radio_wrapper">
                                        <input type="radio" name="wallet" value="3" class="wallet">
                                        <div class="radio_btn">Tether (USDT)</div>
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="radio_wrapper">
                                        <input type="radio" name="wallet" value="4" class="wallet">
                                        <div class="radio_btn">Bitcoin (BTC)</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row cols">
                            <div class="col">
                                <div class="input_wrapper">
                                    <input type="text" require="" id="sum" name="sum" class="num_input">
                                    <div class="placeholder">Сумма</div>
                                    <div class="select_wrapper">
                                        <input type="hidden" name="currency" class="selected_value" value="USD">
                                        <div class="selected">USD</div>
                                        <div class="select_list">
                                            <div class="select_option" data-value="RUB">RUB</div>
                                            <div class="select_option" data-value="UAH">UAH</div>
                                            <div class="select_option option_selected" data-value="USD">USD</div>
                                            <div class="select_option" data-value="EUR">EUR</div>
                                            <div class="select_option" data-value="BTC">BTC</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <input type="submit" class="submit_btn" value="ВЫВЕСТИ СРЕДСТВА">
                            </div>
                        </div>
                        <div class="row">
                            <div class="message invalid">Пожалуйста, заполните все обязательные поля</div>
                            <div class="message success">Средства выведены</div>
                            <div class="message error">Ошибка</div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="wrap side_wrapper small_wrapper">
                    <div class="sidecaption">Доступный баланс</div>
                    <div class="datahoder">1 324 000 RUB</div>
                    <div class="datahoder">24 000 UAH</div>
                    <div class="datahoder">1 400 USD</div>
                    <div class="datahoder">1 650 EUR</div>
                    <div class="datahoder">0,5 BTC</div>
                </div>
            </div>
        </div>
    </div>

@endsection