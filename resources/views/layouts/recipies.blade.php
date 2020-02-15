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
            <td><button class="btn btn-secondary btnleft" id="{{$recipe->id}}"> ✔ </button>
                <button class="btn btn-danger btnleft" id="{{$recipe->id}}">X</button></td>
        </tr>
    @endforeach
    </tbody>
</table>
