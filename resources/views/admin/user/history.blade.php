@extends('layouts.admin')

@section('title','edit user')

@section('content')


<div class="content2 mt-120">
	<h3></h3>
	<form action="" class="form-horizontal" method="POST">
		
		<div class="form-group">
			<label for="">баланс
				<input type="text" class="form-control">
			</label>
		</div>
		<div class="form-group">
			<label for="">пароль
				<input type="text" class="form-control">
			</label>
		</div>
		<div class="form-group">
			<label for="">почта
				<input type="text" class="form-control" value="">
			</label>
		</div>
		<div class="d-flex">
			
			<button class="btn-ban">заблокировать</button>
		
			
			<button class="btn-delite">удалить</button>
		
			
			<button class="btn-save">Сохранить</button>
		</div>

	</form>
</div>


@endsection