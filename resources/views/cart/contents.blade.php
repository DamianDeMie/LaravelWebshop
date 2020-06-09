@extends('layouts.app')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Winkelwagen</h1>
     </div>
</section>

<div class="container mb-4">
    @if(Session::has('cart'))
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col"></th>
                            <th scope="col" class="text-center">Aantal</th>
                            <th scope="col" class="text-right">Prijs</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td></td>
                            <td>{{ $product['item']['product_name']}}</td>
                            <td></td>
                            <td>
                            <form action="/changeItemAmount/{{$product['item']['id']}}" method="POST">
                    @csrf
                    <input id="quantityInput" class="quantityInput" name="quantityInput" type="number" min="0" value="{{ $product['quantity'] }}">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-plus"></i>
                    </button>
                </form>
                            </td>
                            <td class="text-right">€{{ $product['price']}}</td>
                            <td class="text-right"><a href='/deleteItem/{{$product['item']['id']}}' class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                    @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>€{{Session::get('cart')->getTotalPrice()}}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                {{-- <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div> --}}
                <form method="POST" action="/processOrder">
                @csrf
                <input type="hidden" name='user_id' value='{{Auth::user()->id}}'>
                <input type="hidden" name='user_email' value='{{Auth::user()->email}}'>
                <input type="hidden" name='order_total' value='{{ $totalPrice }}'>
                <div class="col-sm-12 col-md-6 text-right">
                    <button type='submit' class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@else
    <div class="row">
        <div class="col-12">
            <h2>No item in cart!</h2>
        </div>
    </div>
@endif

@endsection