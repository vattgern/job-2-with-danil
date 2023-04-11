<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prof.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Профиль {{Auth::guard('sanctum')->user()->name}}</title>
</head>

<body>
    <div class="prof">
        <div class="img">
            <div class="block1">
                <img class="avatar" style="width: 50px; height: 50px;" src="{{Auth::guard('sanctum')->user()->avatar}}" alt="">
                <p class="p">Изменить фото</p>
            </div>
            <div class="block2">
                <p class="p">{{Auth::guard('sanctum')->user()->name}}</p>
                <a href="#openModal"><button class="button"> Ваши заказы</button></a>

            </div>
        </div>
        <div class="inf">
            <div class="buttons1">
                <p class="ppp1">Ваш аккаунт</p>
                <a href="/"><button class="b11">На главную</button></a><br>
                <a href="/logout"><button class="b31">Выйти из аккаунта</button></a><br>
            </div>
        </div>
    </div>
    </div>
    <div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title21">Заказы</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">
                    <div class=" color">
                        <p class="ifo">Данные заказа:</p>
                        <div class="dannie">
                            <div class="cont"> <img class="i" src="img/Rectangle 180 (3).png" alt="">
                                <p class="ppa21">Название: Торт “Вишня”</p>
                                <p class="ppa22">Цена: 2000р.</p>
                                <p class="ppa23">Вес: 2кг.</p>
                                <p class="ppa">Адрес: Улица Чернышевского квартира 3</p>
                                <p class="ppa">Контакты: 89608656172</p>
                                <p class="ppa">Дата доставки заказа: 06.06.2023</p>
                                <p class="ppa">Адрес почты: Vasilisa.genadievna1@mail.com</p>
                                <p class="ppa">ФИО: Якушева Василиса Генадьевна</p>
                            </div>
                            <div class="ctat">
                                <p class="ok">Статус заказа: принят</p>
                                <button class="no">Отменить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</body>

</html>