<?php

use App\Http\Controllers\productController;

$total = 0;
if (Session::has('user')) {
    $total = productController::cartItem();
}
?>

<!-- header section start -->
<header class="header-one header-two header-page">

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <a href="index.html"><img src="img/logo2.png" alt="Sellshop" /></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="header-middel">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="/">Home</a>
                                    <ul class="magamenu">
                                        <li class="banner"><a href="/"><img src="img/logo2.png" alt="" /></a></li>
                                        <li>
                                            <h5>Drone</h5>
                                            <ul>
                                                <li><a href="/">Drone</a></li>
                                                <li><a href="/">Drone</a></li>
                                                <li><a href="/">Drone</a></li>
                                                <li><a href="/">Drone</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <h5>camera</h5>
                                            <ul>
                                                <li><a href="/">camera</a></li>
                                                <li><a href="/">camera</a></li>
                                                <li><a href="/">camera</a></li>
                                                <li><a href="/">camera</a></li>
                                                <li><a href="/">camera</a></li>
                                                <li><a href="/">camera</a></li>

                                            </ul>
                                        </li>
                                        <li class="banner"><a href="shop.html"><img src="img/logo2.png" alt="" /></a></li>
                                    </ul>
                                </li>
                                <li><a href="/orders">Orders</a>
                                <li><a href="/about">About</a>
                                <li><a href="/help">Help</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- mobile menu start -->
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="/">Home</a>
                                    <li><a href="/orders">Orders</a>
                                    <li><a href="/about">About</a>
                                    <li><a href="/help">Help</a>
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
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-sm-3">
                    <div class="cart-itmes">
                        <form action="/search" class="navbar-form navbar-left">
                            <div class="form-group">
                                <input type="text" name="query" class="form-control search-box" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </form>

                    </div>
                </div>
            </div>

            <div>
                <div class="col-sm-3">
                    <div class="cart-itmes">
                        <a class="cart-itme-a" href="/cartlist">
                            <i class="mdi mdi-cart"></i>
                            <strong>${{$total}}</strong>
                        </a>
                    </div>
                    <div class="cart-itmes">
                        <ul class="nav navbar-nav navbar-right">
                            @if(Session::has('user'))
                            <li><a href="/logout">Logout({{Session::get('user')['name']}})</a></li>
                            @else
                            <li><a href="/sign_in">Login</a></li>
                            <li><a href="/sign_up">Registration</a></li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>