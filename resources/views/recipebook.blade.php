@extends('layouts.app')

@section('content')
    <ul class="nav flex-column block">
        <li class="nav-item">
            <a class="nav-link active" href="/recipies">Мои рецепты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/ingredients">Ингредиенты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>

    <div class="cont">
        @if(isset($recipies))
            @include('layouts/recipies')
        @endif


        @if(isset($ingredients))
                @include('layouts/ingredients')
            @endif

    </div>

@endsection
