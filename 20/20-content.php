<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-20">
    <div class="container">
        <div class="row">
                <div class="col-md-9">
                    <div class="row_mini">
                        <span>''</span>
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                <img src="http://<?php echo $url_path ?>/images/her.png" alt="a">
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                                <div class="Text_Sometime">
                                    <p>"Sometimes in the morning, when it's a good surf,
                                        I go out there, and I don't feel like it's a bad world."</p>
                                </div>
                                <span class="actor">
                                    San Diego, California Mia S
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="eventre">
                        <h3>RELATED EVENTS</h3>
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="row row-list">
                                    <div class="col-md-6">
                                        <div class="event_image">
                                            <img src="http://<?php echo $url_path ?>/images/event-featured-img-3.jpg"
                                                alt="a1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-info">
                                        <div class="textevent">
                                            <a href="">SURFING FOR YOUNGEST</a>
                                            <p>Lorem ip sum dolor sit amet, vidit de li cata</p>
                                            <div class="local_event">
                                                <i class="fas fa-map-marker-alt"> </i> BLACK BEAACH, SAN DIEGO
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-12">
                                <div class="row row-list">
                                    <div class="col-md-6">
                                        <div class="event_image">
                                            <img src="http://<?php echo $url_path ?>/images/event-featured-img-2.jpg"
                                                alt="a1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-info">
                                        <div class="textevent">
                                            <a href="">SURFING FOR YOUNGEST</a>
                                            <p>Lorem ip sum dolor sit amet, vidit de li cata</p>
                                            <div class="local_event">
                                                <i class="fas fa-map-marker-alt"> </i> BLACK BEAACH, SAN DIEGO
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-12">
                                <div class="row row-list">
                                    <div class="col-md-6">
                                        <div class="event_image">
                                            <img src="http://<?php echo $url_path ?>/images/event-featured-img-1.jpg"
                                                alt="a1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-info">
                                        <div class="textevent">
                                            <a href="">SURFING FOR YOUNGEST</a>
                                            <p>Lorem ip sum dolor sit amet, vidit de li cata</p>
                                            <div class="local_event">
                                                <i class="fas fa-map-marker-alt"> </i> BLACK BEAACH, SAN DIEGO
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

                            <!-- <div class="col-md-6">
                                <div class="event_image">
                                    <img src="http://<?php echo $url_path ?>/images/" alt="a1">
                                </div>
                                <div class="textevent">
                                    <a href="">SURFING FOR YOUNGEST</a>
                                    <p>Lorem ip sum dolor sit amet, vidit de li cata</p>
                                    <div class="local_event">
                                        <i class="fas fa-map-marker-alt"> </i> BLACK BEAACH, SAN DIEGO
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event_image">
                                    <img src="http://<?php echo $url_path ?>/images/event-featured-img-1.jpg" alt="a1">
                                </div>
                                <div class="textevent">
                                    <a href="">SURFING FOR YOUNGEST</a>
                                    <p>Lorem ip sum dolor sit rdsadsadsa, vidit de li cata</p>
                                    <div class="local_event">
                                        <i class="fas fa-map-marker-alt"> </i> BLACK BEAACH, SAN DIEGO
                                    </div>
                                </div>
                            </div> -->