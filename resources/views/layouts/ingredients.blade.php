{{ Form::open(array('url' => 'added/ingredients')) }}
{{Form::token()}}
{{Form::submit('Добавить ингридиент', array('class'=>'btn btn-primary'))}}
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
    @foreach($ingredients as $ingredient)
        <tr id="ingredients{{$ingredient->id}}">
            <td>{{$ingredient->name}}</td>
            <td>{{$ingredient->units}}</td>
            @if( auth()->check() )
            <td><a href="getIngridientById/{{$ingredient->id}}"><button class="btn btn-secondary btnleft ingredientupdate" > ✔ </button></a>
                <button class="btn btn-danger btnleft ingredientsdelete" id="{{$ingredient->id}}">X</button></td>
            @endif
        </tr>

    @endforeach
    </tbody>
</table>
