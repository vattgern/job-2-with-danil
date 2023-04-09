<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Профиль</title>
</head>

<body>
    <div class="prof">
        <div class="img">
            <div class="block1">
                <img class="avatar" src="img/image 53.png" alt="">
                <p class="p">Изменить фото</p>
            </div>
            <div class="block2">
                <p class="p">Администратор</p>
                <a href="#openModal"><button class="button"> Уведомления</button></a>
            </div>
        </div>
        <div class="inf">
            <div class="mail">
                <div class="flex">
                    <p class="p2">Список пользователей: </p>
                    <img class="search" src="img/image 52.png" alt="">
                </div>
                <div class="mail-color"></div>
            </div>
            <div class="buttons">
                <p class="ppp">Ваш аккаунт</p>
                <a href="/"><button class="b1">На главную</button></a><br>
                <a href="#openModal2"><button class="b2">Создание товара</button></a><br>
                <a href="/"><button class="b3">Выйти из аккаунта</button></a><br>
            </div>
        </div>
    </div>
    </div>
    <div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title2">Уведомления</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">
                    <ul>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="openModal2" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Создание нового товара</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">
                    <label for="">Название</label>
                    <input class="in1" type="text"><br>
                    <label for="">Вес</label>
                    <input class="in2" type="text"><br>

                    <label for="">Цена</label>
                    <input class="in3" type="text"><br>
                    <label class="aa" for="">Выберите фото</label><br>
                    <input class="aa2" type="file">
                    <label for="">Описание:</label><br>
                    <textarea name="" id="" cols="30" rows="10"></textarea><br>
                    <button class="bb1">Отправить</button>
                </div>
            </div>
        </div>
    </div>
</body>
</body>

</html>