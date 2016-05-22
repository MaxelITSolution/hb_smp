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
				<input class="search-box" type="text" placeholder="Search...">
				<button class="search-button"><i class="fa fa-search"></i></button>
			</div>
		</div>
		<div class="col-md-4 col-md-offset-8 slide-text wp-slide-news">
			<div class="slide-profile">
				<h2><?php echo $static_content[48]->value; ?></h2>
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
				<span>CATEGORIES</span>
			</h3>
			<a href="<?php echo site_url('post/category/1'); ?>">
				<div class="col-md-10 col-sm-4 no-padding news <?php echo $category == 1 ? 'active-news' : '' ?>">
					<img src="<?php echo site_url('assets/front/images/content/SMP-categories-1.png'); ?>">
					<span>NEWS</span>
				</div>
			</a>
			<a href="<?php echo site_url('post/category/2'); ?>">
				<div class="col-md-10 col-sm-4 no-padding events <?php echo $category == 2 ? 'active-events' : '' ?>">
					<img src="<?php echo site_url('assets/front/images/content/SMP-categories-2.png'); ?>">
					<span>EVENTS</span>
				</div>
			</a>
			<a href="<?php echo site_url('post/category/3'); ?>">
				<div class="col-md-10 col-sm-4 no-padding articles <?php echo $category == 3 ? 'active-articles' : '' ?>">
					<img src="<?php echo site_url('assets/front/images/content/SMP-categories-3.png'); ?>">
					<span>ARTICLES</span>
				</div>
			</a>
		</div>
		<div class="col-md-9 detail">
			<?php
				$title = 'title_' . $language;
				$content = 'content_' . $language;
			?>
			<h3><?php echo $post->$title; ?></h3>
			<div class="category">[ <?php echo strtoupper($post->category_name); ?> ]  <?php echo strtoupper(date("j/F/Y H.i", strtotime($post->created_at))); ?></div>
			<img src="<?php echo site_url('uploads/' . $post->image_name); ?>">
			<p><?php echo $post->$content; ?></p>
			<a href="<?php echo site_url('post/category/' . $post->category_id); ?>"><p class="back-link text-right">< BACK TO NEWS LIST</p></a>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function() {
		$('.slide').vegas({
		    slides: [
				{ src: '<?php echo site_url('assets/front/images/slideshow/slider-profile-1.jpg'); ?>' },
				{ src: '<?php echo site_url('assets/front/images/slideshow/slider-profile-2.jpg'); ?>' }
		    ]
		});
	});
</script>
