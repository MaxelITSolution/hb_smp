<header class="col-md-12">
    <div class="container">
        <div class="col-md-4">
            <div class="col-md-12 no-padding">
                <a href="home"><img class="logo" src="<?php echo site_url('assets/front/images/logo.png'); ?>"></a>
            </div>
            <div class="col-md-12 no-padding social-media-wrapper">
                <a target="blank" href="<?php echo $static_content[60]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/fb_.png'); ?>"></a>
                <a target="blank" href="<?php echo $static_content[61]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/in_.png'); ?>"></a>
                <a target="blank" href="<?php echo $static_content[62]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/g+_.png'); ?>"></a>
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
            <h4><?php echo $static_content[38]->value; ?></h4>
            <span><?php echo $static_content[39]->value; ?></span>
        </div>
    </div>
</header>
<section class="col-md-12 slide">
	<div class="container">
		<div class="col-md-12">
			<?php $this->load->view('front/components/menu_normal'); ?>
			<div class="col-md-3 no-padding">
				<input class="search-box" type="text" placeholder="<?php echo $static_content[94]->value; ?>">
				<button class="search-button"><i class="fa fa-search"></i></button>
			</div>
		</div>
		<div class="col-md-4 col-md-offset-8 slide-text wp-slide-expertise" style="margin-left: 650px;" id="slider_caption_box_expertise">
			<section class="dot-expertise-1"></section>
			<div class="slide-profile" id="caption_expert_content">
                <?php
                    if ($language=="rus"){?>
                        <h3 style="font-family: Arial; font-weight: bold;"><?php echo $static_content[40]->value; ?></h3>
                <?php } else if ($language=="kor") { ?>
                        <h3 style="font-family: Dotum; font-weight: bold;"><?php echo $static_content[40]->value; ?></h3>
                <?php } else if ($language=="chn") { ?>
                        <h3 style="font-family: Simhei; font-weight: bold;"><?php echo $static_content[40]->value; ?></h3>
                <?php } else { ?>
                        <h3 style="line-height: 25px;"><?php echo $static_content[40]->value; ?></h3>
                <?php }
                 ?>
				<div class="col-md-12 no-padding" style="width: 500px;" id="caption_expert_content">
					<?php echo $static_content[41]->value; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="col-md-12 section-8">
	<div class="container">
		<div class="col-md-7 box-1 no-padding">
			<img src="<?php echo site_url('assets/front/images/content/SMP-bestquality-head.jpg'); ?>">
		</div>
		<div class="col-md-5 box-2">
			<div class="col-md-12 content">
				<h2>
					<span><?php echo $static_content[42]->value; ?></span>
					<section class="dot-expertise-2"></section>
				</h2>
				<p><?php echo $static_content[43]->value; ?></p>
			</div>
			<div class="col-md-12 text-center">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-1.jpg'); ?>">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-2.jpg'); ?>">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-3.jpg'); ?>"> <br>
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-4.jpg'); ?>">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-5.jpg'); ?>">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-6.jpg'); ?>">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-7.jpg'); ?>">
			</div>
		</div>
		<section class="dot-expertise-3"></section>
	</div>
</section>
<section class="col-md-12 section-2 no-padding">
	<img src="<?php echo site_url('assets/front/images/content/SMP-map.jpg'); ?>">
</section>
<section class="col-md-12 section-9">
	<div class="container">
		<div class="col-md-1">
			<section class="dot-expertise-4"></section>
		</div>
		<div class="col-md-4 box-1">
			<h3><?php echo $static_content[44]->value; ?></h3>
		</div>
		<div class="col-md-7 box-2"><?php echo $static_content[45]->value; ?></div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function() {
		$('.slide').vegas({
		    slides: [
				{ src: '<?php echo site_url('assets/front/images/slideshow/expertise-slideshow.jpg'); ?>' }
		    ]
		});
	});
</script>
