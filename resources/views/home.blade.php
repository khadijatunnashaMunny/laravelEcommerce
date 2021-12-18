@extends('master')
@section("content")
<div class="container-fluid">
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
    <!-- shop section end -->

    <div class="pages products-page section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="right-products">
                        <div class="row">
                            @foreach($product as $item)
                            <div class="grid-content">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <div class="pro-type">
                                                <span>new</span>
                                            </div>
                                            <img href=" /detail/{{$item->id}}" height="350px" width="270px" src="{{ asset('uploads/images/'.$item->productImage) }}" alt="">
                                            <div class="actions-btn">
                                                <a href="/detail/{{$item->id}}"><i class="mdi mdi-cart"></i></a>
                                                <a href="/detail/{{$item->id}}"><i class="mdi mdi-eye"></i></a>
                                                <a href="/detail/{{$item->id}}"><i class="mdi mdi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-dsc">
                                            <p><a href="#">{{$item->productName}}</a></p>
                                            <span>${{$item->productPrice}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection