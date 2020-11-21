<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-39">
   <div id="preloader">
      <div class="loaderField">
         <img src="./images/preloader.png" alt="Preloader">
         <h5><span class="counter">100</span><span>%<span></h5>
      </div>
      <div class="waves">
      <svg fill="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <linearGradient id="grad1">
          <stop stop-color="#aaabaa" />
          <stop stop-color="#aaabaa" />
          <stop stop-color="#aaabaa" />
        </linearGradient>
        <path fill="url(#grad1)">
          <animate
            repeatCount="indefinite"
            fill="url(#grad1)"
            attributeName="d"
            dur="5s"
            attributeType="XML"
            values="
            M0 77 
            C 473,283
              822,-40
              1920,116 
            
            V 359 
            H 0 
            V 67 
            Z; 

            M0 77 
            C 473,-40
              1222,283
              1920,136 
            
            V 359 
            H 0 
            V 67 
            Z; 

            M0 77 
            C 973,260
              1722,-53
              1920,120 
            
            V 359 
            H 0 
            V 67 
            Z; 

            M0 77 
            C 473,283
              822,-40
              1920,116 
            
            V 359 
            H 0 
            V 67 
            Z
            "
          ></animate>
        </path>
      </svg>
    </div>
    <div class="fake-color"></div>
  </div>
   <div class="content">
   </div>
</div>
