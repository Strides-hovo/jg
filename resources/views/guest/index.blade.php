<!DOCTYPE html>
<html>
<head>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta content="initial-scale=1, width=device-width, user-scalable=no" name="viewport">

    <link rel="preload" href="{{asset('guest/fonts/Roboto-Regular.woff')}}" as="font" crossorigin>
    <link rel="preload" href="{{asset('guest/fonts/Roboto-Medium.woff')}}" as="font" crossorigin>
    <link rel="preload" href="{{asset('guest/fonts/Roboto-Bold.woff')}}" as="font" crossorigin>
    <link rel="preload" href="{{asset('guest/fonts/Roboto-Black.woff')}}" as="font" crossorigin>

    <link rel="stylesheet" type="text/css" href="{{asset('guest/css/calc_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('guest/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('guest/css/loopslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('guest/css/mediaqueries.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('guest/css/autorizetion.css')}}">

    <script type='text/javascript' src='{{asset('guest/js/jquery-2.1.4.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('guest/js/jquery.loopslider.min.js')}}'></script>
    <script src="{{asset('guest/js/script.js')}}"></script>
    <script src="{{asset('guest/js/calc_script.js')}}"></script>
    <title>Главная Страница</title>
    <!-- Chatra {literal} -->
    <script>
        (function(d, w, c) {
            w.ChatraID = 'MGor4ki6jr9DQoFbk';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = 'https://call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');

        window.ChatraSetup = {
            colors: {
                buttonText: '#222222', /* цвет текста кнопки чата */
                buttonBg: '#FBED10'    /* цвет фона кнопки чата */
            }
        };

    </script>
    <!-- /Chatra {/literal} -->
</head>
<body class="show_preloader index">
<nav>
    <div class="wrapper">
        <a href="/"><img src="{{asset('guest/images/logo.svg')}}" class="logo"></a>
        <div class="mobile_menu">
            <div class="menu">
                <a href="#advantages">Преимущества</a>
                <a href="#about">Как работаем</a>
                <a href="#tarifs">Тарифы</a>
                <a href="#partners">Партнёры</a>
                <a href="#faq">F.A.Q.</a>
            </div>
            <div class="cabinet">
                <a href="{{ route('login') }}" class="auth_btn"><svg viewBox="0 0 16 16" fill="none" class="ico_login" xmlns="http://www.w3.org/2000/svg"><path class="ico_login_fill" d="M8.43332 6.66667C7.88332 5.11333 6.40666 4 4.66666 4C2.45666 4 0.666656 5.79 0.666656 8C0.666656 10.21 2.45666 12 4.66666 12C6.40666 12 7.88332 10.8867 8.43332 9.33333H11.3333V12H14V9.33333H15.3333V6.66667H8.43332ZM4.66666 9.33333C3.92999 9.33333 3.33332 8.73667 3.33332 8C3.33332 7.26333 3.92999 6.66667 4.66666 6.66667C5.40332 6.66667 5.99999 7.26333 5.99999 8C5.99999 8.73667 5.40332 9.33333 4.66666 9.33333Z"/></svg>Войти</a>
                <a class="reg_btn open_modal" href="#registration">Регистрация</a>
            </div>
        </div>
        <div class="menu_btn"><div class="menu_ico"></div></div>
    </div>
</nav>
<header>
    <div class="wrapper pict_wrapper">
        <!--img class="back" src="src/main_bg.jpg"-->

    </div>
    <div class="video_bg_wrapper">
        <video class="video_bg" loop muted="muted" autoplay webkit-playsinline="playsinline" playsinline="playsinline">
            <!--source src="src/videobg.mp4"-->
        </video>
    </div>
    <div class="wrapper pict_wrapper gradient1"></div>
    <div class="wrapper pict_wrapper gradientl"></div>
    <div class="wrapper pict_wrapper gradient2"></div>
    <div class="wrapper pict_wrapper gradient3"></div>
    <div class="wrapper pict_wrapper gradient4"></div>
    <div class="wrapper pict_wrapper">
        <div class="wrapper man_wrapper">
            <img class="man" src="{{asset('guest/images/man.png')}}" loading="lazy">
        </div>
    </div>
    <div class="wrapper clearfix">
        <div class="content">
            <h1><span>#1</span> По заработку на азартном трафике</h1>
            <p>Одна из самых крупных и продвинутых инвестиционных гемблинг партнерок, с большим опытом заработка на казино и других азартных играх.</p>
            <div class="registration open_modal" href="#registration">регистрация</div>
            <a href="#calculate" class="calculate"><svg class="ico_calc" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.807 17.8395C15.807 18.4181 15.3016 18.8889 14.6803 18.8889H2.3197C1.69847 18.8889 1.193 18.4181 1.193 17.8396V2.16055C1.193 1.58195 1.69847 1.11113 2.3197 1.11113H14.6803C15.3015 1.11115 15.807 1.58193 15.807 2.16051V13.8889C15.807 14.1957 16.0741 14.4445 16.4035 14.4445C16.7328 14.4445 17 14.1957 17 13.8889V2.16051C17 0.96918 15.9594 0 14.6803 0H2.3197C1.04059 0 4.19407e-05 0.96918 0 2.16051V17.8395C4.51201e-05 19.0308 1.04062 20 2.3197 20H14.6803C15.9594 20 17 19.0308 17 17.8395V16.6667C17 16.3598 16.7329 16.1111 16.4035 16.1111C16.0742 16.1111 15.807 16.3598 15.807 16.6667V17.8395Z" class="fill"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.5607 6.52795V4.58353H4.43932V6.52795H12.5607ZM3.78775 7.77795H13.2123C13.5747 7.77795 13.8684 7.50435 13.8684 7.16685V3.94463C13.8684 3.60713 13.5747 3.33353 13.2123 3.33353H3.78775C3.42538 3.33353 3.13163 3.60713 3.13163 3.94463V7.16685C3.13163 7.50435 3.42538 7.77795 3.78775 7.77795Z" class="fill"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.2702 12.4119C12.3835 12.5072 12.5265 12.5547 12.6695 12.5547C12.8222 12.5547 12.9749 12.5005 13.0914 12.392C13.3243 12.1751 13.3243 11.8233 13.0914 11.6063L11.0952 9.74716C11.0878 9.74031 11.0803 9.73368 11.0727 9.72726C10.8384 9.5304 10.4771 9.53706 10.2515 9.74716C10.0186 9.96412 10.0186 10.3159 10.2515 10.5328L12.2477 12.392C12.2551 12.3989 12.2626 12.4055 12.2702 12.4119ZM12.6909 11.9992L12.6695 12.0202L12.6909 11.9992ZM12.6909 11.9992L12.6695 12.0202L12.6909 11.9992Z" class="fill"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.2478 9.7472C12.2551 9.74036 12.2626 9.73373 12.2703 9.72732C12.5046 9.53048 12.8658 9.53717 13.0914 9.7472C13.3243 9.96416 13.3243 10.3159 13.0914 10.5329L11.0952 12.392C11.0878 12.3989 11.0803 12.4055 11.0727 12.4119C10.9594 12.5071 10.8163 12.5548 10.6734 12.5548C10.5207 12.5548 10.3681 12.5006 10.2516 12.392C10.0186 12.1751 10.0186 11.8233 10.2516 11.6064L12.2478 9.7472Z" class="fill"/><path fill-rule="evenodd" clip-rule="evenodd" d="M3.91703 15.326C3.58767 15.326 3.32055 15.5747 3.32055 15.8815C3.32055 16.1884 3.58763 16.4371 3.91703 16.4371H6.74006C7.06951 16.4371 7.33654 16.1884 7.33654 15.8815C7.33654 15.5747 7.06946 15.326 6.74006 15.326H3.91703Z" class="fill"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.73212 14.5672C4.73212 14.2604 4.99924 14.0117 5.3286 14.0117C5.65797 14.0117 5.92509 14.2604 5.92509 14.5672V17.1965C5.92509 17.5033 5.65797 17.7521 5.3286 17.7521C4.9992 17.7521 4.73212 17.5034 4.73212 17.1965V14.5672Z" class="fill"/><path fill-rule="evenodd" clip-rule="evenodd" d="M3.91703 10.5141C3.58767 10.5141 3.32055 10.7628 3.32055 11.0696C3.32055 11.3765 3.58763 11.6252 3.91703 11.6252H6.74006C7.06951 11.6252 7.33654 11.3765 7.33654 11.0696C7.33654 10.7628 7.06946 10.5141 6.74006 10.5141H3.91703Z" class="fill"/><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2599 14.4927C9.93059 14.4927 9.66347 14.7415 9.66347 15.0483C9.66347 15.3551 9.93054 15.6038 10.2599 15.6038H13.083C13.4124 15.6038 13.6795 15.3551 13.6795 15.0483C13.6795 14.7415 13.4124 14.4927 13.083 14.4927H10.2599Z" class="fill"/><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2599 16.1595C9.93059 16.1595 9.66347 16.4082 9.66347 16.7151C9.66347 17.0219 9.93054 17.2706 10.2599 17.2706H13.083C13.4124 17.2706 13.6795 17.0219 13.6795 16.7151C13.6795 16.4082 13.4124 16.1595 13.083 16.1595H10.2599Z" class="fill"/></svg>Рассчитать доход</a>
        </div>
    </div>
</header>
<section id="row_a">
    <div class="wrapper">
        <div id="advantages"></div>
        <h2>Преимущества Join<span>Gambling</span></h2>
        <div class="cols">
            <div class="col">
                <img src="{{asset('guest/images/fa_05.svg')}}" loading="lazy">
                <div class="headline">Еженедельные<br>выплаты</div>
                <div class="text">Стабильный доход, который вы получаете 4 раза в месяц.</div>
            </div>
            <div class="col">
                <img src="{{asset('guest/images/fa_06.svg')}}" loading="lazy">
                <div class="headline">Реферальная<br>система</div>
                <div class="text">Получаете 5% от дохода каждого приведенного вами инвестора.</div>
            </div>
            <div class="col">
                <img src="{{asset('guest/images/fa_07.svg')}}" loading="lazy">
                <div class="headline">Статистика в<br>реальном времени</div>
                <div class="text">Подробная статистика вплоть до привлечённых игроков.</div>
            </div>
            <div class="col">
                <img src="{{asset('guest/images/ico_a4.png')}}" loading="lazy">
                <div class="headline">Круглосуточная<br>техподдержка</div>
                <div class="text">Менеджеры службы поддержки готовы помочь в любую минуту!</div>
            </div>
        </div>
    </div>
</section>
<section id="row_b">
    @include('messages')
    <div class="wrapper clearfix">
        <div id="about"></div>
        <div class="cols">
            <div class="col">
                <div class="copmosition">
                    <img class="layer layer1" src="{{ asset('guest/images/layer1.png')}}" loading="lazy">
                    <img class="layer layer2" src="{{ asset('guest/images/layer2.png')}}" loading="lazy">
                    <img class="layer layer3" src="{{ asset('guest/images/layer3.png')}}" loading="lazy">
                    <img class="layer layer4" src="{{ asset('guest/images/layer4.png')}}" loading="lazy">
                </div>
                <div class="slogan">Прекрати откладывать, начни зарабатывать уже сейчас!</div>
            </div>
            <div class="col">
                <h3>Как работает платформа Join <span>Gambling</span>?</h3>
                <p>В 21-ом веке, в условиях строжайших запретов на ведение игорного дела, все большую популярность приобретают онлайн казино. В просторах интернета существует десятки тысяч платформ, предлагающих свои азартные игры. Но как игроку понять в какое онлайн казино положить свои деньги и насладиться игрой? Ответ на этот вопрос очень прост в часто узнаваемое. Чем больше онлайн казино продвигает свой сайт, тем выше его узнаваемость, а так же посещаемость, соответственно и людей которых заинтересует, часто рекламируемое казино, стает больше.</p>
                <p>Именно этим и занимается наша инвестиционная компания. Мы предлагаем бизнесменам и обычным людям инвестировать в рекламу азартных игр и зарабатывать ежемесячно пассивный доход.</p>
            </div>
        </div>
    </div>
</section>
<section id="calc">
    <div class="wrapper clearfix">
        <div id="calculate"></div>
        <div class="col_left">
            <div class="title"><div class="ico_calc"><img src="{{asset('guest/images/calc_ico.png')}}"></div>Калькулятор доходности</div>
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
                        <label class="field field_radio"><input type="radio" name="currency" class="currency" value="BTC" data-value="0" checked><div>BTC</div></label><!--
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
                            <input class="field_date" id="curdate" type="text" readonly value="">
                        </label>
                    </div>
                    <div class="col">
                        <div class="caption">Завершение инвестиции</div>
                        <label class="date_field" id="field_end">
                            <input class="field_date" id="findate" type="text" readonly value="18 Июля 2021">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_right">
            <div class="right_wrapper">
                <div class="row graphics clearfix">
                    <div class="graph graph_left">
                        <div class="graph_item graph_item_left">
                            <div class="graph_title">
                                <div class="caption">Инвестировали</div>
                                <div class="amount_count"><span id="graph_invest">0.02</span> <span id="graph_cur">BTC</span></div>
                            </div>
                            <div class="graph_fill graph_fill_left"></div>
                        </div>
                    </div>
                    <div class="graph graph_right">
                        <div class="graph_item graph_item_right">
                            <div class="graph_title">
                                <div class="caption">Получаете</div>
                                <div class="amount_count"><span id="graph_profit">19,150</span> <span id="graph_pro_cur">BTC</span></div>
                            </div>
                            <div class="graph_fill graph_fill_right"><div class="profit_graph"></div></div>
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
                        <div class="block_right caption"><span id="profit_percent">91.5</span> %</div>
                    </div>
                </div>
                <div class="row totals clearfix">
                    <div class="block_left caption">Прибыль с<br>инвестиции</div>
                    <div class="block_right profit"><span id="final_prof">9,150</span> <span id="prof_cur">BTC</span></div>
                </div>
                <div class="submit_btn open_modal" href="#registration">Инвестировать сейчас</div>
            </div>
        </div>
    </div>
</section>
<section id="row_d">
    <div class="wrapper">
        <div class="carousel">
            <div class="content" id="car1">
                <figure class="pay_item">
                    <img src="{{asset('guest/images/Visa.svg')}}" loading="lazy">
                </figure>
                <figure class="pay_item">
                    <img src="{{asset('guest/images/PayPal.svg')}}" loading="lazy">
                </figure>
                <figure class="pay_item">
                    <img src="{{asset('guest/images/MasterCard.svg')}}" loading="lazy">
                </figure>
                <figure class="pay_item">
                    <img src="{{asset('guest/images/iPay.svg')}}" loading="lazy">
                </figure>
                <figure class="pay_item">
                    <img src="{{asset('guest/images/Bitcoin.svg')}}" loading="lazy">
                </figure>
                <figure class="pay_item">
                    <img src="{{asset('guest/images/Skrill.svg')}}" loading="lazy">
                </figure>
                <figure class="pay_item">
                    <img src="{{asset('guest/images/Payoneer.svg')}}" loading="lazy">
                </figure>
                <figure class="pay_item">
                    <img src="{{asset('guest/images/Qiwi.svg')}}" loading="lazy">
                </figure>
                <figure class="pay_item">
                    <img src="{{asset('guest/images/WebMoney.svg')}}" loading="lazy">
                </figure>
                <figure class="pay_item">
                    <img src="{{asset('guest/images/Perfect Money.svg')}}" loading="lazy">
                </figure>
                <figure class="pay_item">
                    <img src="{{asset('guest/images/Payeer.svg')}}" loading="lazy">
                </figure>
                <figure class="pay_item">
                    <img src="{{asset('guest/images/YandexMoney.svg')}}" loading="lazy">
                </figure>
            </div>
        </div>
    </div>
    <div class="carousel_nav carousel_right" id="car1_r">
        <svg class="nav_ico ico_r" style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline> </svg>
    </div>
    <div class="carousel_nav carousel_left" id="car1_l">
        <svg class="nav_ico ico_l" style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline> </svg>
    </div>
</section>
<section id="row_e">
    <div class="wrapper">
        <div id="steps"></div>
        <h2>Как это работает?</h2>
        <div class="cols">
            <div class="col">
                <img src="{{asset('guest/images/fa_01.svg')}}" loading="lazy">
                <div class="headline">Инвестирование</div>
                <div class="text">Выбор инвестиционного пакета. Вы выбираете срок и сумму инвестиции.</div>
                <svg class="arrow" stroke="#000000" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 18.7"><path class="st0" d="M4.2 9.4h32.1"></path><path class="st1" d="M31.3 13.4l5-4-5-4"></path></svg>
            </div>
            <div class="col">
                <img src="{{asset('guest/images/fa_02.svg')}}" loading="lazy">
                <div class="headline">Запуск компании</div>
                <div class="text">Мы запускаем крупнейшую маркетинговую компанию на наших партнёров сети казино.</div>
                <svg class="arrow" stroke="#000000" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 18.7"><path class="st0" d="M4.2 9.4h32.1"></path><path class="st1" d="M31.3 13.4l5-4-5-4"></path></svg>
            </div>
            <div class="col">
                <img src="{{asset('guest/images/fa_03.svg')}}" loading="lazy">
                <div class="headline">Получение прибыли</div>
                <div class="text">Отработанные тактики заработка наших партнеров, гарантируют вам прогнозируемый доход.</div>
                <svg class="arrow" stroke="#000000" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 18.7"><path class="st0" d="M4.2 9.4h32.1"></path><path class="st1" d="M31.3 13.4l5-4-5-4"></path></svg>
            </div>
            <div class="col">
                <img src="{{asset('guest/images/fa_04.svg')}}" loading="lazy">
                <div class="headline">Вывод дивидендов</div>
                <div class="text">Подсчет собственной прибыли с отображением детальной статистикой в личном кабинете и вывод средств.</div>
            </div>
        </div>
    </div>
</section>
<section id="row_f">
    <div class="gradient1"></div>
    <div class="gradient2"></div>
    <div class="wrapper">
        <div id="tarifs"></div>
        <h2>Тарифы</h2>
        <div class="content">
            <div class="item">
                <div class="title">Standart</div>
                <div class="subtitle">Минимальная сумма<br>инвестиций 500$</div>
                <div class="percent">0.75% <span>в день</span></div>
                <div class="btn open_modal" href="#registration">ИНВЕСТИРОВАТЬ</div>
            </div>
            <div class="item">
                <div class="title">Medium</div>
                <div class="subtitle">Минимальная сумма<br>инвестиций 3000$</div>
                <div class="percent">0.97% <span>в день</span></div>
                <div class="btn open_modal" href="#registration">ИНВЕСТИРОВАТЬ</div>
            </div>
            <div class="item">
                <div class="title">Premium</div>
                <div class="subtitle">Минимальная сумма<br>инвестиций 15000$</div>
                <div class="percent">1.19% <span>в день</span></div>
                <div class="btn open_modal" href="#registration">ИНВЕСТИРОВАТЬ</div>
            </div>
        </div>
    </div>
</section>
<section id="row_g">
    <div class="wrapper">
        <div id="partners"></div>
        <h2>Наши партнеры</h2>
        <div class="caption">Если вы заинтересованы в том, чтобы стать<br>партнером или спонсором, <a href="contacts.html">напишите нам</a>.</div>
    </div>
    <div class="inner_section">
        <div class="wrapper">
            <div class="carousel">
                <div class="content" id="car2">
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 1.svg')}}" loading="lazy">
                    </figure>
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 2.svg')}}" loading="lazy">
                    </figure>
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 3.svg')}}" loading="lazy">
                    </figure>
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 4.svg')}}" loading="lazy">
                    </figure>
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 5.svg')}}" loading="lazy">
                    </figure>
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 6.svg')}}" loading="lazy">
                    </figure>
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 7.svg')}}" loading="lazy">
                    </figure>
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 8.svg')}}" loading="lazy">
                    </figure>
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 9.svg')}}" loading="lazy">
                    </figure>
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 10.svg')}}" loading="lazy">
                    </figure>
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 11.svg')}}" loading="lazy">
                    </figure>
                    <figure class="part_item">
                        <img src="{{asset('guest/images/Logo 12.svg')}}" loading="lazy">
                    </figure>
                </div>
            </div>
        </div>
        <div class="carousel_nav carousel_right" id="car2_r">
            <svg class="nav_ico ico_r" style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline> </svg>
        </div>
        <div class="carousel_nav carousel_left" id="car2_l">
            <svg class="nav_ico ico_l" style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polyline fill="none" stroke="#222222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline> </svg>
        </div>
    </div>
</section>
<section id="row_h">
    <div class="wrapper">
        <div id="faq"></div>
        <h2>Вопросы и ответы</h2>
        <div class="accord">
            <div class="accord_item">
                <div class="accord_head">1. Как это работает?<div class="accord_ico"></div></div>
                <div class="accord_body">
                    <p>Все очень просто.</p>
                    <p>Вы создаёте онлайн кабинет в котором вносит депозит.<br>После успешной регистрации и зачисления депозита на ваш счёт, наши таргетологи произведут настройку рекламы , которая синхронизируется с вашим личным кабинетом, куда и будет приходить отчёт о ее статистике.</p>
                    <p>Данная статистика отображает:<br>Просмотры рекламы<br>Переходы по данной рекламе<br>Количество людей которые внесли депозит, а также размер депозита.</p>
                    <p>Совокупность этих показателей поможет проанализировать вашу прибыль. Из 100 000 просмотров в мессяц, примерное количество переходов по рекламе составляет 3000-5000, из них проверить свою удачу пожелает от 300-1000 человек.</p>
                    <p>Хотим подметить, чтобы данная статистика строилась на трехлетнем опыте продвижения онлайн казино. Данный опыт помог определить средний потенциал нового игрока. По нашим наблюдениям эта сумма варьируется от 5$ до 100$ . Не беря во внимание слишком азартных. Исходя из этого можно подвести итог, что инвестируя в JoinGambling, вы приобретёте пассивный доход.</p>
                </div>
            </div>
            <div class="accord_item">
                <div class="accord_head">2. Почему минимальный вклад составляет 500$?<div class="accord_ico"></div></div>
                <div class="accord_body">
                    <p>На нашем личном опыте мы убедились в том, что максимальный результат достигается стартуя от этой цифры.</p>
                </div>
            </div>
            <div class="accord_item">
                <div class="accord_head">3. Когда я могу вывести деньги?<div class="accord_ico"></div></div>
                <div class="accord_body">
                    <p>Выплата делится на два этапа. Первая по истечению 15 дней, где вы получаете свой заработанный процент за это время, вторая в конце рекламной компании, где помимо заработанных процентов, вам доступно снятие своего вклада.</p>
                </div>
            </div>
            <div class="accord_item">
                <div class="accord_head">4. Доступна ли реферальная система?<div class="accord_ico"></div></div>
                <div class="accord_body">
                    <p>Да, с ней вы можете ознакомиться в разделе <a href="referal.html">реферальная программа</a></p>
                </div>
            </div>
            <div class="accord_item">
                <div class="accord_head">5. Через сколько отображается статистика в личном кабинете?<div class="accord_ico"></div></div>
                <div class="accord_body">
                    <p>Статистика в личном кабинете JG отображается через сутки после внесённого депозита!</p>
                </div>
            </div>
            <div class="accord_item">
                <div class="accord_head">6. Через сколько можно сделать возврат денег после внесения?<div class="accord_ico"></div></div>
                <div class="accord_body">
                    <p>Деньги вступают в работу в течении 30 минут после депозита. Соответсвенно отменить депозит можно в течении 30 мин.</p>
                </div>
            </div>
            <div class="accord_item">
                <div class="accord_head">7. Все ли клиенты зарабатывают деньги в вашей компании или бывает потеря своих вложений?<div class="accord_ico"></div></div>
                <div class="accord_body">
                    <p>В компании JG каждый клиент остаётся с прибылью! Предугадать результат на 100% невозможно, именно поэтому была придумана минимальная инвестиция пятьсот долларов, чтобы уменьшить вероятность потери своих вложений до 0%</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="row_k">
    <div class="wrapper">
        <div class="content">
            <div class="col">
                <img class="logo" src="{{asset('guest/images/logo.svg')}}">
            </div>
            <div class="col">
                <div class="caption">О нашей работе</div>
                <a href="#about">Как мы работаем?</a>
                <a href="#steps">Как с нами заработать?</a>
                <a href="#calculate">Калькулятор доходности</a>
                <a href="#advantages">Преимущества работы с нами</a>
            </div>
            <div class="col">
                <div class="caption">Информация</div>
                <a href="about_us.html">О компании</a>
                <a href="docs.html">Документы компании</a>
                <a href="rules.html">Клиентское соглашение</a>
                <a href="#">Личный кабинет</a>
            </div>
            <div class="col">
                <div class="caption">Помощь</div>
                <a href="#tarifs">Тарифы</a>
                <a href="reviews.html">Отзывы</a>
                <a href="#faq">F.A.Q</a>
                <a href="contacts.html">Контакты</a>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="wrapper">
        <div class="content clearfix">
            <div class="col copyright">© JoinGambling 2020-2021. All right reserved.</div>
            <div class="col">
                <img class="fpay" src="{{asset('guest/images/fpay1.png')}}" loading="lazy">
                <img class="fpay" src="{{asset('guest/images/fpay2.png')}}" loading="lazy">
                <img class="fpay" src="{{asset('guest/images/fpay3.png')}}" loading="lazy">
                <img class="fpay" src="{{asset('guest/images/fpay4.png')}}" loading="lazy">
            </div>
            <div class="col links">
                <a class="link" href="#">Legal</a>
                <a class="link" href="#">Privacy</a>
                <a class="link" href="#">Site Map</a>
            </div>
        </div>
    </div>
</footer>
<div class="modal" id="modal_registration">
    <div class="modal_overlay"></div>
    <div class="modal_close"></div>
    <div class="modal_wrapper">
        <div class="title">Регистрация</div>
        
        <form action="{{ route('user.register') }}" method="POST">
            @csrf
            <label class="input_field">
                <input type="text" class="reg_input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                <div class="placeholder">Имя *</div>
            </label>
            <label class="input_field">
                <input type="text" class="reg_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                <div class="placeholder">E-mail *</div>
            </label>
            <div class="mes_sub subtitle">Мессенджер для связи</div>
            <div class="messengers">
                <label class="messenger_radio">
                    <input type="radio" class="radio_mes" name="messenger" value="telegram"{{ old('messenger') == 'telegram' ? 'checked' : '' }}>
                    <img src="{{asset('guest/images/mess_telegram.svg')}}">
                    <div class="ico"></div>
                    <div class="mess_caption">Telegram</div>
                </label>
                <label class="messenger_radio">
                    <input type="radio" class="radio_mes" name="messenger" value="skype"{{ old('messenger') == 'skype' ? 'checked' : '' }}>
                    <img src="{{asset('guest/images/mess_skype.svg')}}">
                    <div class="ico"></div>
                    <div class="mess_caption">Skype</div>
                </label>
                <label class="messenger_radio">
                    <input type="radio" class="radio_mes" name="messenger" value="viber"{{ old('messenger') == 'viber' ? 'checked' : '' }}>
                    <img src="{{asset('guest/images/mess_viber.svg')}}">
                    <div class="ico"></div>
                    <div class="mess_caption">Viber</div>
                </label>
                <label class="messenger_radio">
                    <input type="radio" class="radio_mes" name="messenger" value="whatsapp"{{ old('messenger') == 'whatsapp' ? 'checked' : '' }}>
                    <img src="{{asset('guest/images/mess_whatsapp.svg')}}">
                    <div class="ico"></div>
                    <div class="mess_caption">WhatsApp</div>
                </label>
            </div>
            <label class="input_field">
                <input type="text" class="reg_input @error('messenger_login') is-invalid @enderror" name="messenger_login" value="{{ old('messenger_login') }}">
                <div class="placeholder">Логин / Тел. в мессенджере *</div>
            </label>
            <label class="check_field"> 
                <input type="checkbox" class="accept_check @error('accept') is-invalid @enderror" name="accept"{{ old('accept') ? 'checked' : '' }}>
                <div class="check"></div>
                <span class="check_text">Я согласен с <a href="#">правилами и условиями</a></span>
            </label>
            <div class="invalid_text">Пожалуйста, заполните все обязательные поля</div>
            <button id="register_submit" class="submit" type="submit">Зарегистрироваться</button>
        </form>
    </div>
    <div id="register_success">
        СПАСИБО<br>
        <span>ВАША ЗАЯВКА</span><br>
        УСПЕШНО ОТПРАВЛЕНА!
    </div>
</div>
{{-- <div class="modal" id="auth">
    <div class="modal_overlay"></div>
    <div class="form-group">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="title"><img src="{{ asset('guest/images/key.png') }} " alt=""><h3>Авторизация</h3></div>
            <div class="field">
                <label for="">Email адрес</label>
                <input type="email" placeholder="yourmail@gmail.com" name="email">
            </div>
            <div class="field">
                <label for="">Пароль</label>
                <input type="password" placeholder="******" name="password"> 
            </div>
            <div class="field remember">
                <label >
                    <input type="checkbox">Запомнить меня
                </label>
                <a href="">Забыли пароль?</a>
            </div>
            <button type="submit">Авторизоваться</button>
            <div class="registr">
                <span>Не зарегистрированы?</span>
                <a href="">Пройти регистрацию</a>
            </div>
        </form>
        <div class="block">
            <p>Добро пожаловать в</p>
            <h3>JoinGambling</h3>
        </div>
    </div>
</div> --}}
<div id="preloader_wraper">
    <div class="preloader_content">
        <video class="preloader" loop muted autoplay playsinline>
            <source src="{{asset('guest/images/Preloader4.mp4')}}">
        </video>
        <div class="preload_text"><span class="prel prel1">Загрузка</span> <span class="prel prel2">.</span> <span class="prel prel3">.</span> <span class="prel prel4">.</span></div>
    </div>
</div>
<script>
    var l1 = 40;
    var l2 = 40;
    var l3 = 40;
    resize();
    function resize(){
        if (window.innerWidth <= 640){
            l1 = 50;
            l2 = 50;
            l3 = 50;
        } else if (window.innerWidth <= 960){
            l1 = 50;
            l2 = 50;
            l3 = 50;
        }
    }
    var tower = [
        document.querySelector("HEADER").getBoundingClientRect().top - document.body.getBoundingClientRect().top,
        document.querySelector("#row_a").getBoundingClientRect().top - document.body.getBoundingClientRect().top,
        document.querySelector("#row_b").getBoundingClientRect().top - document.body.getBoundingClientRect().top,
        document.querySelector("#calc").getBoundingClientRect().top - document.body.getBoundingClientRect().top,
        document.querySelector("#row_d").getBoundingClientRect().top - document.body.getBoundingClientRect().top,
        document.querySelector("#row_e").getBoundingClientRect().top - document.body.getBoundingClientRect().top,
        document.querySelector("#row_f").getBoundingClientRect().top - document.body.getBoundingClientRect().top,
        document.querySelector("#row_g").getBoundingClientRect().top - document.body.getBoundingClientRect().top,
        document.querySelector("#row_h").getBoundingClientRect().top - document.body.getBoundingClientRect().top,
        document.querySelector("#row_k").getBoundingClientRect().top - document.body.getBoundingClientRect().top,
        document.querySelector("FOOTER").getBoundingClientRect().top - document.body.getBoundingClientRect().top
    ]
    var accordions = document.querySelectorAll(".accord_item");
    for (var a=0; a<accordions.length; a++){
        accordions[a].querySelector(".accord_body").setAttribute("data-height", accordions[a].querySelector(".accord_body").getBoundingClientRect().height);
        accordions[a].querySelector(".accord_body").style.height = "0";
        accordions[a].addEventListener("click", function(e){
            if (e.currentTarget.classList.contains("active")) {
                e.currentTarget.classList.remove("active");
                e.currentTarget.querySelector(".accord_body").style.height = 0;
            } else {
                if (document.querySelector(".accord_item.active")){
                    document.querySelector(".accord_item.active").querySelector(".accord_body").style.height = 0;
                    document.querySelector(".accord_item.active").classList.remove("active");
                }
                e.currentTarget.classList.add("active");
                e.currentTarget.querySelector(".accord_body").style.height = e.currentTarget.querySelector(".accord_body").getAttribute("data-height") + "px";
            }
        });
    }
    if (window.innerWidth <= 480){
        document.querySelector(".video_bg").src = "{{ asset('guest/images/BG_480p.mp4') }}";
        console.log(480);
    } else if (window.innerWidth <= 720){
        document.querySelector(".video_bg").src = "{{ asset('guest/images/BG_720p.mp4') }}";
        console.log(720);
    } else {
        document.querySelector(".video_bg").src = "{{ asset('guest/images/BG_1080p.mp4') }}";
        console.log(1080);
    }
    document.querySelector(".video_bg").load();
    document.querySelector(".video_bg").addEventListener("load", function(){
        document.querySelector(".video_bg").play();
    });
    document.querySelector(".video_bg").addEventListener("loadeddata", function(){
        document.body.classList.remove("show_preloader");
        setTimeout(function(){
            document.querySelector("HEADER").classList.add("active");
        }, 500);
    });
    document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function(e) {
            if (window.scrollY > tower[1] - window.innerHeight/2) document.querySelector("#row_a").classList.add("active");
            if (window.scrollY > tower[2] - window.innerHeight/2) document.querySelector("#row_b").classList.add("active");
            if (window.scrollY > tower[3] - window.innerHeight/2) document.querySelector("#calc").classList.add("active");
            if (window.scrollY > tower[4] - window.innerHeight/2) document.querySelector("#row_d").classList.add("active");
            if (window.scrollY > tower[5] - window.innerHeight/2) document.querySelector("#row_e").classList.add("active");
            if (window.scrollY > tower[6] - window.innerHeight/2) document.querySelector("#row_f").classList.add("active");
            if (window.scrollY > tower[7] - window.innerHeight/2) document.querySelector("#row_g").classList.add("active");
            if (window.scrollY > tower[8] - window.innerHeight/2) document.querySelector("#row_h").classList.add("active");
            if (window.scrollY > tower[8] - window.innerHeight/2) document.querySelector("#row_k").classList.add("active");
            if (window.scrollY > tower[8] - window.innerHeight/2) document.querySelector("FOOTER").classList.add("active");
            if (window.scrollY > tower[2] - window.innerHeight && window.scrollY < tower[4]){
                document.querySelector(".layer1").style.top = (l1 - (window.scrollY - tower[1])/100) + "%";
                document.querySelector(".layer2").style.top = (l2 - (window.scrollY - tower[1])/75) + "%";
                document.querySelector(".layer3").style.top = (l3 - (window.scrollY - tower[1])/50) + "%";
            }
        });

        $('#car1').loopslider({
            visibleItems:6,
            slideDuration:500,
            responsive:{
                960: {visibleItems: 4,step: 4},
                480: {visibleItems: 2,step: 2}
            },
            autoplay:true,
            autoplayInterval:3600,
            step:6,
            navigation:true,
            nextButton:$('#car1_r'),
            prevButton:$('#car1_l')
        });

        $('#car2').loopslider({
            visibleItems:4,
            slideDuration:500,
            responsive:{
                640: {visibleItems: 2,step: 2},
                480: {visibleItems: 1,step: 1},
            },
            autoplay:true,
            autoplayInterval:3600,
            step:4,
            navigation:true,
            nextButton:$('#car2_r'),
            prevButton:$('#car2_l')
        });


        $(document).on('click', 'a[href^="#"]', function (event) {
            if (this.classList.contains("open_modal")) return;
            event.preventDefault();
            if (document.body.classList.contains("menu_active")) document.body.classList.remove("menu_active");
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 1000);
        });

        window.addEventListener("resize", resize());
    });
</script>
</body>
</html>