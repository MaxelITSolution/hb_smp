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
<!--                        
                            <li><a data-value="eng" href="javascript:;">ENG</a></li>
                            <li><a data-value="ina" href="javascript:;">INA</a></li>
                            <li><a data-value="chn" href="javascript:;">CHN</a></li>
                            <li><a data-value="kor" href="javascript:;">KOR</a></li>
                            <li><a data-value="rus" href="javascript:;">RUS</a></li>
-->
                            <li><a href="<?php echo site_url('contact'); ?>">ENG</a></li>
                            <li><a href="<?php echo site_url('ina/contact'); ?>">INA</a></li>
                            <li><a href="<?php echo site_url('chn/contact'); ?>">CHN</a></li>
                            <li><a href="<?php echo site_url('kor/contact'); ?>">KOR</a></li>
                            <li><a href="<?php echo site_url('rus/contact'); ?>">RUS</a></li>
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
<section class="col-md-12 section-7">
	<div class="container">
		<div class="col-md-12">
			<h4>Contacts have been sent</h4>
			<span><?php echo $static_content[46]->value; ?></span>
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
