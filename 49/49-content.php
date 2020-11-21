<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-49">
   <div class="container">
      <div class="content">
         <h1>SURFING FOR ALL ABILITIES</h1>
         <p>Ex gubergren consequat forensibus mea, primis tritani dissentiunt ad mea, per id habeo utamur erroribus.</p>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="sea-travel">
               <img src="./images/icon4.png" alt="Icon1">
               <h5>NEW TO THE WATER?</h5>
               <p>Lorem ipsum dolor sit amet, con ctetur ad ip isicing elit, sed do eiusmod tem por incidi sit.</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="sea-travel">
               <img src="./images/icon3.png" alt="Icon1">
               <h5>INTERMEDIATE SURFER</h5>
               <p>Lorem ipsum dolor sit amet, con ctetur ad ip isicing elit, sed do eiusmod tem por incidi sit.</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="sea-travel">
               <img src="./images/icon2.png" alt="Icon1">
               <h5>ADVANCED SKILLS</h5>
               <p>Lorem ipsum dolor sit amet, con ctetur ad ip isicing elit, sed do eiusmod tem por incidi sit.</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="sea-travel">
               <img src="./images/icon1.png" alt="Icon1">
               <h5>PRO LEVEL SURFING</h5>
               <p>Lorem ipsum dolor sit amet, con ctetur ad ip isicing elit, sed do eiusmod tem por incidi sit.</p>
            </div>
         </div>
      </div>
      <div class="row over-ten">
         <div class="col-lg-4 col-md-12">
            <div class="banner">
               <img src="./images/10.png" alt="Number">
               <h2>OVER TEN YEARS IN THE GAME</h2>
               <p class="title-p">Voluptatem accusantium doloremque laudant sinium, totam rem aperia.</p>
               <p class="description-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sed do eiusmod te.</p>
                <div class="qodef-contact-form-submit button-qodef1">
						<button
						type="submit"
						class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover"
						>
						<span class="qodef-btn-text">SEND US A MESSAGE</span
						><span class="qodef-btn-wave-holder"></span>
						</button>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="img-over">
               <img src="./images/1.jpg" alt="">
            </div>
         </div>
         <div class="col-lg-4 col-md-6 margin-img-over2">
            <div class="img-over">
               <img src="./images/2.jpg" alt="">
            </div>
         </div>
      </div>
   </div>
   <div class="svg-banner">
      <img src="./images/3.jpg" alt="Svg-Banner">
   </div>
</div>