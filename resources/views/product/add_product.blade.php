@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="admin/product" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">product Id</label>
                    <input type="text" name="productId" class="form-control" id="exampleInputEmail1" placeholder="productId">
                    <label for="exampleInputEmail1">product Name </label>
                    <input type="text" name="productName" class="form-control" id="exampleInputEmail1" placeholder="productName">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">product Price</label>
                    <input type="text" name="productPrice" class="form-control" id="exampleInputPassword1" placeholder="productPrice">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">product Image</label>
                    <input type="file" name="productImage" class="form-control">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection