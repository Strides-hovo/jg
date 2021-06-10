<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JoinGambling</title>
</head>
<body>

<h1>Успешная регистрация JoinGambling</h1>
<p>Спасибо, ваша учетная запись в JoinGambling успешно активирована!</p>

<p>Для авторизации в системе пожалуйста перейдите по ссылке: <a href="{{ route('user.panel')}}">Вход в админку</a></p>
<p>Ваш логин для входа {{ $details['email'] }}</p>
<p>Ваш пароль для входа {{ $details['password'] }}</p>
<p>Пожалуйста не отвечайте на данное письмо. Адрес, с которого оно получено, используется только для отправки уведомлений.<p>
<p>Для связи со службой технической поддержки используйте адрес support@joingambling.com или раздел Техподдержка.</p>

<p>С уважением, команда JoinGambling.</p>
</body>
</html>