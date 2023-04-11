<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panecillo</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
@php
use Illuminate\Support\Facades\Auth;

$arrOne = [];
$arrTwo = [];
$arrThree = [];
$arrFour = [];
foreach ($products as $index => $product) {
if($index < 4){ $arrOne[]=$product; } if( $index>= 4 && $index < 8){ $arrTwo[]=$product; } if($index>= 8 && $index < 12){ $arrThree[]=$product; } if($index> 11){
            $arrFour[] = $product;
            }
            }
            @endphp

            <body style="overflow-x: hidden;">
                <div class="block1_1">
                    <header>
                        <div class="header">
                            <p class="texth41">Сортировать по цене</p>
                            <img class="icons" src="img/image 24.png">
                            <p class="texth42">Сортировать по категории</p>
                            <img class="icons" src="img/image 24.png">
                            @auth
                            <a href="/logout" style="position: relative; z-index: 9999;">
                                <p class="texth4">Выйти</p>
                            </a>
                            @if(Auth::guard('sanctum')->user()->administrator)
                            <a href="/admin">
                                <img class="icons1" src="{{ Auth::guard('sanctum')->user()->avatar  }}">
                            </a>
                            @else
                            <a href="/profile">
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
                                <img class="img1" src="img/Rectangle 141.png" alt="">
                                <p class="Panecillo">Panecillo</p>
                                <p class="slogan">Приятное начало хорошего дня</p>
                                <img class="Group" src="img/Group 5.png" alt="">
                                <img class="r" src="img/Rectangle 140.png" alt="">
                                <p class="pp">Подробнее</p>
                                <div class="b22"><img class="img2" src="img/Rectangle 180 (1).png" alt=""></div>
                            </div>
                        </div>
                        <div class="b3"></div>
                    </div>
                </div>
                <div class="catalog">
                    <div class="line1"></div>
                    <div class="content">
                        <img class="rightr" src="img/Rectangle 172.png" alt="">
                        <p class="right">Торты</p>
                        <img class="zagaga" src="img/Vector 25.png" alt="">
                        <div class="container">
                            @foreach($arrOne as $product)
                            <div class="block_cont" id="f1">
                                <img class="cake" src="{{ $product->image }}" alt="">
                                <a href="/products/{{ $product->id }}" class="name">{{ $product->title }}</a>

                                <div class="block_conte">
                                    <p class="price">{{ $product->price }}p</p>
                                    <img class="last" src="img/image 24.png" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="line2"></div>

                </div>
                <div class="a">
                    <div class="content2">
                        <img class="rightr" src="img/Rectangle 172.png" alt="">
                        <p class="right">Торты</p>
                        <img class="zagaga" src="img/Vector 25.png" alt="">
                        <div class="container">
                            @foreach($arrTwo as $product)
                            <div class="block_cont" id="f1">
                                <img class="cake" src="{{ $product->image }}" alt="">
                                <a href="/products/{{ $product->id }}" class="name">{{ $product->title }}</a>

                                <div class="block_conte">
                                    <p class="price">{{ $product->price }}p</p>
                                    <img class="last" src="img/image 24.png" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="a">
                    <div class="content2">
                        <img class="rightr" src="img/Rectangle 172.png" alt="">
                        <p class="right">Торты</p>
                        <img class="zagaga" src="img/Vector 25.png" alt="">
                        <div class="container">
                            @foreach($arrThree as $product)
                            <div class="block_cont" id="f1">
                                <img class="cake" src="{{ $product->image }}" alt="">
                                <a href="/products/{{ $product->id }}" class="name">{{ $product->title }}</a>

                                <div class="block_conte">
                                    <p class="price">{{ $product->price }}p</p>
                                    <img class="last" src="img/image 24.png" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="a">
                    <div class="content2">
                        <img class="rightr" src="img/Rectangle 172.png" alt="">
                        <p class="right">Торты</p>
                        <img class="zagaga" src="img/Vector 25.png" alt="">
                        <div class="container">
                            @foreach($arrFour as $product)
                            <div class="block_cont" id="f1">
                                <img class="cake" src="{{ $product->image }}" alt="">
                                <a href="/products/{{ $product->id }}" class="name">{{ $product->title }}</a>

                                <div class="block_conte">
                                    <p class="price">{{ $product->price }}p</p>
                                    <img class="last" src="img/image 24.png" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <p class="trama">Лучшие работы кондитера </p>
                <img class="rama" src="img/Rectangle 246.png" alt="">
                <div class="f">
                    <div class="slperekhodnik">

                        <aside class="gablok_sedakoda">
                            <div class="slayder_karusel">
                                <figure><img src="img/а.avif" alt="">

                                </figure>
                                <figure><img src="img/й.avif" alt="">

                                </figure>
                                <figure><img src="img/л.avif" alt="">

                                </figure>
                                <figure><img src="img/с.avif" alt="">

                                </figure>
                                <figure><img src="img/lll.avif" alt="">

                                </figure>
                            </div>
                        </aside>

                    </div>
                    <div class="slperekhodnik">

                        <aside class="gablok_sedakoda">
                            <div class="slayder_karusel">
                                <figure><img src="img/й.avif" alt="">

                                </figure>
                                <figure><img src="img/л.avif" alt="">

                                </figure>
                                <figure><img src="img/с.avif" alt="">

                                </figure>
                                <figure><img src="img/lll.avif" alt="">

                                </figure>
                                <figure><img src="img/а.avif" alt="">

                                </figure>
                            </div>
                        </aside>

                    </div>
                    <div class="slperekhodnik">

                        <aside class="gablok_sedakoda">
                            <div class="slayder_karusel">

                                <figure><img src="img/л.avif" alt="">

                                </figure>
                                <figure><img src="img/с.avif" alt="">

                                </figure>
                                <figure><img src="img/lll.avif" alt="">

                                </figure>
                                <figure><img src="img/а.avif" alt="">

                                </figure>
                                <figure><img src="img/й.avif" alt="">

                                </figure>
                            </div>
                        </aside>

                    </div>
                    <div class="slperekhodnik">

                        <aside class="gablok_sedakoda">
                            <div class="slayder_karusel">
                                <figure><img src="img/с.avif" alt="">

                                </figure>
                                <figure><img src="img/lll.avif" alt="">

                                </figure>
                                <figure><img src="img/а.avif" alt="">

                                </figure>
                                <figure><img src="img/й.avif" alt="">

                                </figure>
                                <figure><img src="img/л.avif" alt="">

                                </figure>
                            </div>
                        </aside>

                    </div>
                </div>
                <div class="footer">
                    <p class="ft">Panecillo</p>
                    <div class="iconss">
                        <img class="imgg" src="img/image 21.png" alt=""><img class="imgg" src="img/image 21.png" alt=""><img class="imgg" src="img/image 21.png" alt="">
                    </div>
                    <p class="fb">Немного блаженства в каждом кусочке</p>

                    <img class="mail_img" src="img/Rectangle 182 (1).png" alt="">
                    <p class="mail">Связаться с нами: Panechillo@mail.com</p>
                </div>
                {{-- <script src="/js/script.js"></script>--}}
            </body>

</html>