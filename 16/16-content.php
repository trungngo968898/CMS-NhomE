<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-16">
    <div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="img-leftWaveSize">
					<img src="./images/1.jpg" alt="images">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="img-rightWaveContact">
					<h1 class="superior">SUPERIOR SERVICE</h1>
					<p class="description">We aim to provide a superior quality of service to our customers, retailers, 
					surfers and the media</p>
					<div class="form-filed2 form1">
						<input type="email" name="EMAIL" placeholder="Email*" required=""
							class="input-field">
					</div>
					<div class="form-filed2 form2">
						<input type="text" name="Phone" placeholder="Phone*" required=""
							class="input-field">
					</div>
					<div class="form-filed2 form3">
						<input type="text-area" name="Message" placeholder="Your Message" required=""
							class="input-field">
					</div>
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
		</div>
		<div class="row rowContact">
			<div class="col-md-8 col-sm-12">
				<form action="">
					<div class="form-filed">
						<p class="input-icon">
							<i class="fa fa-envelope icon"></i>
							<input type="email" name="EMAIL" placeholder="SUBSCRIBE FOR NEWLETTER" required=""
								class="input-field">
						</p>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="qodef-contact-form-submit button-qodef2">
					<button
					type="submit"
					class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover"
					>
					<span class="qodef-btn-text">SUBSCRIBE</span
					><span class="qodef-btn-wave-holder"></span>
					</button>
				</div>
			</div>  
        </div>
		<div class="imgtop-waves">
            <img src="./images/4.png" alt="images">
        </div>
	</div>
</div>