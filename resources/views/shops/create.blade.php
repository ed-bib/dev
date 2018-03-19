@extends('app')

@section('title')
    Добавить товар
@stop

@section('content')
    <h4><a href="/shops">Каталог товаров</a> &laquo; Добавить товар</h4>
    @include('errors.list')
    <hr/>
    {!! Form::open(['url' => 'shops']) !!}        
        <div class="form-group">
            {!! Form::label('programId', 'programId:') !!}
            {!! Form::text('programId', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('ean', 'ean:') !!}
            {!! Form::text('ean', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('merchantEmail', 'merchantEmail:') !!}
            {!! Form::text('merchantEmail', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('merchantCategory', 'merchantCategory:') !!}
            {!! Form::text('merchantCategory', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('manufacturer', 'manufacturer:') !!}
            {!! Form::text('manufacturer', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('programName', 'programName:') !!}
            {!! Form::text('programName', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('image', 'image:') !!}
            {!! Form::text('image', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('name', 'name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('price', 'price:') !!}
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('priceOld', 'priceOld:') !!}
            {!! Form::text('priceOld', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('shippingCosts', 'shippingCosts:') !!}
            {!! Form::text('shippingCosts', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('@id', '@id:') !!}
            {!! Form::text('@id', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('currency', 'currency:') !!}
            {!! Form::text('currency', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('description', 'description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('modified', 'Дата:') !!}
            {!! Form::date('modified', \Carbon\Carbon::now(), ['class' => 'form-control']); !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Добавить товар', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop