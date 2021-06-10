<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{ asset('guest/css/autorizetion.css') }}">
<body>
    <main>
    <div class="form-group">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="title"><img src="{{ asset('guest/images/key.png') }} " alt=""><h3>Авторизация</h3></div>
            <div class="field">
                <label for="">Email адрес</label>
                <input type="email" placeholder="yourmail@gmail.com" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
            <div class="field">
                <label for="">Пароль</label>
                <input type="password" placeholder="******" name="password" class="@error('password') is-invalid @enderror"required autocomplete="current-password"> 
            </div>
            <div class="field remember">
                <label >
                    <input type="checkbox"name="remember"{{ old('remember') ? 'checked' : '' }}>Запомнить меня
                </label>
                <a href="{{ route('password.request') }}">Забыли пароль?</a>
            </div>
            <button type="submit">Авторизоваться</button>
            <div class="registr">
                <span>Не зарегистрированы?</span>
                <a href="{{ url('/#registration') }}">Пройти регистрацию</a>
            </div>
        </form>
        <div class="block">
            <p>Добро пожаловать в</p>
            <h3>JoinGambling</h3>
        </div>
    </div>
    </main>
</body>
</html>



