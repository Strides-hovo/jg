@extends('layouts.user')
@section('title', 'Настройки Акаунта')

@section('content')

<div class="content_wrapper">
    <h1><img class="icon" src="{{asset('images/icon_7.svg')}}">Настройки профиля</h1>
    <div class="content settings_content form_content clearfix">
        <div class="col">
            <div class="wrap">
                <form class="settings_form" validate="" action="savesettings">
                    <div class="caption_wrapper">
                        <div class="caption">Пользовательские настройки</div>
                    </div>
                    <div class="row cols clearfix">
                        <div class="col">
                            <div class="input_caption">Ваша временная зона (GMT)</div>
                            <div class="input_wrapper">
                                <div class="select_wrapper">
                                    <input type="hidden" name="timrzone" class="selected_value" value="+0:00">
                                    <div class="selected">+0:00</div>
                                    <div class="select_list long_list">
                                        <div class="select_option" data-value="-12:00">-12:00</div>
                                        <div class="select_option" data-value="-11:00">-11:00</div>
                                        <div class="select_option" data-value="-10:00">-10:00</div>
                                        <div class="select_option" data-value="-9:00">-9:00</div>
                                        <div class="select_option" data-value="-8:00">-8:00</div>
                                        <div class="select_option" data-value="-7:00">-7:00</div>
                                        <div class="select_option" data-value="-6:00">-6:00</div>
                                        <div class="select_option" data-value="-5:00">-5:00</div>
                                        <div class="select_option" data-value="-4:00">-4:00</div>
                                        <div class="select_option" data-value="-3:00">-3:00</div>
                                        <div class="select_option" data-value="-2:00">-2:00</div>
                                        <div class="select_option" data-value="-1:00">-1:00</div>
                                        <div class="select_option option_selected" data-value="+0:00">+0:00</div>
                                        <div class="select_option" data-value="+1:00">+1:00</div>
                                        <div class="select_option" data-value="+2:00">+2:00</div>
                                        <div class="select_option" data-value="+3:00">+3:00</div>
                                        <div class="select_option" data-value="+4:00">+4:00</div>
                                        <div class="select_option" data-value="+5:00">+5:00</div>
                                        <div class="select_option" data-value="+6:00">+6:00</div>
                                        <div class="select_option" data-value="+7:00">+7:00</div>
                                        <div class="select_option" data-value="+8:00">+8:00</div>
                                        <div class="select_option" data-value="+9:00">+9:00</div>
                                        <div class="select_option" data-value="+10:00">+10:00</div>
                                        <div class="select_option" data-value="+11:00">+11:00</div>
                                        <div class="select_option" data-value="+12:00">+12:00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input_caption">Валюта баланса по умолчанию</div>
                            <div class="input_wrapper">
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
                    </div>
                    <div class="row">
                        <label class="check_wrapper">
                            <input type="checkbox" name="notification">
                            <div class="check_btn">Не получать оповещения на Email</div>
                        </label>
                    </div>
                    <br>
                    <div class="caption_wrapper">
                        <div class="caption">Сменить E-mail аккаунта</div>
                    </div>
                    <div class="row cols clearfix">
                        <div class="col">
                            <div class="input_caption">Текущий E-mail</div>
                            <div class="input_wrapper">
                                <input readonly="" type="text" value="johndoe.millionaire@gmail.com" class="hideplaceholder">
                                <div class="placeholder"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input_caption">Сменить на E-mail</div>
                            <div class="input_wrapper">
                                <input type="text" name="newmail" value="" class="">
                            </div>
                        </div>
                    </div>
                    <div class="message success">Настройки сохранены</div>
                    <div class="message error">Ошибка</div>
                    <input type="submit" class="submit_btn secondary" value="СОХРАНИТЬ ИЗМЕНЕНИЯ">
                </form>
            </div>
        </div>
        <div class="col">
            <div class="wrap">
                <div class="caption_wrapper">
                    <div class="caption">Сменить пароль от аккаунта</div>
                </div>
                <form class="password_form" validate="" action="changepass">
                    <div class="row">
                        <div class="input_caption">Укажите текущий пароль</div>
                        <div class="input_wrapper">
                            <input type="password" value="****************">
                        </div>
                    </div>
                    <div class="row cols">
                        <div class="col">
                            <div class="input_caption">Новый пароль</div>
                            <div class="input_wrapper">
                                <input type="password" require="" value="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input_caption">Подтвердите пароль</div>
                            <div class="input_wrapper">
                                <input type="password" require="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="message invalid">Пожалуйста, заполните все обязательные поля</div>
                    <div class="message success">Пароль изменен</div>
                    <div class="message error">Ошибка</div>
                    <input type="submit" class="submit_btn secondary" value="ИЗМЕНИТЬ ПАРОЛЬ">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection