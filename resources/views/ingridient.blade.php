@extends('layouts.app')

@section('content')
    @include('layouts/menu')
    <div class="cont">
        {{ Form::open(array('url' => 'updateIngridient')) }}
        {{Form::token()}}
        {{Form::label('name', 'Название ингредиента')}}

        <div class="form-group">
            {{Form::text('name',$ingridient->name)}}
        </div>

        {{Form::label('description', 'Измерения')}}

        <div class="form-group">
            {{Form::text('units',$ingridient->units)}}
        </div>
        {{Form::hidden('id',$ingridient->id)}}
        {{Form::submit('Изменить', array('class'=>'btn btn-primary'))}}
        {{ Form::close() }}
    </div>

@endsection
