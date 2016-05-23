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
            <h4><?php echo $static_content[51]->value; ?></h4>
            <span><?php echo $static_content[52]->value; ?></span>
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
		<div class="col-md-3 col-md-offset-9 slide-text slide-contact wp-slide-profile">
			<section class="dot-contact-1"></section>
			<div class="slide-profile">
				<h2><?php echo $static_content[53]->value; ?></h2>
				<div class="col-md-12 no-padding"><?php echo $static_content[56]->value; ?></div>
				<div class="col-md-12 no-padding"><?php echo $static_content[57]->value; ?></div>
				<div class="col-md-12 no-padding"><?php echo $static_content[58]->value; ?></div>
				<div class="col-md-12 no-padding"><?php echo $static_content[59]->value; ?></div>
			</div>
		</div>
	</div>
</section>
<section class="col-md-12 section-6">
	<div class="container">
		<div class="col-md-1"></div>
		<div class="col-md-5 no-padding box-1">
			<h3>
				<span><?php $qwe = explode(';',$static_content[53]->value; ?></span>
				<section class="dot-contact-2"></section>
			</h3>
			<?php echo $static_content[54]->value; ?>
		</div>
		<div class="col-md-6 box-2">
			<form name="contact" method="post" action="<?php echo site_url('contact/send'); ?>">
				<input type="text" name="mr" class="textfield type-1" placeholder="Mr.">
				<input type="text" name="name" class="textfield type-3" placeholder="Your Name">
				<input type="text" name="email" class="textfield type-2" placeholder="E-mail">
				<button class="button">SUBMIT</button>
			</form>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function() {
		$('.slide').vegas({
		    slides: [
				{ src: '<?php echo site_url('assets/front/images/slideshow/slider-contact.jpg'); ?>' }
		    ]
		});
	});
</script>
