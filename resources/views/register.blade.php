<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/registr.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Регистрация</title>
</head>

<body>

    <div class="avtorizasia">
        <h1>Регистрация</h1>
        <form class="formsub">
            <a href="/"><img class="IMGF" src="img/image 52.png" alt=""></a>
            <label for="title">Имя:</label><br />
            <input placeholder="Введите имя" type="text" class="name" name="username" id="username" required /><br /><br />
            <label for="email">E-mail:</label><br />
            <input placeholder="Введите e-mail" type="email" class="email" name="email" id="email" required /><br /><br />
            <label for="password">Пароль:</label><br />
            <input placeholder="Введите пароль" type="password" class="password" name="password" id="password" pattern="{8,}" required /><br /><br />
            <label for="password">Аватар:</label><br />
            <input type="file" class="confid" name="avatar" id="avatar" required /><br /><br />
            <p class="pp">Есть аккаунт? <a href="/login">Войти</a></p>

            <br />
            <button type="submit">Зарегестрироваться</button>
        </form>
    </div>
    <script src="/js/registr.js"></script>
</body>

</html>