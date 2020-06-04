@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <ul class="list-group">
            @foreach ($categories as $category)
                <a href="#" class="list-group-item list-group-item-action">{{$category->name}}</a>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
