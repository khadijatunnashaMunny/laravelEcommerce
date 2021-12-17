@extends('master')
@section("content")


<div class="container">

    <h2 class="heading">
        Ecommerce
    </h2>
    <h5 class="heading">
        Create an online store with the leading eCommerce platform Sell online
        with a professional online store. Launch, run and scale your online
        store with our industry-leading eCommerce website builder and advanced
        business features.
    </h5>
    <div class="p-4">
        <h3>The simple way to tackle the complexity of selling online</h3>
        <div class="row p-4">
            <div class="col-md-4 p-4">
                <p>Start a trial</p>
                <p>Build a store that caters to your unique business needs—with the design tools, features, and support to get you up and running.</p>
            </div>
            <div class="col-md-4">
                <p>Launch your store</p>
                <p>Design and customize a beautiful storefront with powerful features and expert ecommerce support along the way.</p>
            </div>
            <div class="col-md-4">
                <p>Grow your business</p>
                <p>Build your brand with a storefront designed to jumpstart growth, from your very first sale onward.</p>
            </div>
        </div>
    </div>

    <div class="trending-wrapper">
        <h3>Tredning Products</h3>
        @foreach($product as $item)
        <div class="trening-item">
            <a href="/detail/{{$item->id}}">
                <div class="">
                    <img src="{{ asset('uploads/images/'.$item->productImage) }}" width="150px" height="150px" alt="Image">
                    <h3>{{$item->productName}}</h3>
                </div>
            </a>
        </div>
        @endforeach
    </div>


</div>
<style>
    .heading {
        text-align: center;
    }
</style>

@endsection