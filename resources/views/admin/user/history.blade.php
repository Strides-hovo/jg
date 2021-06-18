@extends('layouts.admin')
@section('title', 'История')

@section('content')

    <div class="content table_content">
        <div class="wrap super_wrapper">
            <div class="caption_wrapper">
                <div class="caption super_caption">Поднобности ваших операций</div>
                <div class="sort">
                    Sort
                </div>
                <div class="filters">
                    Filter
                </div>
            </div>
            <div class="table_wrapper">
                <table class="table operations" data-action="getoperations">
                    <tbody><tr class="table_header">
                        <th>Дата операции</th>
                        <th>Тип операции</th>
                        <th>Система</th>
                        <th>Валюта</th>
                        <th>Приход</th>
                        <th>Расход</th>
                        <th>ID Пользователя</th>
                        <th>Статус</th>
                    </tr>
                    <tr class="row visible confirmed">
                        <td><a href="operation_details.html">27.04.2021</a></td>
                        <td><a href="operation_details.html">Перевод</a></td>
                        <td><a href="operation_details.html">JoinGambling</a></td>
                        <td><a href="operation_details.html">UAH</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">14 000</a></td>
                        <td><a href="operation_details.html">JG542814</a></td>
                        <td><a href="operation_details.html">Подтверждена</a></td>
                    </tr>
                    <tr class="row visible confirmed">
                        <td><a href="operation_details.html">27.04.2021</a></td>
                        <td><a href="operation_details.html">Вывод</a></td>
                        <td><a href="operation_details.html">КИВИ Кошелек</a></td>
                        <td><a href="operation_details.html">RUB</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">1 424 000</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">Подтверждена</a></td>
                    </tr>
                    <tr class="row visible waiting">
                        <td><a href="operation_details.html">27.04.2021</a></td>
                        <td><a href="operation_details.html">Пополнение</a></td>
                        <td><a href="operation_details.html">Perfect Money</a></td>
                        <td><a href="operation_details.html">USD</a></td>
                        <td><a href="operation_details.html">1 000</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">Ожидает оплаты</a></td>
                    </tr>
                    <tr class="row visible inwork">
                        <td><a href="operation_details.html">27.04.2021</a></td>
                        <td><a href="operation_details.html">Пополнение</a></td>
                        <td><a href="operation_details.html">Яндекс Деньги</a></td>
                        <td><a href="operation_details.html">RUB</a></td>
                        <td><a href="operation_details.html">640 000</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">В обработке</a></td>
                    </tr>
                    <tr class="row visible inwork">
                        <td><a href="operation_details.html">27.04.2021</a></td>
                        <td><a href="operation_details.html">Пополнение</a></td>
                        <td><a href="operation_details.html">Оплата картой</a></td>
                        <td><a href="operation_details.html">EUR</a></td>
                        <td><a href="operation_details.html">1 700</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">В обработке</a></td>
                    </tr>
                    <tr class="row visible canceled">
                        <td><a href="operation_details.html">27.04.2021</a></td>
                        <td><a href="operation_details.html">Пополнение</a></td>
                        <td><a href="operation_details.html">Bitcoin (BTC)</a></td>
                        <td><a href="operation_details.html">BTC</a></td>
                        <td><a href="operation_details.html">1.04453445</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">Отменена</a></td>
                    </tr>
                    <tr class="row visible canceled">
                        <td><a href="operation_details.html">27.04.2021</a></td>
                        <td><a href="operation_details.html">Пополнение</a></td>
                        <td><a href="operation_details.html">PayPal</a></td>
                        <td><a href="operation_details.html">USD</a></td>
                        <td><a href="operation_details.html">2 400</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">Отменена</a></td>
                    </tr>
                    <tr class="row visible canceled">
                        <td><a href="operation_details.html">27.04.2021</a></td>
                        <td><a href="operation_details.html">Перевод</a></td>
                        <td><a href="operation_details.html">JoinGambling</a></td>
                        <td><a href="operation_details.html">USD</a></td>
                        <td><a href="operation_details.html">1 400</a></td>
                        <td><a href="operation_details.html">—</a></td>
                        <td><a href="operation_details.html">JG235524</a></td>
                        <td><a href="operation_details.html">Отменена</a></td>
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
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    function historyUpdate() {
       setInterval( () => {
        console.log('ok')
          postData('POST', "{{route('payment.update')}}", {
                '_token' : "{{ csrf_token() }}"
            }).then((data) => {
                
               console.log(data)
                
             });
        },10000)
    }
    // historyUpdate()


        postData('POST', "{{route('payment.update')}}", {
                '_token' : "{{ csrf_token() }}"
            }).then((data) => {
                
               console.log(data)
                
        });




</script>

@endsection