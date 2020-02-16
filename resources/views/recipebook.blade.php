@extends('layouts.app')

@section('content')
   @include('layouts/menu')
    <div class="cont">
        @if(isset($recipies))
            @include('layouts/recipies')
        @endif


        @if(isset($ingredients))
                @include('layouts/ingredients')
            @endif

    </div>

@endsection
