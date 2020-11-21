<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    <div class="type-1">
            <header class="header-wave">
                <div class="navbar-custom d-flex align-items-center">
                    <h1 class="logo mr-auto"><img src="./images/logo.png" alt="Logo"></h1>
                    <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li class="drop-down">
                        <a href="">Drop Down</a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="drop-down">
                            <a href="#">Deep Drop Down</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    </nav>
                    <!-- .nav-menu -->
                    <a href="#about" class="get-started-btn scrollto">Get Started</a>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8 section-slider">
                            <div class="hero-items owl-carousel">
                                <div class="single-hero-items">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="img-wave">
                                                <img src="./images/wave2.png" alt="Wave1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h1>Short Board</h1>
                                            <p>Hybird Build</p>
                                            <a href="#" class="primary-btn">$150</a>
                                            <h5 class="surf">Surf conditions</h5>
                                            <div class="descrition-slider surf1">Knee height</div>
                                            <div class="descrition-slider surf1">Stomach height</div>
                                            <h5 class="surr">Experience</h5>
                                            <div class="descrition-slider surr1">Beginner</div>
                                            <div class="descrition-slider surr1">Expert Level</div>
                                            <div class="descrition-slider surr1">Standart</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-hero-items">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="img-wave">
                                                <img src="./images/wave1.png" alt="Wave1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h1>Dawex Board</h1>
                                            <p>Hybird2 Build</p>
                                            <a href="#" class="primary-btn">$170</a>
                                            <h5 class="surf">Surf conditions</h5>
                                            <div class="descrition-slider surf1">Knee height</div>
                                            <div class="descrition-slider surf1">Stomach height</div>
                                            <h5 class="surr">Experience</h5>
                                            <div class="descrition-slider surr1">Beginner</div>
                                            <div class="descrition-slider surr1">Expert Level</div>
                                            <div class="descrition-slider surr1">Standart</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-hero-items">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="img-wave">
                                                <img src="./images/wave3.png" alt="Wave1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h1>Wavy Board</h1>
                                            <p>Hybird3 Build</p>
                                            <a href="#" class="primary-btn">$270</a>
                                            <h5 class="surf">Surf conditions</h5>
                                            <div class="descrition-slider surf1">Knee height</div>
                                            <div class="descrition-slider surf1">Stomach height</div>
                                            <h5 class="surr">Experience</h5>
                                            <div class="descrition-slider surr1">Beginner</div>
                                            <div class="descrition-slider surr1">Expert Level</div>
                                            <div class="descrition-slider surr1">Standart</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-banner1">
                    <img src="./images/banner.png" alt="banner1">
                </div>
                <div class="img-banner2">
                    <img src="./images/mod.png" alt="mod">
                </div>
                <div class="btn-header">
                    <div><button class="button-header1"><span><i class="fa fa-circle-o"></i></span>RELATED</button></div>
                    <div><button class="button-header2"><span><i class="fa fa-shopping-cart"></i></span>BUY NOW</button></div>
                </div>
            <header>
    </div>