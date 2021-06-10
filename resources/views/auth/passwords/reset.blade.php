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
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <h3>Восстановление пароля</h3>
        <p class="info">Спасибо, ваш email адрес подтвержден. Придумайте новый пароль для входа.</p>
            <input type="hidden"  type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            <label for="password">Новый пароль</label>
            <input id="password" type="password" class="password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="********">
            <label for="password-confirm">Подтвердите пароль</label>
            <input id="password-confirm" type="password" class="password @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="********">
        <button type="submit" class="">сменить пароль</button>
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
