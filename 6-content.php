<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-6">
    <div class="container">
        <div class="visitour-content">
            <h1>VISIT OUR STORES</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At placeat cumque dolor ipsum quaerat quis illum
                <br>
                nam ipsam, alias qui fugiat voluptatum? Mollitia error quibusdam ratione consectetur, sequi deleniti
                eos!
            </p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="add-to-cart">
                    <h4>FREE SHIPPING</h4>
                    <p>On all orders over $50.00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="add-to-cart">
                    <h4>FREE RETURNS</h4>
                    <p>30 days money back guarantee</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="add-to-cart">
                    <h4>FREE RETURNS</h4>
                    <p>30 days money back guarantee</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="add-to-cart">
                    <h4>FREE RETURNS</h4>
                        <img src="http://<?php echo $url_path ?>/images/6.1.png" alt="hinh1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="getready">
                    <h2>get raedy</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="for-ware">
                    <h2>FOR WARE THRILLS</h2>
                </div>
            </div>
        </div>
    </div>
</div>
</div>