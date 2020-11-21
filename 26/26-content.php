<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-26">
<div class="related_product">
    <div class="container">
    <h2>RELATED PRODUCTS</h2>
        <div class="row">
            
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/shop-list-img-6-300x468.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/shop-list-img-14-300x468.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/shop-list-img-15-300x468.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/shop-list-img-16-300x468.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>
            
           
           
        </div>
    </div>
</div>








</div>