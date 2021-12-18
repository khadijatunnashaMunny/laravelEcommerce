@extends('master')
@section("content")
<div class="container">
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2>Shop</h2>
                        <ul class="text-left">
                            <li><a href="/">Home </a></li>
                            <li><span> // </span>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h2>Product detail</h2>
            <img src="{{ asset('uploads/images/'.$product['productImage']) }}" width="250px" height="250px" alt="Image">
            <h2>{{$product['productId']}}</h2>
            <h2>{{$product['productName']}}</h2>
            <h2>{{$product['productPrice']}}</h2>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
            <button><a href="/get_product">Go Back</a></button>

        </div>

    </div>
</div>
@endsection