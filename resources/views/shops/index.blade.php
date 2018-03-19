@extends('app')

@section('title')
    Каталог товаров
@stop

@section('content')
    <h4>Каталог товаров &raquo; <a href="/shops/create">Добавить товар</a></h4>
    <hr/>
    <ul>
        @foreach ($shops as $shop)
            <li><a href="/shops/{{ $shop->id }}">{{ $shop->name }}</a></li>
        @endforeach
    </ul>
@stop
