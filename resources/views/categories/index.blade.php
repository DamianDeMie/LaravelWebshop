@extends('layouts.app')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">CATEGORIE NAAM</h1>
        <p class="lead text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, itaque voluptatibus voluptate tempora id ipsum sed recusandae deserunt repellat quasi alias ipsam, illum nesciunt vero minima fugiat earum error labore dignissimos, eligendi modi sit quas distinctio! Eveniet ut ex et voluptates consequuntur non. Id voluptates quam accusantium, similique omnis suscipit..</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-4 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group category_block">
                    @foreach ($categories as $category)
                    <li class="list-group-item"><a href="../category/{{$category->id}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                @foreach ($products as $product)
                    <div class="card mb-2">
                        <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="/product/{{$product->id}}" title="View Product">{{$product->product_name}}</a></h4>
                            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                            <div class="row">
                                <div class="col-5">
                                    <p class="">&euro; {{$product->product_price}}</p>
                                </div>
                                <div class="col-8">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>


    </div>
</div>
@endsection
