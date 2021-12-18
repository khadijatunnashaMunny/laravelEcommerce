@extends('master')
@section("content")


<!-- pages-title-start -->
<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Sign In</h2>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="main-input padding60">
                    <div class="log-title">
                        <h3><strong>registered customers</strong></h3>

                        <p>If you have an account with us, Please log in!</p>
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
                                <label for="exampleInputPassword1">product Description</label>
                                <textarea name="productDes" placeholder="enter product Description" class="form-control" required></textarea>
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

        </div>
    </div>
</section>
<!-- login content section end -->


@endsection