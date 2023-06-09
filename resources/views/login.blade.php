<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/avtor.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <title>Авторизация</title>
</head>

<body>

    <div class="avtorizasia">
        <h1>Авторизация</h1>
        <form id="form" method="post" action="{{ route('login') }}">
            @csrf
            <a href="/"><img class="IMGF" src="img/image 52.png" alt=""></a>
            <label for="email">E-mail:</label><br />
            <input placeholder="Введите e-mail" name="email" type="email" class="email" /><br /><br />
            <label for="password">Пароль:</label><br />
            <input placeholder="Введите пароль" name="password" type="password" class="password" /><br /><br />
            <div class="form">
                <a href="#"> Забыли пароль?</a><br />
                <p class="pp">
                    Нет аккаунта?
                    <a href="/register">Зарегестрироваться</a>
                </p>
            </div>
            <br />
            <button class="buttonsub" type="submit">Войти</button>
        </form>
    </div>
    <script src="/js/avtor.js">

    </script>
</body>

</html>
