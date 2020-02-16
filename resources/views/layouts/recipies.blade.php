{{ Form::open(array('url' => 'added/recipes')) }}
{{Form::token()}}
{{ Form::hidden('definition', 'recipe') }}
{{Form::submit('Добавить рецепт', array('class'=>'btn btn-primary'))}}
{{ Form::close() }}

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        @if( auth()->check() )
        <th scope="col">Actions</th>
            @endif
    </tr>
    </thead>
    <tbody>
    @foreach($recipies as $recipe)
        <tr id="recipies{{$recipe->id}}">
            <td>{{$recipe->name}}</td>
            <td>{{$recipe->description}}</td>
            @if( auth()->check() )
            <td><a href="/getRecipeById/{{$recipe->id}}"><button class="btn btn-secondary btnleft" id="{{$recipe->id}}"> ✔ </button></a>
                <button class="btn btn-danger btnleft recipedelete" id="{{$recipe->id}}">X</button></td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
