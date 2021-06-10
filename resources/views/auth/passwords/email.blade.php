@extends('layouts.auth')

@section('content')
        <div class="modal-success @if(session('status')) active @endif">
            <div class="modal_overlay"></div>
            <div class="info">
                <div class="close"></div>
                <img src="{{asset('guest/images/success.png')}}" alt="" class="success">
                <h4>Мы выслали инструкцию по восстановлению вам на почту!</h4>
                <p>В случае, если не смогли найти письмо, пожалуйста проверьте папку спам</p>
                <button type="button" class="info_btn">ОК</button>
            </div>
        </div>

<div class="reset">
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <h3>Забыли пароль?</h3>
        <p class="info">Введите ваш email адрес, и мы вышлем вам инструкцию по получению нового пароля.</p>
            <label for="">Email адрес</label>
            <input type="text" placeholder="yourmail@gmail.com" class="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <button type="submit" class="">подтвердить восстановление</button>
    </form>
</div>
<script>
    document.querySelector('.modal-success').addEventListener('click',function(e){
        if (e.target.classList.contains('info_btn') || e.target.classList.contains('close')) {
            document.querySelector('.modal-success').classList.remove('active')
        }
    })
</script>
@endsection
