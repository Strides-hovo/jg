@extends('layouts.admin')

@section('title','edit user')

@section('content')


<div class="content2 mt-120">
	<h3>{{ $user->name }}</h3>
	<form action="{{ route('admin.user.update',$user) }}" class="form-horizontal" method="POST">
		@csrf
		<div class="form-group">
			<label>баланс
				<input type="text" class="form-control">
			</label>
		</div>
		<div class="form-group">
			<label>пароль
				<input type="text" class="form-control">
			</label>
		</div>
		<div class="form-group">
			<label>почта
				<input type="text" class="form-control" value="{{ $user->email }}">
			</label>
		</div>
		<div class="d-flex">
			<button class="btn-ban" name="ban" type="button">заблокировать</button>
			<button class="btn-delite" name="delete">удалить</button>
			<button class="btn-save" type="submit">Обновить</button>
		</div>
	</form>
</div>


@endsection