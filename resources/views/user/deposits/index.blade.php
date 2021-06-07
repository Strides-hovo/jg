@extends('layouts.user')
@section('title', 'Все Депозиты')

@section('content')

    <div class="content table_content">

        <!-- show only this block if no data avalible -->
        <!--div class="wrap super_wrapper">
            <div class="caption_wrapper">
                <div class="caption super_caption">У вас нет депозитов</div>
                <a href="new.html" class="btn">Создать депозит</a>
            </div>
        </div-->

        <!-- else if data avalible show this one from here...-->
        <div class="wrap super_wrapper">
            <div class="caption_wrapper">
                <div class="caption super_caption">Подробная статистика</div>
                <div class="sort">
                    Sort
                </div>
                <div class="filters">
                    Filter
                </div>
            </div>
            <div class="table_wrapper">
                <table class="table deposits" data-action="getdeposits">
                    <tbody><tr class="table_header">
                        <th>Создание депозита</th>
                        <th>Завершение депозита</th>
                        <th>Валюта</th>
                        <th>Сумма инвестиций</th>
                        <th>Начислено</th>
                        <th>Срок инвестиций</th>
                        <th>Статус</th>
                    </tr>
                    <tr class="row inwork">
                        <td><a href="deposit_dateils.html">27.04.2021</a></td>
                        <td><a href="deposit_dateils.html">27.07.2021</a></td>
                        <td><a href="deposit_dateils.html">RUB</a></td>
                        <td><a href="deposit_dateils.html">750 000</a></td>
                        <td><a href="deposit_dateils.html">542</a></td>
                        <td><a href="deposit_dateils.html">3 месяца</a></td>
                        <td><a href="deposit_dateils.html">В работе</a></td>
                    </tr>
                    <tr class="row inwork">
                        <td><a href="deposit_dateils.html">24.04.2021</a></td>
                        <td><a href="deposit_dateils.html">24.07.2021</a></td>
                        <td><a href="deposit_dateils.html">RUB</a></td>
                        <td><a href="deposit_dateils.html">480 000</a></td>
                        <td><a href="deposit_dateils.html">542</a></td>
                        <td><a href="deposit_dateils.html">3 месяца</a></td>
                        <td><a href="deposit_dateils.html">В работе</a></td>
                    </tr>
                    <tr class="row inwork">
                        <td><a href="deposit_dateils.html">23.04.2021</a></td>
                        <td><a href="deposit_dateils.html">23.07.2021</a></td>
                        <td><a href="deposit_dateils.html">EUR</a></td>
                        <td><a href="deposit_dateils.html">1400</a></td>
                        <td><a href="deposit_dateils.html">542</a></td>
                        <td><a href="deposit_dateils.html">3 месяца</a></td>
                        <td><a href="deposit_dateils.html">В работе</a></td>
                    </tr>
                    <tr class="row inwork">
                        <td><a href="deposit_dateils.html">17.04.2021</a></td>
                        <td><a href="deposit_dateils.html">17.07.2021</a></td>
                        <td><a href="deposit_dateils.html">BTC</a></td>
                        <td><a href="deposit_dateils.html">0.5</a></td>
                        <td><a href="deposit_dateils.html">542</a></td>
                        <td><a href="deposit_dateils.html">3 месяца</a></td>
                        <td><a href="deposit_dateils.html">В работе</a></td>
                    </tr>
                    <tr class="row finished">
                        <td><a href="deposit_dateils.html">23.04.2021</a></td>
                        <td><a href="deposit_dateils.html">23.07.2021</a></td>
                        <td><a href="deposit_dateils.html">RUB</a></td>
                        <td><a href="deposit_dateils.html">420</a></td>
                        <td><a href="deposit_dateils.html">542</a></td>
                        <td><a href="deposit_dateils.html">3 месяца</a></td>
                        <td><a href="deposit_dateils.html">Завершен</a></td>
                    </tr>
                    <tr class="row canceled">
                        <td><a href="deposit_dateils.html">17.04.2021</a></td>
                        <td><a href="deposit_dateils.html">17.07.2021</a></td>
                        <td><a href="deposit_dateils.html">USD</a></td>
                        <td><a href="deposit_dateils.html">7,64%</a></td>
                        <td><a href="deposit_dateils.html">542</a></td>
                        <td><a href="deposit_dateils.html">3 месяца</a></td>
                        <td><a href="deposit_dateils.html">Отменен</a></td>
                    </tr>
                    <tr class="row canceled">
                        <td><a href="deposit_dateils.html">17.04.2021</a></td>
                        <td><a href="deposit_dateils.html">17.07.2021</a></td>
                        <td><a href="deposit_dateils.html">UAH</a></td>
                        <td><a href="deposit_dateils.html">7,64%</a></td>
                        <td><a href="deposit_dateils.html">542</a></td>
                        <td><a href="deposit_dateils.html">3 месяца</a></td>
                        <td><a href="deposit_dateils.html">Отменен</a></td>
                    </tr>
                    <tr class="row finished">
                        <td><a href="deposit_dateils.html">17.04.2021</a></td>
                        <td><a href="deposit_dateils.html">17.07.2021</a></td>
                        <td><a href="deposit_dateils.html">EUR</a></td>
                        <td><a href="deposit_dateils.html">7,64%</a></td>
                        <td><a href="deposit_dateils.html">542</a></td>
                        <td><a href="deposit_dateils.html">3 месяца</a></td>
                        <td><a href="deposit_dateils.html">Завершен</a></td>
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
        <!-- ... to here -->

        <div class="side_wrapper small_wrapper">
            <div class="wrap item">
                <div class="sidecaption">Ваш баланс в RUB</div>
                <div class="number">75 690₽</div>
            </div>
            <div class="wrap item">
                <div class="sidecaption">Активные депозиты:</div>
                <div class="datahoder">1 240 000 RUB</div>
                <div class="datahoder">0,5 BTC</div>
                <div class="datahoder">1 400 EUR</div>
            </div>
        </div>
    </div>

@endsection