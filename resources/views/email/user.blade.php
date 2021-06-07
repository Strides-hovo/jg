<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HELPI.BG</title>
</head>
<body>

<h1>Здраствуйте Уважаемый {{ $details['name'] }}</h1>
<p>Вы регистрировалис в сайте {{ Config::get('constants.APP_NAME') }}</p>
<p>Вы можете зайти свой акаунт по аддресу <a href="{{ route('index')}}">Вход в админку</a></p>
<p>Ваш логин почта и парол {{ $details['password'] }}</p>
</body>
</html>