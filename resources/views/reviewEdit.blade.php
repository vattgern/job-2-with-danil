<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/reviewEdit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Каталог</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/">Главная</a> <img class="icons" src="/img/image 24.png"></li>
            <li><a href="">Сортировать по цене</a> <img class="icons" src="/img/image 24.png"></li>
            <li><a href="">Сортировать по категориям</a> <img class="icons" src="/img/image 24.png"></li>
            <div>
                @auth
                    <li><a href="/logout">Выйти</a></li>
                    @if(Auth::guard('sanctum')->user()->administrator)
                        <li><a href="/admin"><img class="icons" src="{{ Auth::guard('sanctum')->user()->avatar  }}"></a></li>
                    @else
                        <li><a href="/profile"><img class="icons" src="{{ Auth::guard('sanctum')->user()->avatar  }}"></a></li>
                    @endif
                @endauth
                @guest
                    <li><a href="/login">Войти</a> <img class="icons" src="/img/image 24.png"></li>
                @endguest
            </div>
        </ul>
    </nav>
</header>
<main>
    <div class="review">
        <div class="review-header">
            <h3 class="review-title">Редактирование отзыва</h3>
        </div>
        <div class="review-body">
            <form action="/reviews/{{$review->id}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" name="product_id" value="{{$product}}">
                <label for="">Оценка:</label>
                <span class="star__container">
                    @for($i = 1; $i < 6; $i++)
                        @if($review->count == $i)
                            <input type="radio" name="count" value="{{$i}}" id="star-{{$i}}" checked class="star__radio visuhide">
                        @else
                            <input type="radio" name="count" value="{{$i}}" id="star-{{$i}}" class="star__radio visuhide">
                        @endif
                    @endfor
                    <label class="star__item" for="star-1"><span class="visuhide">1 star</span></label>
                        <label class="star__item" for="star-2"><span class="visuhide">2 stars</span></label>
                        <label class="star__item" for="star-3"><span class="visuhide">3 stars</span></label>
                        <label class="star__item" for="star-4"><span class="visuhide">4 stars</span></label>
                        <label class="star__item" for="star-5"><span class="visuhide">5 stars</span></label>
                </span>
                <label for="">Текст</label>
                <textarea id="" cols="30" rows="10" name="content">{{$review->content}}</textarea>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
</main>
<footer>

</footer>
</body>

</html>
