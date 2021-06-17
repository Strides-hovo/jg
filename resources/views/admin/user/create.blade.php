@extends('layouts.admin')

@section('title','Создать Ползовотеля')

@section('content')


<div class="content2 mt-120">
	<h3>Создать Новый Ползовотеля</h3>
	<form action="{{ route('admin.user.store') }}" class="form-horizontal" method="POST">
		@csrf
		<div class="form-group">
			<label>Имя
				<input type="text" class="form-control" name="name" required>
			</label>
		</div>
		<div class="form-group">
			<label>Почта
				<input type="email" class="form-control" name="email" required>
			</label>
		</div>
		<div class="form-group">
			<label>Пароль
				<input type="text" class="form-control" name="password" required>
			</label>
		</div>
		<div class="form-group">
			<label>Месенджер
				<input type="text" class="form-control" name="messenger" required>
			</label>
		</div>
		<div class="form-group">
			<label>Логин Месенджера
				<input type="text" class="form-control" name="messenger_login" required>
			</label>
		</div>

		<div class="d-flex">
			<button class="btn-save" type="submit">Сохранить</button>
		</div>

	</form>
</div>


@endsection