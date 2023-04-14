<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/catalog.css">
    <title>Каталог</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Главная</a> <img class="icons" src="img/image 24.png"></li>
                <li><a href="">Сортировать по цене</a> <img class="icons" src="img/image 24.png"></li>
                <li><a href="">Сортировать по категориям</a> <img class="icons" src="img/image 24.png"></li>
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
                    <li><a href="/login">Войти</a> <img class="icons" src="img/image 24.png"></li>
                    @endguest
                </div>
            </ul>
        </nav>
    </header>
    <div class="type">
        <p>Торты</p>
    </div>
    <main>
        <div class="section">
            <!-- <div></div> -->
            <div class="products">
                @foreach($products as $product)
                <a href="/products/{{ $product->id }}">
                    <div class="card">
                        <div class="header_card">
                            <img src="{{$product->image}}" alt="">
                        </div>
                        <div class="body_card">
                            <a href="/products/{{ $product->id }}">{{ $product->title }}</a>
                        </div>
                        <div class="footer_card">
                            <p>{{ $product->price }}p</p>
                            <img src="img/image 24.png" alt="">
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>