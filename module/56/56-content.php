<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-56">
   <div class="header-content">
      <img src="./images/logo.png" alt="logo">
      <h4>Wave championship has a 5 star Tripadvisor traveller rating and is also <br /> rated #1 
      for Speciality lodging in Baleal Beach, Peniche Portugal.</h4>
   </div>
   <div class="swiper-container swiper-2">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide2">
           <img src="./images/1.jpg" alt="relax1" class="img-responsive">
           <span class="undo"> <i class="fa fa-camera"></i> </span>
        </div>
        <div class="swiper-slide swiper-slide2">
           <img src="./images/2.jpg" alt="relax2" class="img-responsive">
           <span class="undo"> <i class="fa fa-camera"></i> </span>
        </div>
        <div class="swiper-slide swiper-slide2">
           <img src="./images/3.jpg" alt="relax3" class="img-responsive">
           <span class="undo"> <i class="fa fa-camera"></i> </span>
        </div>
        <div class="swiper-slide swiper-slide2">
           <img src="./images/4.jpg" alt="relax4" class="img-responsive">
           <span class="undo"> <i class="fa fa-camera"></i> </span>
        </div>
        <div class="swiper-slide swiper-slide2">
           <img src="./images/5.jpg" alt="relax5" class="img-responsive">
           <span class="undo"> <i class="fa fa-camera"></i> </span>
        </div>
        <div class="swiper-slide swiper-slide2">
           <img src="./images/6.jpg" alt="relax6" class="img-responsive">
           <span class="undo"> <i class="fa fa-camera"></i> </span>
        </div>
      </div>
    </div>
</div>