@extends('app')

@section('title')
    Просмотр товара
@stop

@section('content')
    <h4><a href="/shops">Каталог товаров</a> &laquo; Просмотр товара</h4>
    <div class="body">
        <hr/>
        <p>
            <a href="/shops/{{ $shop->id }}/edit">Редактировать</a> |
            <a href="/shops/{{ $shop->id }}/delete">Удалить</a>
        </p>        
        <img src="{{ $shop->image }}" width="120" height="100" alt="" />
        
        {!! Form::model($shop) !!}
            @foreach($shop->toArray() as $prop => $val)
                @if($prop != 'id' && $prop != 'user_id')
                    <div class="form-group">
                        @if($prop != 'description' && $prop != 'image')
                            {!! Form::label($prop, "$prop:") !!}               
                            {!! Form::text($prop, $val, ['class' => 'form-control', 'readonly']) !!}
                        @elseif($prop == 'description')
                            {!! Form::label($prop, "$prop:") !!}
                            {!! Form::textarea($prop, $val, ['class' => 'form-control', 'readonly']) !!}
                        @endif
                    </div>
                @endif
            @endforeach
        {!! Form::close() !!}
    </div>
@stop
