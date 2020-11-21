<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-7">
    <div class="bg-footer1">
        <div class="container">
            <div class="row row-top-footer">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h3>ABOUT</h3>
                    <p class="about-description">Catch the perfect wave with WaveRide, a true haven for everything surf 
                        related that’s guaranteed to provide you with a genuinely smooth ride.</p>
                    <div class="icons-about">
                        <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-instagram"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rows1">
                    <h3>CONTACT</h3>
                    <p class="form-iconsm">
                        <i class="fa fa-mobile"></i><span class="des-icons">156-677-124-442-2887</span>
                    </p>
                    <p class="form-iconsm">
                        <i class="fa fa-location-arrow"></i><span class="des-icons">wave@qodeinteractive.com</span>
                    </p>
                    <p class="form-iconsm">
                        <i class="fa fa-map-marker"></i><span class="des-icons">Collins Street Victoria 8007</span>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rows2">
                    <h3>USEFULL LINKS</h3>
                    <p class="form-iconsm font-icon2">
                        <i class="fa fa-times-circle"></i><span class="des-icons">About Us</span>
                    </p>
                    <p class="form-iconsm font-icon2">
                        <i class="fa fa-hourglass"></i><span class="des-icons">History</span>
                    </p>
                    <p class="form-iconsm font-icon2">
                        <i class="fa fa-anchor"></i><span class="des-icons">Cotact Us</span>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 rows3">
                    <h3>INSTAGRAM</h3>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                            <div class="item-img">
                                <img src="./images/9.jpg" alt="Logo1">
                                <span class="undo"> <i class="fa fa-camera"></i> </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="item-img">
                                <img src="./images/8.jpg" alt="Logo2">
                                <span class="undo"> <i class="fa fa-camera"></i> </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 colsd1">
                        <div class="item-img">
                                <img src="./images/7.jpg" alt="Logo3">
                                <span class="undo"> <i class="fa fa-camera"></i> </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 colsd2">
                        <div class="item-img">
                                <img src="./images/6.jpg" alt="Logo4">
                                <span class="undo"> <i class="fa fa-camera"></i> </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 colsd3">
                        <div class="item-img">
                                <img src="./images/5.jpg" alt="Logo5">
                                <span class="undo"> <i class="fa fa-camera"></i> </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 colsd4">
                        <div class="item-img">
                                <img src="./images/10.jpg" alt="Logo6">
                                <span class="undo"> <i class="fa fa-camera"></i> </span>
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <div class="form-filed">
                            <p class="input-icon">
                                <i class="fa fa-location-arrow icon"></i>
                                <input type="email" name="EMAIL" placeholder="Get newletter..." required=""
                                    class="input-field">
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-footer2">
        <div class="container">
            <div class="row cs-row">
                <div class="col-lg-4 col-md-12">
                    <div class="img-logo-ft">
                        <img src="./images/logo.png" alt="Logo-footer">
                    </div>
                    <h6 class="madeby">Made by Qode Interactive, all rights reserved</h6>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row line-info">
                        <div class="col-lg-4">
                            <div class="form-iconsm">
                                <i class="fa fa-map-marker"></i><span class="des-icons">Collins Street Victoria 8007</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-iconsm">
                                <i class="fa fa-mobile"></i><span class="des-icons">156-677-124-442-2887</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-iconsm">
                                <i class="fa fa-location-arrow"></i><span class="des-icons">wave@qodeinteractive.com</span>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>