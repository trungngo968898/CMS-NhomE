<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-34">

    <div class="forecast">
        <div class="container">
            <div class="imgforecast_pod">
                <img src="http://<?php echo $url_path ?>/images/forcast.jpg" alt="c">
            </div>
            <div class="dayofbirthfore">
                <a href="">Feb,2020/Surfing</a>
            </div>
            <div class="podcast">
                <h2>
                    <a href="">FORECAST PODCAST EXCLUSIVE</a>
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum. Sed ut perspiciatis
                    unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae
                    ab illo inventore veritatis et quasi architecto...
                </p>
            </div>
            <div class="iconShare">
                <div class="lisxetom">
                    <div class="btnreadmore">
                        <div class="iconfonttawesome">
                            <i class="fab fa-pinterest-p"></i>
                        </div>
                        <div class="readmorepod">
                            <a href="">READ MORE</a>
                        </div>
                    </div>
                    <div class="listItem">
                        <div class="shareIconFace">
                            SHARE : <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-invision"></i>
                            <i class="fab fa-pinterest-p"></i>
                        </div>

                    </div>
                </div>
            </div>
            <div class="learnHouse">
                <div class="boldLearnhouse">
                    <div class="textLearnHouse">
                        <h2>
                            <a href="">LEARN HOW TO CLEAN YOUR FIRST SURFBOARD</a>
                        </h2>
                    </div>
                    <div class="imageLearn">
                        <i class="fas fa-link"></i>
                    </div>
                </div>
             </div>
             <div class="videoViewLean">
                <iframe title="Video_Playa_Punta_de_Lobos _Pichilemu_#01"
                src="https://player.vimeo.com/video/254558067?dnt=1&amp;app_id=122963" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="" 
                class="fluidvids-item" data-fluidvids="loaded"></iframe>
             </div>
             <div class="dayofbirthfore">
                <a href="">Feb,2020/Surfing</a>
            </div>
            <div class="podcast">
                <h2>
                    <a href="">FORECAST PODCAST EXCLUSIVE</a>
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum. Sed ut perspiciatis
                    unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae
                    ab illo inventore veritatis et quasi architecto...
                </p>
            </div>
            <div class="iconShare">
                <div class="lisxetom">
                    <div class="btnreadmore">
                        <div class="iconfonttawesome">
                            <i class="fab fa-pinterest-p"></i>
                        </div>
                        <div class="readmorepod">
                            <a href="">READ MORE</a>
                        </div>
                    </div>
                    <div class="listItem">
                        <div class="shareIconFace">
                            SHARE : <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-invision"></i>
                            <i class="fab fa-pinterest-p"></i>
                        </div>

                    </div>
                </div>
            </div>
            

    </div>
</div>