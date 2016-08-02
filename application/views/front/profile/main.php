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
				<input class="search-box" type="text" placeholder="<?php echo $static_content[94]->value; ?>">
				<button class="search-button"><i class="fa fa-search"></i></button>
			</div>
		</div>
		<div class="col-md-4 col-md-offset-8 slide-text wp-slide-profile" id="slider_caption_box">
			<div class="slide-profile">
                <?php
                    if ($language=="rus"){?>
                        <h2 style="font-family: Arial; font-weight: bold;"><?php echo $static_content[26]->value; ?></h2>
                <?php } else if ($language=="kor") { ?>
                        <h2 style="font-family: Dotum; font-weight: bold;"><?php echo $static_content[26]->value; ?></h2>
                <?php } else if ($language=="chn") { ?>
                        <h2 style="font-family: Simhei; font-weight: bold;"><?php echo $static_content[26]->value; ?></h2>
                <?php } else { ?>
                        <h2><?php echo $static_content[26]->value; ?></h2>
                <?php }
                 ?>
				<div class="col-md-12 no-padding" id="white_background_right_content_desc"><?php echo $static_content[27]->value; ?></div>
			</div>
		</div>
	</div>
</section>
<section class="col-md-12 section-10">
	<div class="container">
		<div class="col-md-6 box-1 text-right">
			<iframe class="main-image" src="http://www.youtube.com/embed/WurY94fmHw8" id="video"></iframe>
			<a target="blank" href="<?php echo $static_content[51]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/facebook2.png'); ?>">
			<a target="blank" href="<?php echo $static_content[52]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/twitter2.png'); ?>"></a>
			<a target="blank" href="<?php echo $static_content[53]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/linkedin2.png'); ?>"></a>
		</div>
		<div class="col-md-6 box-2">
            <?php echo $static_content[28]->value; ?>
			<?php echo $static_content[29]->value; ?>
			<a href="<?php echo site_url('expertise'); ?>"><?php echo $static_content[91]->value; ?> <span class="arrow"><i class="fa fa-angle-right"></i></span></a>
		</div>
	</div>
</section>
<section class="col-xs-12 section-11">
	<div class="container">
		<section class="dot-profile-2"></section>
        <div class="col-xs-6" id="left_content">
            <h3><?php echo $static_content[30]->value; ?></h3>
            <?php
                if ($language=="eng"){?>
                    <p style="text-align: justify;" id="ceo_text_eng"><?php echo $static_content[31]->value; ?></p>
            <?php } else if ($language=="ina") { ?>
                    <p id="ceo_text_ina" style="text-align: justify; line-height: 22px;"><?php echo $static_content[31]->value; ?></p>
            <?php } else if ($language=="chn") { ?>
                    <p id="ceo_text_chn"  style="text-align: justify; line-height: 30px;"><?php echo $static_content[31]->value; ?></p>
            <?php } else if ($language=="kor") { ?>
                    <p id="ceo_text_kor"  style="text-align: justify; line-height: 30px;"><?php echo $static_content[31]->value; ?></p>
            <?php } else if ($language=="rus") { ?>
                    <p id="ceo_text_rus"  style="text-align: justify; line-height: 25px;"><?php echo $static_content[31]->value; ?></p>
            <?php }
             ?>
             <div class="col-md-12 no-padding company-value" id="content_values">
				<h3><?php echo $static_content[32]->value; ?></h3>
				<p>
					<ul>
						<?php foreach(explode(';', $static_content[33]->value) as $value) { ?>
							<li id="values"><?php echo $value; ?></li>
						<?php } ?>
					</ul>
				</p>
			</div>
        </div>
        <div class="col-xs-6">
            <img class="main-image" id="from_ceo_image" src="<?php echo site_url('assets/front/images/content/CEO_foto_2.png'); ?>">
        </div>
        <section class="dot-profile-3"></section>
	</div>
</section>
<section class="col-md-12 section-11 row-2" id="ctn_btm">
	<div class="container">
		<div class="col-md-6 box-2">
			<img class="main-image" src="<?php echo site_url('assets/front/images/content/profile-pabrik bawah.jpg'); ?>">
		</div>
		<div class="col-md-6 box-1">
            <h3><?php echo $static_content[69]->value; ?></h3>
			<p style="margin-top: -10px;"><?php echo $static_content[70]->value; ?></p>
            <h3  style="margin-top: -20px;"><?php echo $static_content[71]->value; ?></h3>
			<p style="margin-top: -10px;"><?php echo $static_content[72]->value; ?></p>
			<h3 style="margin-top: -20px;"><?php echo $static_content[34]->value; ?></h3>
			<p style="margin-top: -10px; line-height:20px;"><?php echo $static_content[35]->value; ?></p>
			<h3 style="margin-top: -20px;"><?php echo $static_content[36]->value; ?></h3>
			<p style="margin-top: -10px;">
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
