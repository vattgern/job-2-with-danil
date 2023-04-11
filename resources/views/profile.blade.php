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
@php
$orders = \App\Http\Resources\OrderResource::collection(\App\Models\Order::all()->where('user_id',\Illuminate\Support\Facades\Auth::guard('sanctum')->id()));
@endphp
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
                    @foreach($orders as $order)
                        <div class=" color">
                            <p class="ifo">Данные заказа:</p>
                            <div class="dannie">
                                <div class="cont"> <img class="i" src="/img/Rectangle 180 (3).png" alt="">
                                    <p class="ppa21">Название: {{ $order->product->title }}</p>
                                    <p class="ppa22">Цена: {{ $order->product->price }}р.</p>
                                    <p class="ppa23">Вес: {{ $order->product->weight }}кг.</p>
                                    <p class="ppa">Адрес: {{ $order->contact->address }}</p>
                                    <p class="ppa">Контакты: {{ $order->contact->tel }}</p>
                                    <p class="ppa">Дата доставки заказа: {{ $order->date_order }}</p>
                                    <p class="ppa">Адрес почты: {{ $order->contact->email }}</p>
                                    <p class="ppa">ФИО: {{ $order->contact->fullName }}</p>
                                </div>
                                @if($order->status == false)
                                    <form method="post" action="/order/delete" class="ctat">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                                        <p class="ok">Статус заказа: готовится</p>
                                        <button class="no" type="submit">Отменить</button>
                                    </form>
                                @else
                                    <div class="ctat">
                                        <p class="ok">Статус заказа: доставлен</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</body>

</html>
