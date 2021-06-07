@extends('layouts.user')
@section('title', 'Создать Депозит')

@section('content')

    <div class="content_wrapper">
        <h1><img class="icon" src="{{asset('images/icon_3.svg')}}">Создание депозита</h1>
        <div class="content calc_content">
            <div class="wrapper clearfix wrap">
                <div class="col_left">
                    <div class="interface">
                        <div class="row clearfix">
                            <div class="caption">Тип дипозита</div>
                            <div class="field field_dd" id="field_type">
                                <div class="field_dd_selected">
                                    <span id="field_dd_selected_val">Standart</span>
                                </div>
                                <div class="select_wrapper">
                                    <div class="field_dd_option" data-value="0">
                                        <span>Standart</span>
                                    </div>
                                    <div class="field_dd_option" data-value="1">
                                        <span>Medium</span>
                                    </div>
                                    <div class="field_dd_option" data-value="2">
                                        <span>Premium</span>
                                    </div>
                                </div>
                            </div>
                            <div class="radios_list">
                                <label class="field field_radio"><input type="radio" name="currency" class="currency" value="BTC" data-value="0" checked=""><div>BTC</div></label><!--
										--><label class="field field_radio"><input type="radio" name="currency" class="currency" value="UAH" data-value="1"><div>UAH</div></label><!--
										--><label class="field field_radio"><input type="radio" name="currency" class="currency" value="RUB" data-value="2"><div>RUB</div></label><!--
										--><label class="field field_radio"><input type="radio" name="currency" class="currency" value="EUR" data-value="3"><div>EUR</div></label><!--
										--><label class="field field_radio"><input type="radio" name="currency" class="currency" value="USD" data-value="4"><div>USD</div></label>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="caption">Сумма инвестиций</div>
                            <div class="slider_wrapper" id="slider1" data-element="0">
                                <div class="slider_line"><div class="slider_active"></div></div><div class="slider_ctrl"></div>
                            </div>
                            <label class="field" id="field_sum">
                                <input class="field_input" type="text" value="0.02">
                                <div class="input_lbl">BTC</div>
                            </label>
                        </div>
                        <div class="row">
                            <div class="caption">Срок инвестиций ( Месяцев )</div>
                            <div class="slider_wrapper" id="slider2">
                                <div class="slider_line"><div class="slider_active"></div></div><div class="slider_ctrl"></div>
                                <div class="slider_captions clearfix">
                                    <div class="slider_cap" id="slider_cap1">1</div>
                                    <div class="slider_cap" id="slider_cap2">2</div>
                                    <div class="slider_cap slider_cap_active" id="slider_cap3">3</div>
                                    <div class="slider_cap" id="slider_cap4">4</div>
                                    <div class="slider_cap" id="slider_cap5">5</div>
                                    <div class="slider_cap" id="slider_cap6">6</div>
                                    <div class="slider_cap" id="slider_cap7">7</div>
                                    <div class="slider_cap" id="slider_cap8">8</div>
                                    <div class="slider_cap" id="slider_cap9">9</div>
                                    <div class="slider_cap" id="slider_cap10">10</div>
                                    <div class="slider_cap" id="slider_cap11">11</div>
                                    <div class="slider_cap" id="slider_cap12">12</div>
                                </div>
                            </div>
                            <div class="desc">
                                Процентная ставка
                                <div class="amount">
                                    <span class="val" id="bidval">0.75</span>% <span class="byday">в день</span>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col">
                                <div class="caption">Старт инвестиции</div>
                                <label class="date_field" id="field_begin">
                                    <input class="field_date" id="curdate" type="text" disabled="" readonly="" value="">
                                </label>
                            </div>
                            <div class="col">
                                <div class="caption">Завершение инвестиции</div>
                                <label class="date_field" id="field_end">
                                    <input class="field_date" id="findate" type="text" disabled="" readonly="" value="18 Июля 2021">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_right active">
                    <div class="right_wrapper">
                        <div class="row graphics clearfix">
                            <div class="graph graph_left">
                                <div class="graph_item graph_item_left">
                                    <div class="graph_title">
                                        <div class="caption">Инвестировали</div>
                                        <div class="amount_count"><span id="graph_invest">0.02</span> <span id="graph_cur">BTC</span></div>
                                    </div>
                                    <div class="graph_fill graph_fill_left" style="height: 139.402px;"></div>
                                </div>
                            </div>
                            <div class="graph graph_right">
                                <div class="graph_item graph_item_right">
                                    <div class="graph_title">
                                        <div class="caption">Получаете</div>
                                        <div class="amount_count"><span id="graph_profit">0.008694</span> <span id="graph_pro_cur">BTC</span></div>
                                    </div>
                                    <div class="graph_fill graph_fill_right" style="height: 200px;"><div class="profit_graph" style="bottom: 139.402px; height: 60.598px;"></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="line clearfix">
                                <div class="block_left caption">Инвестиция</div>
                                <div class="block_right caption"><span id="final_invest">0.02</span> <span id="final_cur">BTC</span></div>
                            </div>
                            <div class="line clearfix">
                                <div class="block_left caption">Процент прибыли</div>
                                <div class="block_right caption"><span id="profit_percent">69</span> %</div>
                            </div>
                        </div>
                        <div class="row totals clearfix">
                            <div class="block_left caption">Прибыль с<br>инвестиции</div>
                            <div class="block_right profit"><span id="final_prof">0.008694</span> <span id="prof_cur">BTC</span></div>
                        </div>
                        <div class="submit_btn">Инвестировать сейчас</div>
                    </div>
                </div>
            </div>
            <div class="small_wrapper">
                <div class="wrap">
                    <div class="sidecaption">Ваш баланс в RUB</div>
                    <div class="number">75 690₽ </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
<script src="{{asset('js/calc_script.js')}}"></script>
@endsection