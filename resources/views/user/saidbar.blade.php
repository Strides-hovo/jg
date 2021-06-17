<aside>
			<a class="logo_wrap" href="{{route('index')}}">
				<img src="{{ asset('images/jg_logo.svg') }}" alt="">
			</a>
			<div class="side_block">
				<div class="avatar"></div>
				<div class="side_balance">Баланс:
					<div class="balance_val">75 690₽</div>
				</div>
			</div>
				<!-- tpl nav -->
			<menu>
				<!-- active -->	<li class="menu_item active">
					<a href="{{route('user.panel')}}">
					<svg class="ico" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 8.66667C21 9.58333 20.2636 10.3333 19.3636 10.3333C19.2164 10.3333 19.0773 10.3167 18.9464 10.275L16.0336 13.2333C16.0745 13.3667 16.0909 13.5167 16.0909 13.6667C16.0909 14.5833 15.3545 15.3333 14.4545 15.3333C13.5545 15.3333 12.8182 14.5833 12.8182 13.6667C12.8182 13.5167 12.8345 13.3667 12.8755 13.2333L10.7891 11.1083C10.6582 11.15 10.5109 11.1667 10.3636 11.1667C10.2164 11.1667 10.0691 11.15 9.93818 11.1083L6.21545 14.9083C6.25636 15.0417 6.27273 15.1833 6.27273 15.3333C6.27273 16.25 5.53636 17 4.63636 17C3.73636 17 3 16.25 3 15.3333C3 14.4167 3.73636 13.6667 4.63636 13.6667C4.78364 13.6667 4.92273 13.6833 5.05364 13.725L8.78454 9.93333C8.74364 9.8 8.72727 9.65 8.72727 9.5C8.72727 8.58333 9.46364 7.83333 10.3636 7.83333C11.2636 7.83333 12 8.58333 12 9.5C12 9.65 11.9836 9.8 11.9427 9.93333L14.0291 12.0583C14.16 12.0167 14.3073 12 14.4545 12C14.6018 12 14.7491 12.0167 14.88 12.0583L17.7845 9.09167C17.7436 8.95833 17.7273 8.81667 17.7273 8.66667C17.7273 7.75 18.4636 7 19.3636 7C20.2636 7 21 7.75 21 8.66667Z"/></svg>
					<span class="txt">Главная</span>
				</a></li>
				<li class="menu_item"><a href="{{route('transfer.insert')}}">
					<svg class="ico" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.2 5H4.8C3.8055 5 3.009 5.78312 3.009 6.75L3 17.25C3 18.2169 3.8055 19 4.8 19H19.2C20.1945 19 21 18.2169 21 17.25V6.75C21 5.78312 20.1945 5 19.2 5ZM19.2 17.25H4.8V12H19.2V17.25ZM19.2 9.375H4.8V6.75H19.2V9.375Z"/></svg>
					<span class="txt">Пополнить</span>
				</a></li>
				<li class="menu_item">
					<svg class="ico" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 13H5V11H3V13ZM3 17H5V15H3V17ZM3 9H5V7H3V9ZM7 13H21V11H7V13ZM7 17H21V15H7V17ZM7 7V9H21V7H7Z"/></svg>
					<span class="txt">Депозиты</span>
					<ul class="submenu">
						<li><a href="{{ route('create.deposit') }}"><span class="txt">Создать депозит</span></a></li>
						<li><a href="{{ route('deposits') }}"><span class="txt">Ваши депозиты</span></a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="{{ route('history') }}">
					<svg class="ico" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 10H3V12H16V10ZM16 6H3V8H16V6ZM3 16H8V14H3V16ZM19.5 11.5L21 13L14.005 20L9.5 15.5L11 14L14.005 17L19.5 11.5Z"/></svg>
					<span class="txt">Операции</span>
				</a></li>
				<li class="menu_item {{ Request::is('user/wallets') || Request::is('user/transfer') || Request::is('user/transfer.out') ? 'active' : '' }}">
					<svg class="ico" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.2 5H4.8C3.8055 5 3.009 5.78312 3.009 6.75L3 17.25C3 18.2169 3.8055 19 4.8 19H19.2C20.1945 19 21 18.2169 21 17.25V6.75C21 5.78312 20.1945 5 19.2 5ZM19.2 17.25H4.8V12H19.2V17.25ZM19.2 9.375H4.8V6.75H19.2V9.375Z"/></svg>
					<span class="txt">Финансы</span>
					<ul class="submenu">
						<li><a href="{{ route('wallets') }}"><span class="txt">Кошельки</span></a></li>
						<li><a href="{{ route('user.transfer') }}"><span class="txt">Перевести</span></a></li>
						<li><a href="{{ route('user.transfer.out') }}"><span class="txt">Вывести</span></a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="{{ route('user.partners') }}">
					<svg class="ico" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 5.9C12.16 5.9 13.1 6.84 13.1 8C13.1 9.16 12.16 10.1 11 10.1C9.84 10.1 8.9 9.16 8.9 8C8.9 6.84 9.84 5.9 11 5.9ZM11 14.9C13.975 14.9 17.1 16.355 17.1 17V18.1H4.9V17C4.9 16.355 8.025 14.9 11 14.9ZM11 4C8.79 4 7 5.79 7 8C7 10.205 8.79 12 11 12C13.21 12 15 10.205 15 8C15 5.79 13.21 4 11 4ZM11 13C8.335 13 3 14.335 3 17V20H19V17C19 14.335 13.665 13 11 13Z"/><path d="M22 8.25H19.75V6H18.25V8.25H16V9.75H18.25V12H19.75V9.75H22V8.25Z"/></svg>
					<span class="txt">Партнёрка</span>
				</a></li>
				<li class="menu_item"><a href="{{ route('user.edit') }}">
					<svg class="ico" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.7544 17.6845L13.2637 10.1938C14.0005 8.31091 13.5912 6.05962 12.0767 4.54511C10.4394 2.90781 7.98345 2.58035 6.01868 3.5218L9.57982 7.08293L7.08293 9.57982L3.5218 6.01868C2.58035 7.98345 2.90781 10.4394 4.54511 12.0767C6.05962 13.5912 8.31091 14.0005 10.1938 13.2637L17.6845 20.7544C18.0119 21.0819 18.544 21.0819 18.8306 20.7544L20.7544 18.8306C21.0819 18.544 21.0819 18.0119 20.7544 17.6845Z"/></svg>
					<span class="txt">Настройки</span>
				</a></li>
				<li class="menu_item">
					<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
					<svg class="ico" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M19 4H5C4.10544 4 3 5.01669 3 6V9H4.89456V6H19V18H5V15H3V18C3 18.9833 4.04568 20 5 20H19C19.9543 20 21.1673 18.9789 21.1673 18L21 6C21 5.01669 19.9543 4 19 4ZM12 15L16 12L12 9L12 11H3V13H12V15Z"/></svg>
					<span class="txt">Выйти</span>
				</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</li>
			</menu>
			<!-- /tpl nav -->
			<div class="copyright">© JoinGambling 2020-2021.</div>
		</aside>