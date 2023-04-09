<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/card.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Карта товара</title>
</head>

<body>
    <div class="block1_1">
        <header>
            <div class="header">
                <a class="a" href="/">
                    <p class="texth411">На главную</p>
                </a>
                <p class="texth41">Цена: 2000р.</p>
                <p class="texth42">Вес: 2кг.</p>
                <a class="texth4" href="">Войти</a>
                <a href="/login"><img class="icons1" src="img/image 24.png"></a>
            </div>
        </header>
        <div class=" b1"></div>
        <div class="main">
            <div class="b2">
                <div class="b21">
                    <img class="img1" src="img/Rectangle 141.png" alt="">
                    <p class="Panecillo">Торт “Vanilla”</p>
                    <p class="slogan">Описание</p>
                    <div class="op_tovara">nflkgj gkjgh jgfjlkg kjffgk j,hkjfn fkgjb kjfb kj bkjnb kjn gjn kj bkjhgjfkvnj</div>
                    <a class="a" href="#openModal">
                        <p class="pp"><button class="button2">Заказать</button> </p>
                    </a>
                    <div class="b22"> <img class="img2" src="img/Rectangle 180 (2).png" alt=""></div>
                </div>
            </div>
            <div class="b3"></div>
        </div>
    </div>
    <div class="comment">
        <p class="c">Оставьте свой комментарий</p>
        <div class="area">
            <textarea name="" id="tetArea" cols="30" rows="10"></textarea>
            <button id="bb" class="bb" type="submit">Отправить</button>
        </div>
        <p class="c">Комментарии пользователей</p>
    </div>

    <div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Пожалуйста заполните форму для дальнейшей отправки</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">
                    <label for="">Адрес:</label>
                    <input class="i1" type="text"><br>
                    <label for="">Контакты:</label>
                    <input class="i2" type="text"><br>
                    <label for="">Дата доставки заказа:</label>
                    <input class="i3" type="text"><br>
                    <label for="">Адрес почты:</label>
                    <input class="i4" type="text"><br>
                    <label for="">ФИО:</label>
                    <input class="i5" type="text"><br>
                    <label for="">Хотите что-то добавить?</label><br>
                    <textarea name="" class="ff" id="" cols="30" rows="10"></textarea><br>
                    <button class="button">Отправить</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>