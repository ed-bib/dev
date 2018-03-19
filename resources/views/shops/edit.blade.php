@extends('app')

@section('title')
    Редактировать товар
@stop

@section('content')
    <h4><a href="/shops">Каталог товаров</a> &laquo; Редактировать товар</h4>
    @include('errors.list')
    <hr/>
    {!! Form::model($shop, ['method' => 'PATCH', 'action' => ['ShopsController@update', $shop->id]]) !!}
        @foreach($shop->toArray() as $prop => $val)
            @if($prop != 'id' && $prop != 'user_id')
                <div class="form-group">
                    {!! Form::label($prop, "$prop:") !!}
                    @if($prop != 'description')                
                        {!! Form::text($prop, $val, ['class' => 'form-control']) !!}
                    @else
                        {!! Form::textarea($prop, $val, ['class' => 'form-control']) !!}
                    @endif
                </div>
            @endif
        @endforeach

        <div class="form-group">
            {!! Form::submit('Сохранить', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop
