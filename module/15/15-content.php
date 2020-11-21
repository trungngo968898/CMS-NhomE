<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">
    <div class="container">
        <div class="backgroud-modal-video">
            <div class="modal-theme">
                <div class="play-circle-modal">
                    <i class="fa fa-play play-icon-video"></i>
                </div>
            </div>
        </div>
        <div class="modals">
            <div class="modal__inner">
                <div class="modal__header">
                <video width="100%" controls autoplay id="videoBlogger">
                    <source src="./video/video.mp4" type="video/mp4">
                </video>
                <button class="modal__close">
                    X
                </button>
                </div>
            </div>
        </div>
        <div class="row row-information">
            <div class="col-lg-6 col-md-12">
                <div class="img-waves">
                    <img src="./images/1.jpg" alt="images">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <h1 class="title-waves title1">MYKONOS BEACH</h1>
                <h3 class="color-h3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eius mod tempor incididunt.</h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Utem duo us enim ad minim veniam.</p>
                <div class="qodef-contact-form-submit">
                    <button
                    type="submit"
                    class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover"
                    >
                    <span class="qodef-btn-text">Find out more</span
                    ><span class="qodef-btn-wave-holder"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row row-information">
            <div class="col-lg-6 col-md-12">
                <h1 class="title-waves title2">PAROS & IOS SUN</h1>
                <h3 class="color-h3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eius mod tempor incididunt.</h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Utem duo us enim ad minim veniam.</p>
                <div class="qodef-contact-form-submit">
                    <button
                    type="submit"
                    class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover"
                    >
                    <span class="qodef-btn-text">Find out more</span
                    ><span class="qodef-btn-wave-holder"></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="img-waves img-screenmd">
                    <img src="./images/2.jpg" alt="images">
                </div>
            </div>
        </div>
        <div class="row row-information">
            <div class="col-lg-6 col-md-12">
                <div class="img-waves">
                    <img src="./images/3.jpg" alt="images">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <h1 class="title-waves title3">SANTORINI SAND</h1>
                <h3 class="color-h3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eius mod tempor incididunt.</h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Utem duo us enim ad minim veniam.</p>
                <div class="qodef-contact-form-submit">
                    <button
                    type="submit"
                    class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover"
                    >
                    <span class="qodef-btn-text">Find out more</span
                    ><span class="qodef-btn-wave-holder"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="imgtop-waves">
            <img src="./images/4.png" alt="images">
        </div>
        <div class="imgbottom-waves">
            <img src="./images/4.png" alt="images">
        </div>
    </div>
</div>