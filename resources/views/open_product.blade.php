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
    <title>{{$product->title}}</title>
</head>

<body>
    <div class="block1_1">
        <header>
            <div class="header">
                <a class="a" href="/">
                    <p class="texth411">На главную</p>
                </a>
                <p class="texth41">Цена: {{ $product->price }}р.</p>
                <p class="texth42">Вес: {{ $product->weight }}кг.</p>
                @auth
                <a href="/logout" style="position: relative; z-index: 9999;">
                    <p class="texth42">Выйти</p>
                </a>
                @if(Auth::guard('sanctum')->user()->administrator)
                <a href="/admin">
                    <img class="icons1" src="{{ Auth::guard('sanctum')->user()->avatar  }}">
                </a>
                @else
                <a href="/">
                    <img class="icons1" src="{{ Auth::guard('sanctum')->user()->avatar  }}">
                </a>
                @endif
                @endauth
                @guest
                <a class="texth4" href="">Войти</a>
                <a href="/login"><img class="icons1" src="img/image 24.png"></a>
                @endguest
            </div>
        </header>
        <div class=" b1"></div>
        <div class="main">
            <div class="b2">
                <div class="b21">
                    <img class="img1" src="/img/Rectangle 141.png" alt="">
                    <p class="Panecillo">{{ $product->title }}</p>
                    <p class="slogan">Описание</p>
                    <div class="op_tovara">
                        {{ $product->description }}
                    </div>
                    @auth
                    <a class="a" href="#openModal">
                        <p class="pp"><button class="button2">Заказать</button> </p>
                    </a>
                    @endauth

                    <div class="b22"> <img class="img2" src="{{ $product->image }}" alt=""></div>
                </div>
            </div>
            <div class="b3"></div>
        </div>
    </div>
    <div class="comment">
        @auth
        <p class="c">Оставьте свой комментарий</p>
        <form class="area" action="/add_review" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <textarea name="content" id="tetArea" cols="30" rows="10"></textarea>
            <button id="bb" class="bb" type="submit">Отправить</button>
        </form>
        @endauth
        <p class="c">Комментарии пользователей</p>
        @php
        $reviews = \App\Http\Resources\ReviewResource::collection($product->reviews);
        @endphp
        @foreach($reviews as $review)
        {{$review}}
        {{$review->content}}
        @endforeach
    </div>

    <div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Пожалуйста заполните форму для дальнейшей отправки</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <form class="modal-body" method="post" action="/order">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <label for="">Адрес:</label>
                    <input class="i1" type="text" name="address"><br>
                    <label for="">Контакты:</label>
                    <input class="i2" type="text" name="tel"><br>
                    <label for="">Дата доставки заказа:</label>
                    <input class="i3" type="date" name="date_order"><br>
                    <label for="">Адрес почты:</label>
                    <input class="i4" type="email" name="email"><br>
                    <label for="">ФИО:</label>
                    <input class="i5" type="text" name="fio"><br>
                    <label for="">Хотите что-то добавить?</label><br>
                    <textarea name="questions" class="ff" cols="30" rows="10"></textarea><br>
                    <button class="button" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>