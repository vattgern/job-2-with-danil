<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/productEdit.css">
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
            <h3 class="review-title">Редактирование товара</h3>
        </div>
        <div class="review-body">
            @php
                $categories = \App\Models\Category::all()
            @endphp
            <form action="/admin/product/update" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $id }}">
                <label for="">Название</label>
                <input class="in1" type="text" name="title" value="{{ $product->title }}"><br>
                <label for="">Вес</label>
                <input class="in2" type="text" name="weight" value="{{ $product->weight }}"><br>

                <label for="">Категория</label>
                <select name="category_id" id="">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select><br>

                <label for="">Цена</label>
                <input class="in3" type="text" name="price" value="{{ $product->price }}"><br>
                <label class="aa" for="">Выберите фото</label><br>
                <input class="aa2" type="file" name="image">
                <label for="">Описание:</label><br>
                <textarea id="" cols="30" rows="10" name="description">{{ $product->description }}
                </textarea><br>
                <input class="bb1" type="submit" value="Отправить">
            </form>
        </div>
    </div>
</main>
<footer>

</footer>
</body>

</html>

