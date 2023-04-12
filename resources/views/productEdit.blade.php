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
<body>
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
    <textarea id="" cols="30" rows="10" name="description">
        {{ $product->description }}
    </textarea><br>
    <input class="bb1" type="submit" value="Отправить">
</form>
</body>
</html>
