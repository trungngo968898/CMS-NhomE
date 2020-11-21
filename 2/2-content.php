<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
    <div class="container">
        <div class="nav-item active-icon">
            <a class="nav-link" href="#" id="opennav">
            <i class="fa fa-bars"></i></a>
        </div>
        <div class="close-side"></div>
        <div id="mySidenav" class="sidenav">
            <div class="bg-sidenav">
                <div class="nav-heading">
                    <img src="./images/logo2.png" alt="side-nav">
                    <a href="#" class="closebtn"><i class="fa fa-times"></i></a>
                </div>
                <div class="contact-side">
                    <div class="contact-padding">
                        <h3 class="contact-title">TELL ME MORE</h3>
                        <p class="contact-color">Make a splash with WaveRide, designed for everyone passionate about all things surfing.</p>
                        <p class="contact-color"><i class="fa fa-phone"></i> 156-677-124-442-2887</p>
                        <p class="contact-color"><i class="fa fa-location-arrow"></i> wave@qodeinteractive.com</p>
                        <p class="contact-color"><i class="fa fa-map-marker"></i> 184 Main Collins Street Victoria 8007</p>            
                    </div>
                    <div class="svg-contact">
                        <svg version="1.1" x="0px" y="0px" 
                        viewBox="0 0 413.5 223"
                        xml:space="preserve">
                        <path d="M0,104v119h413.9V68.5c0,0-34.9,48-200.4-14C161.8,35.1,53.5,24.5,0,104z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>              
    </div>
</div>