@extends('layouts.user')

@section('title','Личный кобинет')

@section('content')

		{{--<main>--}}
			<div class="content_wrapper">
				<h1><img class="icon" src="{{asset('images/icon_1.svg')}}">Ваша финансовая статистика</h1>
				<div class="content chart_content">
					<div class="wrap super_wrapper">
						<div class="caption_wrapper">
							<div class="caption">Статистика в реальном времени</div>
							<div class="chart_select active" data-range="0">За день</div>
							<div class="chart_select" data-range="1">За неделю</div>
							<div class="chart_select" data-range="2">За месяц</div>
						</div>
						<div class="legend">
							<div class="period">24 Апреля 2021, 17:24 по МСК</div>
							<div class="line yellow">Показов</div>
							<div class="line grey">Переходов</div>
						</div>
						<div class="graph">
							<svg class="svg" viewBox="0 0 1015 360" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" vector-effect="non-scaling-stroke">
								<defs>
									<linearGradient id="fill_graph" x1="0" x2="1" y1="0" y2="0">
										<stop offset="0%" stop-color="rgba(251, 237, 16, .1)"/>
										<stop offset="100%" stop-color="rgba(251, 237, 16, 0)"/>
									</linearGradient>
								</defs>
								<line class="grid" x1="0" y1="360" x2="1015" y2="360"/>
								<line class="grid" x1="0" y1="300" x2="1015" y2="300"/>
								<line class="grid" x1="0" y1="240" x2="1015" y2="240"/>
								<line class="grid" x1="0" y1="180" x2="1015" y2="180"/>
								<line class="grid" x1="0" y1="120" x2="1015" y2="120"/>
								<line class="grid" x1="0" y1="60" x2="1015" y2="60"/>
								<line class="grid" x1="0" y1="0" x2="1015" y2="0"/>
							</svg>
							<div class="nodata_message">Нет данных за выбранный период</div>
							<div class="points">
								<div class="value_line"></div>
							</div>
						</div>
					</div>
					<div class="side_wrapper small_wrapper clearfix">
						<div class="col">
							<a href="statistics.html" class="wrap item">
								<div class="sidecaption">Показов рекламы</div>
								<div class="number">16 553</div>
							</a>
						</div>
						<div class="col">
							<a href="statistics.html" class="wrap item">
								<div class="sidecaption">Переходов по рекламе</div>
								<div class="number">1 423</div>
							</a>
						</div>
						<div class="col">
							<a href="statistics.html" class="wrap item">
								<div class="sidecaption">Привлечено пользователей</div>
								<div class="number">132</div>
							</a>
						</div>
						<div class="col">
							<a href="statistics.html" class="wrap item">
								<div class="sidecaption">Доход по депозитам</div>
								<div class="number">134 245₽</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<script>
				var dataSet1 = [90, 180, 250, 285, 293, 282, 279, 310, 415, 502, 450, 319, 218, 179, 182, 233, 325, 369, 470, 488, 470, 431, 392, 380];	<!--initial chart dataset1 -->
				var dataSet2 = [330, 345, 328, 298, 259, 243, 249, 270, 330, 345, 346, 338, 260, 210, 175, 170, 233, 325, 333, 290, 280, 241, 185, 175]; <!--initial chat dataset2 -->
			</script>
			<script src="{{asset('js/chart_script.js')}}"></script>
			<!-- /tpl body -->
			<!-- tpl footer -->
			<div class="preloader_overlay">
				<div class="preloader_wrapper">
					<div class="preloader preloader3"></div>
					<div class="preloader preloader2"></div>
					<div class="preloader preloader1"></div>
				</div>
			</div>
		{{--</main>--}}

@endsection