@extends('layouts.app')

@section('content')
    @include('layouts/menu')
        <div class="cont">
            {{ Form::open(array('url' => 'updateRecipe')) }}
            {{Form::token()}}
            {{Form::label('name', 'Название блюда')}}

            <div class="form-group">
                {{Form::text('name',$recipe->name)}}
            </div>

            {{Form::label('description', 'Приготовление блюда')}}

            <div class="form-group">
                {{Form::textarea('description',$recipe->description)}}
            </div>
            {{Form::hidden('id',$recipe->id)}}
            {{Form::submit('Изменить рецепт', array('class'=>'btn btn-primary'))}}
            {{ Form::close() }}

            @foreach($ingredients as $ingredient)

                <div class="form-group">
                    {{Form::label('name', 'Название')}}
                    {{Form::text('name',$ingredient->name,  [ 'readonly' => true])}}
                    {{Form::label('сol', 'Колличество')}}
                    {{Form::text('col',$ingredient->col)}}
                    {{Form::label('units', 'Измерение')}}
                    {{Form::text('units',$ingredient->units,[ 'readonly' => true])}}
                    <button class="btn btn-danger deletefromrecipe" id="{{$ingredient->id_dish}}" style="display:block;width:5%;float:right;">X</button>
                </div>


            @endforeach



            <button class="btn btn-success addeding">Добавить ингридиент</button>
            <button class="btn btn-success model">Создать новый ингридиент</button>

        </div>
    <div class="modelwind">
        <p>Ведитен название ингредиента</p>
        <input type="text" id="nameingre">

        <p>Ведитен меру измерения</p>
        <input type="text" id="unitsingre">
        <button class="btn btn-primary createingr" >Создать</button>

    </div>

    <div class="ingre">
        <p>Выберите название ингредиента</p>
        <select id="ingredientselect">

        </select>

        <p>Ведите колличество</p>
        <input type="text" id="col">
        <button class="btn btn-primary addedingredient" id="{{$recipe->id}}">Добавить</button>

    </div>

@endsection
