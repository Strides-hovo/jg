
@extends('layouts.user')

@section('title','tit')

@section('content')

<div class="content_wrapper">
        <h1><img class="icon" src="{{asset('images/icon_5.svg')}}">Перевод средств</h1>
        <div class="content form_content claerfix">
            <div class="col">
                <div class="wrap">
                    <div class="caption_wrapper">
                        <div class="caption">Перевод средств внутри системы</div>
                    </div>
                    <form class="transfer_form" validate="" action="transfer">
                        <div class="row cols clearfix">
                            <div class="col">
                                <div class="input_caption">Сумма</div>
                                <div class="input_wrapper">
                                    <input type="text" require="" id="sum" name="sum" class="num_input">
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
                                <div class="input_caption">UserID Пользователя</div>
                                <div class="input_wrapper">
                                    <input type="text" require="" id="userid" name="userid" class="num_input" value="JG">
                                </div>
                            </div>
                        </div>
                        <div class="message invalid">Пожалуйста, заполните все обязательные поля</div>
                        <div class="message success">Перевод завершен</div>
                        <div class="message error">Ошибка</div>
                        <input type="submit" class="submit_btn" value="ПЕРЕВОД СРЕДСТВ">
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