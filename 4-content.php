<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-4">
    <div class="container">
        <div class="welcome-out">
            <h1>OUR MAILING LIST</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>
                tempor incididunt ut labore et dolore magna.</p>
            <div class="email-subscribe">
                <form>
                    <div class="input-from">
                        <input type="text" id="fname" name="fname" placeholder="SUBSCRIBE FOR NEWSLECTTER">
                        <i class="far fa-envelope"></i> </input>
                        <button>
                            <i class="fas fa-location-arrow"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="background-shop">
            <div class="backgroud-shop1">
                <h2>20%</h2>
                <h1>SHOP PERFECT WAVE <br> SURFBOARD TODAY</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eius <br>
                    mod tempor. incididunt ut labore.</p>
                <button>
                    <i class="fas fa-caret-right"></i><span>WATCH VIDEO NOW</span>
                </button>

            </div>
        </div>

    </div>
</div>