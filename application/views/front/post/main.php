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
                            <li><a href="<?php echo site_url('post/category/1'); ?>">ENG</a></li>
                            <li><a href="<?php echo site_url('ina/post/category/1'); ?>">INA</a></li>
                            <li><a href="<?php echo site_url('chn/post/category/1'); ?>">CHN</a></li>
                            <li><a href="<?php echo site_url('kor/post/category/1'); ?>">KOR</a></li>
                            <li><a href="<?php echo site_url('rus/post/category/1'); ?>">RUS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 header-text">
            <h4><?php echo $static_content[46]->value; ?></h4>
            <span><?php echo $static_content[47]->value; ?></span>
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
		<div class="col-md-4 col-md-offset-8 slide-text wp-slide-news" id="slider_caption_box">
			<div class="slide-profile">
                <?php
                    if ($language=="rus"){?>
                        <h2 style="font-family: Arial; font-weight: bold;"><?php echo $static_content[48]->value; ?></h2>
                <?php } else if ($language=="kor") { ?>
                        <h2 style="font-family: Dotum; font-weight: bold;"><?php echo $static_content[48]->value; ?></h2>
                <?php } else if ($language=="chn") { ?>
                        <h2 style="font-family: Simhei; font-weight: bold;"><?php echo $static_content[48]->value; ?></h2>
                <?php } else { ?>
                        <h2><?php echo $static_content[48]->value; ?></h2>
                <?php }
                 ?>
				<div class="col-md-12 no-padding"><?php echo $static_content[49]->value; ?></div>
			</div>
		</div>
	</div>
</section>
<section class="col-md-12 section-14">
	<div class="container">
		<?php echo $static_content[50]->value; ?>
		<section class="dot-news-1"></section>
	</div>
</section>
<section class="col-md-12 section-7">
	<div class="container">
		<div class="col-md-3 box-1">
			<h3>
				<section class="dot-news-2"></section>
				<span><?php echo $static_content[92]->value; ?></span>
			</h3>
			<a href="<?php echo site_url($lang_path.'post/category/1'); ?>">
				<div class="col-md-10 col-sm-4 no-padding news <?php echo $category == 1 ? 'active-news' : '' ?>">
					<img src="<?php echo site_url('assets/front/images/content/SMP-categories-1.png'); ?>">
                    <?php
                        if ($language=="rus"){?>
                            <span style="font-family: Arial; font-weight: bold;"><?php echo $static_content[95]->value; ?></span>
                    <?php } else if ($language=="kor") { ?>
                            <span style="font-family: Dotum; font-weight: bold;"><?php echo $static_content[95]->value; ?></span>
                    <?php } else if ($language=="chn") { ?>
                            <span style="font-family: Simhei; font-weight: bold;"><?php echo $static_content[95]->value; ?></span>
                    <?php } else { ?>
                            <span><?php echo $static_content[95]->value; ?></span>
                    <?php }
                     ?>
				</div>
			</a>
			<a href="<?php echo site_url($lang_path.'post/category/2'); ?>">
				<div class="col-md-10 col-sm-4 no-padding events <?php echo $category == 2 ? 'active-events' : '' ?>">
					<img src="<?php echo site_url('assets/front/images/content/SMP-categories-2.png'); ?>">
                    <?php
                        if ($language=="rus"){?>
                            <span style="font-family: Arial; font-weight: bold;"><?php echo $static_content[96]->value; ?></span>
                    <?php } else if ($language=="kor") { ?>
                            <span style="font-family: Dotum; font-weight: bold;"><?php echo $static_content[96]->value; ?></span>
                    <?php } else if ($language=="chn") { ?>
                            <span style="font-family: Simhei; font-weight: bold;"><?php echo $static_content[96]->value; ?></span>
                    <?php } else { ?>
                            <span><?php echo $static_content[96]->value; ?></span>
                    <?php }
                     ?>
				</div>
			</a>
			<a href="<?php echo site_url($lang_path.'post/category/3'); ?>">
				<div class="col-md-10 col-sm-4 no-padding articles <?php echo $category == 3 ? 'active-articles' : '' ?>">
					<img src="<?php echo site_url('assets/front/images/content/SMP-categories-3.png'); ?>">
                    <?php
                        if ($language=="rus"){?>
                            <span style="font-family: Arial; font-weight: bold;"><?php echo $static_content[97]->value; ?></span>
                    <?php } else if ($language=="kor") { ?>
                            <span style="font-family: Dotum; font-weight: bold;"><?php echo $static_content[97]->value; ?></span>
                    <?php } else if ($language=="chn") { ?>
                            <span style="font-family: Simhei; font-weight: bold;"><?php echo $static_content[97]->value; ?></span>
                    <?php } else { ?>
                            <span><?php echo $static_content[97]->value; ?></span>
                    <?php }
                     ?>
				</div>
			</a>
		</div>
		<div class="col-md-9 box-2">
			<?php foreach ($posts as $post) { ?>
				<div class="col-md-12 no-padding list">
					<div class="col-md-12 no-padding">
						<div class="date"><?php echo strtoupper(date("d", strtotime($post->created_at))); ?></div>
						<div class="month-year"><?php echo strtoupper(date("F Y", strtotime($post->created_at))); ?></div>
					</div>
					<?php
						$title = 'title_' . $language;
						$content = 'content_' . $language;
					?>
					<a href="<?php echo site_url($lang_path.'post/detail/' . $post->slug); ?>"><p><?php echo strtoupper($post->$title); ?></p></a>
					<span><?php echo substr(strip_tags($post->$content), 0, 450); ?> <a href="<?php echo site_url($lang_path.'post/detail/' . $post->slug); ?>"><?php echo $static_content[90]->value; ?></a></span>
				</div>
			<?php } ?>
			<!-- <ul>
				<li class="active"><a href="">Page</a></li>
				<li><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">></a></li>
			</ul> -->
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function() {
		$('.slide').vegas({
		    slides: [
				{ src: '<?php echo site_url('assets/front/images/slideshow/slider-profile-1.jpg'); ?>' }
		    ]
		});
	});
</script>
