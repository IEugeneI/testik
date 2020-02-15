@extends('layouts.app')

@section('content')
    <ul class="nav flex-column block">
        <li class="nav-item">
            <a class="nav-link active" href="#">Мои рецепты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Ингредиенты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>

    <div class="cont">
        @if(isset($recipies))
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($recipies as $recipe)
                    <tr>
                        <td>{{$recipe->name}}</td>
                        <td>{{$recipe->description}}</td>
                        <td>@</td>
                    </tr>
                 @endforeach
                </tbody>
            </table>
            @endif


            @if(isset($ingredients))
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ingredients as $ingredient)
                        <tr>
                            <td>{{$ingredient->name}}</td>
                            <td>{{$ingredient->units}}</td>
                            <td>@</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            @endif

    </div>

@endsection
