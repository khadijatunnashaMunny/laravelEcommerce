@extends('master')
@section("content")
<div class="custom-product">
    <style>
        .productDiv {
            border: 1px solid red;
            margin: 2px;
        }
    </style>
    @foreach ($product as $item)
    <div class="productDiv">
        <div>
            <a href="/detail/{{$item->id}}">

                <h3>{{$item->productName}}</h3>
            </a>
        </div>
    </div>
    @endforeach



</div>
@endsection