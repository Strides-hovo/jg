
@extends('layouts.user')

@section('title','tit')

@section('content')

<div class="content_wrapper">
        <h1><img class="icon" src="{{asset('images/icon_6.svg')}}">Партнерская программа</h1>
        <div class="content partners_content">
            <div class="col">
                <div class="wrap">
                    <div class="sidecaption">Ваша ссылка для привлечения рефералов:</div>
                    <input type="text" readonly="" class="datahoder" value="https://joingambling.com/?ref=RaistlinMajere">
                </div>
                <div class="wrap">
                    <div class="caption_wrapper">
                        <div class="caption">Партнерская программа JoinGambling</div>
                    </div>
                    <p>Каждый зарегистрированный участник компании “Joingambling” может воспользоваться своей реферальной ссылкой для приглашения партнеров и получать вознаграждения от первоначального депозита Вашего реферала.</p>
                    <p><strong>Партнерское вознаграждение: <span class="green">5% от суммы депозита</span></strong></p>
                    <p><strong>Пример:</strong> приглашенный Вами человек вложил 20 000 рублей, Вы автоматически получаете на основной баланс партнерское вознаграждение 1000 рублей.</p>
                    <div class="subheader">Соблюдайте правила партнерской программы:</div>
                    <div class="subholder">Запрещается регистрировать свои аккаунты под свою реферальную систему.</div>
                    <div class="subholder">Запрещается спамить свою реферальную ссылку в разных группах и в комментариях в соц. сети Вконтакте.</div>
                </div>
            </div>
            <div class="col right_col">
                <div class="wrapper_1_2">
                    <div class="wrap">
                        <div class="sidecaption">Всего рефералов</div>
                        <div class="number">1 423</div>
                    </div>
                </div>
                <div class="wrapper_1_2">
                    <div class="wrap">
                        <div class="sidecaption">Активных рефералов</div>
                        <div class="number">132</div>
                    </div>
                </div>
                <div class="wrap long_wrapper">
                    <div class="sidecaption">Доход по депозитам</div>
                    <div class="number">146 553₽</div>
                </div>
                <div class="wrap long_wrapper">
                    <div class="caption_wrapper">
                        <div class="caption">Список ваших партнеров</div>
                    </div>
                    <div class="table_content">
                        <div class="table_wrapper">
                            <table class="table" data-action="getreferals">
                                <tbody><tr class="table_header">
                                    <th>Логин реферала</th>
                                    <th>Сумма депозита</th>
                                </tr>
                                <tr class="row visible">
                                    <td>saharovanil</td>
                                    <td>24 422 RUB</td>
                                </tr>
                                <tr class="row visible">
                                    <td>johndoe23</td>
                                    <td>43 300 EUR</td>
                                </tr>
                                <tr class="row visible">
                                    <td>johndoe23</td>
                                    <td>4.0244 BTC</td>
                                </tr>
                                <tr class="row visible">
                                    <td>johndoe23</td>
                                    <td>4.0244 BTC</td>
                                </tr>
                                <tr class="row visible">
                                    <td>johndoe23</td>
                                    <td>4.0244 BTC</td>
                                </tr>
                                <tr class="row visible">
                                    <td>johndoe23</td>
                                    <td>4.0244 BTC</td>
                                </tr>
                                <tr class="row visible">
                                    <td>johndoe23</td>
                                    <td>4.0244 BTC</td>
                                </tr>
                                <tr class="row visible">
                                    <td>johndoe23</td>
                                    <td>4.0244 BTC</td>
                                </tr>
                                </tbody></table>
                        </div>
                        <div class="table_suffiz">
                            <div class="perpage">Результатов на странице
                                <div class="pages_list_wrapper">
                                    <span id="pages_value">8</span>
                                    <div class="pages_list">
                                        <div class="pages_item" data-pages="8">8</div>
                                        <div class="pages_item" data-pages="16">16</div>
                                        <div class="pages_item" data-pages="32">32</div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination">
                                <span id="pages_from">1</span>-<span id="pages_to">8</span> из <span id="pages_totals">24</span>
                            </div>
                            <div class="page_nav prev hide"></div>
                            <div class="page_nav next hide"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection