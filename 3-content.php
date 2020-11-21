<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
    <div class="container">

        <div class="welcome-content">
            <span>'03</span>
            <h1>WELCOME TO NORTH SHORE</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore
                et
                dolore magna aliqua ut enim ad minim quis nostrud exercitation.
            </p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="img-banner">
                    <div class="product-item">
                        <img src="./images/shop-list.png" alt="">
                        <div class="add-to-card">
                            <a href="">SELECT OPTIONS</a>
                        </div>
                    </div>
                </div>
                <div class="title-product">
                    <a href="#" class="shop-list">TUNDER BOARD</a>
                </div>
                <div class="text-product">
                    <a href="#" class="">Boards</a>
                </div>
                <span class="Boards">$130.000</span>
            </div>

            <div class="col-md-4">
                <div class="img-banner">
                    <div class="product-item">
                        <img src="./images/shop-list2.png" alt="">
                        <div class="add-to-card">
                            <a href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="title-product">
                    <a href="#" class="shop-list">SHORT SURFBOARD FOAM</a>
                </div>
                <div class="text-product">
                    <a href="#" class="">Boards</a>
                </div>
                <span class="Boards">$130.000</span>
            </div>
            <div class="col-md-4">
                <div class="img-banner">
                    <div class="product-item">
                        <img src="./images/shop-list3.png" alt="">
                        <div class="add-to-card">
                            <a href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="title-product">
                    <a href="#" class="shop-list">MADMAX BOARD</a>
                </div>
                <div class="text-product">
                    <a href="#" class="">Boards</a>
                </div>
                <span class="Boards">$130.000</span>
            </div>
        </div>
    </div>