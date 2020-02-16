@extends('layouts.app')

@section('content')
@include('layouts/menu')
    <div class="cont">
        @if(isset($status))
            <p style="color:red">{{$status}}</p>
        @endif
        @if($definition=='recipes')
            {{ Form::open(array('url' => 'recipe/added')) }}
            {{Form::token()}}
            {{Form::label('name', 'Название блюда')}}

            <div class="form-group">
                {{Form::text('name')}}
            </div>

            {{Form::label('description', 'Опишите приготовление блюда')}}

            <div class="form-group">
                {{Form::textarea('description')}}
            </div>

            {{Form::submit('Добавить рецепт', array('class'=>'btn btn-primary'))}}
            {{ Form::close() }}
        @endif

        @if($definition=='ingredients')
                {{ Form::open(array('url' => 'ingredient/added')) }}
                {{Form::token()}}
                {{Form::label('name', 'Название ингредиента')}}

                <div class="form-group">
                    {{Form::text('name')}}
                </div>

                {{Form::label('description', 'Измерения')}}

                <div class="form-group">
                    {{Form::text('units')}}
                </div>
                {{Form::submit('Добавить ингредиент', array('class'=>'btn btn-primary'))}}
                {{ Form::close() }}
        @endif
    </div>

@endsection
