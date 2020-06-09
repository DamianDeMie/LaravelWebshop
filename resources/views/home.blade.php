@extends('layouts.app')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Bestellingoverzicht</h1>
     </div>
</section>

<div class="container mb-4">
    @if(empty($userOrders))
        <div class="row">
            <div class="col-12">
                <h2>Uw heeft nog geen bestellingen geplaatst.</h2>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Bestellingnummer</th>
                                <th scope="col">Prijs</th>
                                <th scope="col">Besteldatum</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($userOrders as $order)
                            <tr>
                                <td>78{{$order->id}}</td>
                                <td>&euro;{{$order->order_total}}.-</td>
                                <td>{{$order->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</div>



@endsection