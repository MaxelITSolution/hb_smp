<header class="col-md-12">
    <div class="container">
        <div class="col-md-4">
            <div class="col-md-12 no-padding">
                <img class="logo" src="<?php echo site_url('assets/front/images/logo.png'); ?>">
            </div>
            <div class="col-md-12 no-padding social-media-wrapper">
                <a target="blank" href="<?php echo $static_content[60]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/facebook.png'); ?>"></a>
                <a target="blank" href="<?php echo $static_content[61]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/twitter.png'); ?>"></a>
                <a target="blank" href="<?php echo $static_content[62]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/linkedin.png'); ?>"></a>
                <ul class="language">
                    <li>
                        <?php echo strtoupper($language); ?> <i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a data-value="eng" href="javascript:;">ENG</a></li>
                            <li><a data-value="ina" href="javascript:;">INA</a></li>
                            <li><a data-value="chn" href="javascript:;">CHN</a></li>
                            <li><a data-value="kor" href="javascript:;">KOR</a></li>
                            <li><a data-value="rus" href="javascript:;">RUS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 header-text">
            <h4><?php echo $static_content[24]->value; ?></h4>
            <span><?php echo $static_content[25]->value; ?></span>
        </div>
    </div>
</header>
<section class="col-md-12 slide">
	<div class="container">
		<div class="col-md-12">
			<?php $this->load->view('front/components/menu_normal'); ?>
			<div class="col-md-3 no-padding">
				<input class="search-box" type="text" placeholder="Search...">
				<button class="search-button"><i class="fa fa-search"></i></button>
			</div>
		</div>
		<div class="col-md-4 col-md-offset-8 slide-text wp-slide-profile">
			<div class="slide-profile">
				<h2><?php echo $static_content[26]->value; ?></h2>
				<div class="col-md-12 no-padding"><?php echo $static_content[27]->value; ?></div>
			</div>
		</div>
	</div>
</section>
<section class="col-md-12 section-10">
	<div class="container">
		<div class="col-md-6 box-1 text-right">
			<iframe class="main-image" src="http://www.youtube.com/embed/WurY94fmHw8"></iframe>
			<a target="blank" href="<?php echo $static_content[51]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/facebook2.png'); ?>">
			<a target="blank" href="<?php echo $static_content[52]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/twitter2.png'); ?>"></a>
			<a target="blank" href="<?php echo $static_content[53]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/linkedin2.png'); ?>"></a>
		</div>
		<div class="col-md-6 box-2">
			<h3>
				<span><?php echo $static_content[28]->value; ?> <a target="blank" href="<?php echo $pdf_download; ?>" title="Download"><button><i class="fa fa-download "></i> e-company profile</button></a></span>
				<section class="dot-profile-1"></section>
			</h3>
			<p><?php echo $static_content[29]->value; ?></p>
			<a href="<?php echo site_url('expertise'); ?>">WHY YOU SHOULD CHOOSE US <span class="arrow"><i class="fa fa-angle-right"></i></span></a>
		</div>
	</div>
</section>
<section class="col-md-12 section-11">
	<div class="container">
		<section class="dot-profile-2"></section>
		<div class="col-md-6 box-1">
			<div class="col-md-12 no-padding">
				<h3><?php echo $static_content[30]->value; ?></h3>
				<p><?php echo $static_content[31]->value; ?></p>
			</div>
			<div class="col-md-12 no-padding company-value">
				<h3><?php echo $static_content[32]->value; ?></h3>
				<p>
					<ul>
						<?php foreach(explode(';', $static_content[33]->value) as $value) { ?>
							<li><?php echo $value; ?></li>
						<?php } ?>
					</ul>
				</p>
			</div>
		</div>
		<div class="col-md-6 box-2">
			<img class="main-image" style="height: 720px; width: 600px;" src="<?php echo site_url('assets/front/images/content/CEO foto.jpg'); ?>">
		</div>
		<section class="dot-profile-3"></section>
	</div>
</section>
<section class="col-md-12 section-11 row-2">
	<div class="container">
		<div class="col-md-6 box-2">
			<img class="main-image" src="<?php echo site_url('assets/front/images/content/profile-pabrik bawah.jpg'); ?>">
		</div>
		<div class="col-md-6 box-1">
            <h3><?php echo $static_content[69]->value; ?></h3>
			<p><?php echo $static_content[70]->value; ?></p>
            <h3><?php echo $static_content[71]->value; ?></h3>
			<p><?php echo $static_content[72]->value; ?></p>
			<h3><?php echo $static_content[34]->value; ?></h3>
			<p><?php echo $static_content[35]->value; ?></p>
			<h3><?php echo $static_content[36]->value; ?></h3>
			<p>
				<ul>
					<?php foreach(explode(';', $static_content[37]->value) as $value) { ?>
						<li style="margin-top: -10px;"><?php echo $value; ?></li>
					<?php } ?>
				</ul>
			</p>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function() {
		$('.slide').vegas({
		    slides: [
				{ src: '<?php echo site_url('assets/front/images/slideshow/slider-profile-2.jpg'); ?>' }
		    ]
		});
	});
</script>
