@extends('app')

@section('title')
    Ошибка! Недостаточно прав!
@stop

@section('content')
    <h4>Недостаточно прав для выполнения операции!</h4>
    <p><a onclick="history.back();">Назад</a></p>
@stop
