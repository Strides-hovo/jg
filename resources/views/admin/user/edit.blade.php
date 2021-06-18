@extends('layouts.admin')

@section('title','edit user')

@section('content')


<div class="content2 mt-120">
	<h3>{{ $user->name }}</h3>
	<form action="{{ route('admin.user.update',$user) }}" class="form-horizontal" method="POST">
		@csrf
		<div class="form-group">
			<label>баланс ETH
				<input type="text" class="form-control" value="{{ $wallets->where('cod','eth')[0]->money ?? 0 }}" name="eth">
			</label>
		</div>
		<div class="form-group">
			<label>баланс BTC
				<input type="text" class="form-control" name="btc" value="{{ $wallets->where('cod','btc')[1]->money ?? 0 }}">
			</label>
		</div>
		<div class="form-group">
			<label>пароль
				<input type="text" class="form-control" name="password" value="">
			</label>
		</div>
		<div class="form-group">
			<label>почта
				<input type="text" class="form-control" value="{{ $user->email }}" name="email">
			</label>
		</div>
		<div class="d-flex">
			<button class="btn-ban" name="ban" type="submit" value="ban" disabled>заблокировать</button>
			<button class="btn-delite" name="delete" disabled>удалить</button>
			<button class="btn-save" type="submit">Обновить</button>
		</div>
	</form>
</div>


@endsection