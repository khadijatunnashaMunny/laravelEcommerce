@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach ($product as $item)
            <div class="productDiv">
                <div>
                    <h3>{{$item->productName}}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection