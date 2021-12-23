<?php

use App\Http\Controllers\productController;

$total = 0;
if (Session::has('user')) {
    $total = productController::cartItem();
}
?>

<!-- header section start -->
<header class="header-one header-two header-page">
    <div class="header-top-two">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="middel-top">
                        <div class="left floatleft">
                            <p><i class="mdi mdi-clock"></i> Mon-Fri : 09:00-19:00</p>
                        </div>
                    </div>
                    <div class="middel-top clearfix">
                        <ul class="clearfix right floatright">
                            <li>
                                <a href="#"><i class="mdi mdi-account"></i></a>
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="login.html">Registar</a></li>
                                    <li><a href="my-account.html">My account</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="mdi mdi-settings"></i></a>
                                <ul>
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="cart.html">My cart</a></li>
                                    <li><a href="wishlist.html">My wishlist</a></li>
                                    <li><a href="checkout.html">Check out</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="right floatright">
                            <form action="#" method="get">
                                <button type="submit"><i class="mdi mdi-magnify"></i></button>
                                <input type="text" placeholder="Search within these results..." />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <a href="index.html"><img src="img/logo2.png" alt="Sellshop" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="header-middel">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="index.html">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home version one</a></li>
                                        <li><a href="index-2.html">Home version two</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Shop</a>
                                    <ul class="magamenu">
                                        <li class="banner"><a href="shop.html"><img src="img/maga1.png" alt="" /></a></li>
                                        <li>
                                            <h5>men’s wear</h5>
                                            <ul>
                                                <li><a href="#">Shirts & Top</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Shemwear</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Sweaters</a></li>
                                                <li><a href="#">Jacket</a></li>
                                                <li><a href="#">Men Watch</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h5>women’s wear</h5>
                                            <ul>
                                                <li><a href="#">Shirts & Tops</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Shemwear</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Sweaters</a></li>
                                                <li><a href="#">Jacket</a></li>
                                                <li><a href="#">Women Watch</a></li>
                                            </ul>
                                        </li>
                                        <li class="banner"><a href="shop.html"><img src="img/maga2.png" alt="" /></a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="product-grid.html">Product Grid View</a></li>
                                        <li><a href="product-list.html">Product List View</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="error-404.html">404 page</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog-style-1.html">Blog Style One</a></li>
                                        <li><a href="blog-style-2.html">Blog Style Two</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home version one</a></li>
                                            <li><a href="index-2.html">Home version two</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul>
                                            <li>
                                                <h5>men’s wear</h5>
                                                <ul>
                                                    <li><a href="#">Shirts & Top</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shemwear</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Sweaters</a></li>
                                                    <li><a href="#">Jacket</a></li>
                                                    <li><a href="#">Men Watch</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h5>women’s wear</h5>
                                                <ul>
                                                    <li><a href="#">Shirts & Tops</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shemwear</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Sweaters</a></li>
                                                    <li><a href="#">Jacket</a></li>
                                                    <li><a href="#">Women Watch</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="product-grid.html">Product Grid View</a></li>
                                            <li><a href="product-list.html">Product List View</a></li>
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="error-404.html">404 page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog-style-1.html">Blog Style One</a></li>
                                            <li><a href="blog-style-2.html">Blog Style Two</a></li>
                                            <li><a href="single-blog.html">Single Blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="cart-itmes">
                    <a class="cart-itme-a" href="cart.html">
                        <i class="mdi mdi-cart"></i>
                        02 items : <strong>$86.00</strong>
                    </a>
                    <div class="cartdrop">
                        <div class="sin-itme clearfix">
                            <i class="mdi mdi-close"></i>
                            <a class="cart-img" href="cart.html"><img src="img/cart/1.png" alt="" /></a>
                            <div class="menu-cart-text">
                                <a href="#">
                                    <h5>men’s black t-shirt</h5>
                                </a>
                                <span>Color : Black</span>
                                <span>Size : SL</span>
                                <strong>$122.00</strong>
                            </div>
                        </div>
                        <div class="sin-itme clearfix">
                            <i class="mdi mdi-close"></i>
                            <a class="cart-img" href="cart.html"><img src="img/cart/2.png" alt="" /></a>
                            <div class="menu-cart-text">
                                <a href="#">
                                    <h5>men’s black t-shirt</h5>
                                </a>
                                <span>Color : Black</span>
                                <span>Size : SL</span>
                                <strong>$132.00</strong>
                            </div>
                        </div>
                        <div class="total">
                            <span>total <strong>= $306.00</strong></span>
                        </div>
                        <a class="goto" href="cart.html">go to cart</a>
                        <a class="out-menu" href="checkout.html">Check out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">E-Comm</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="orders">Orders</a></li>
            </ul>
            <form action="/search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" name="query" class="form-control search-box" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cartlist">cart({{$total}})</a></li>
                @if(Session::has('user'))
                <li><a href="/logout">Logout({{Session::get('user')['name']}})</a></li>

                @else
                <li><a href="/sign_in">Login</a></li>
                <li><a href="/sign_up">Registration</a></li>
                @endif

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>