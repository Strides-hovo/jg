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
					<a href="{{route('admin.panel')}}">
					
					<span class="txt">Пользователи</span>
				</a></li>
				
				<li class="menu_item">
					<a href="{{ route('admin.user.history') }}">
					
					<span class="txt">Операции</span>
					</a>
				</li>
				<li class="menu_item">
					<a href="{{ route('admin.user.create') }}">
						<span class="txt">Новый Пользовател</span>
					</a>
				</li>
				
			</menu>
			<!-- /tpl nav -->
			<div class="copyright">© JoinGambling 2020-2021.</div>
		</aside>