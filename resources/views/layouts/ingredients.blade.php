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
            <td><button class="btn btn-secondary btnleft" id="{{$ingredient->id}}"> ✔ </button>
                <button class="btn btn-danger btnleft" id="{{$ingredient->id}}">X</button></td>
        </tr>

    @endforeach
    </tbody>
</table>
