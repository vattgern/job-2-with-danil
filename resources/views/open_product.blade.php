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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <a class="texth4" href="/login">Войти</a>
                <a href="/login"><img class="icons1" src="/img/image 24.png"></a>
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

            <span class="star__container">
              <input type="radio" name="count" value="1" id="star-1" class="star__radio visuhide">
              <input type="radio" name="count" value="2" id="star-2" class="star__radio visuhide">
              <input type="radio" name="count" value="3" id="star-3" class="star__radio visuhide">
              <input type="radio" name="count" value="4" id="star-4" class="star__radio visuhide">
              <input type="radio" name="count" value="5" id="star-5" class="star__radio visuhide">

              <label class="star__item" for="star-1"><span class="visuhide">1 star</span></label>
              <label class="star__item" for="star-2"><span class="visuhide">2 stars</span></label>
              <label class="star__item" for="star-3"><span class="visuhide">3 stars</span></label>
              <label class="star__item" for="star-4"><span class="visuhide">4 stars</span></label>
              <label class="star__item" for="star-5"><span class="visuhide">5 stars</span></label>
            </span>
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <textarea name="content" id="tetArea" cols="30" rows="10"></textarea>
            <button id="bb" class="bb" type="submit">Отправить</button>
        </form>
        @endauth
        <p class="c">Комментарии пользователей</p>
        @foreach($product->reviews as $review)
            @if($review->ban != true)
                    <img src="{{ $review->user->avatar }}" alt="">
                    ({{$review->user->name}})
                    {{$review->content}}
                    <br>
                    {{ $review->created_at }}
                    <span class="star__container">
                        @for($i = 0; $i < 5; $i++)
                            @if($review->count > $i)
                                <input type="radio" name="rating" id="review-{{$review->id}}" value="{{$i + 1}}" checked disabled class="star__radio visuhide">
                            @else
                                <input type="radio" name="rating" id="review-{{$review->id}}" value="{{ $i + 1 }}" disabled class="star__radio visuhide">
                            @endif
                        @endfor
                      <label class="star__item" for="review-{{$review->id}}"><span class="visuhide">1 star</span></label>
                      <label class="star__item" for="review-{{$review->id}}"><span class="visuhide">2 stars</span></label>
                      <label class="star__item" for="review-{{$review->id}}"><span class="visuhide">3 stars</span></label>
                      <label class="star__item" for="review-{{$review->id}}"><span class="visuhide">4 stars</span></label>
                      <label class="star__item" for="review-{{$review->id}}"><span class="visuhide">5 stars</span></label>
                    </span>

                    @auth
                        @if(Auth::guard('sanctum')->user()->administrator)
                            <form method="post" action="/admin/reviews/{{ $review->id }}">
                                @csrf
                                @method('PATCH')
                                <button type="submit">Забанить</button>
                            </form>
                        @elseif(Auth::guard('sanctum')->id() == $review->user_id)
                            <form method="post" action="/reviews/{{ $review->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Удалить</button>
                            </form>
                            <a href="">Редактирование</a>
                        @endif
                    @endauth
                    <hr>
            @endif
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
