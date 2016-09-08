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
                            <li><a href="./">ENG</a></li>
                            <li><a href="ina">INA</a></li>
                            <li><a href="chn">CHN</a></li>
                            <li><a href="kor">KOR</a></li>
                            <li><a href="rus">RUS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 header-text">
            <h4><?php echo $static_content[0]->value; ?></h4>
            <span><?php echo $static_content[1]->value; ?></span>
        </div>
    </div>
</header>
<section class="col-md-12 slide">
	<div class="container">
		<div class="col-md-12">
			<?php $this->load->view('front/components/menu'); ?>
			<div class="col-md-3 no-padding">
				<input class="search-box" type="text" placeholder="<?php echo $static_content[94]->value; ?>">
				<button class="search-button"><i class="fa fa-search"></i></button>
			</div>
		</div>
		<div class="col-md-3 col-md-offset-9 slide-text wp-slide-profile" id="content_white_right_top">
			<section class="dot-home-1"></section>
			<div class="slide-profile">
                <?php
                    if ($language=="rus"){?>
                        <h2 style="font-family: Arial; font-weight: bold;" id="slide_caption_title"><?php echo $static_content[2]->value; ?></h2>
                <?php } else if ($language=="kor") { ?>
                        <h2 style="font-family: Dotum; font-weight: bold;" id="slide_caption_title"><?php echo $static_content[2]->value; ?></h2>
                <?php } else if ($language=="chn") { ?>
                        <h2 style="font-family: Simhei; font-weight: bold;" id="slide_caption_title"><?php echo $static_content[2]->value; ?></h2>
                <?php } else { ?>
                        <h2 id="slide_caption_title"><?php echo $static_content[2]->value; ?></h2>
                <?php }
                 ?>
				<div class="col-md-12 no-padding"><?php echo $static_content[3]->value; ?></div>
			</div>
		</div>
	</div>
</section>
<section class="col-md-12 section-1 no-padding" style="margin-top: -20px;">
	<div class="col-md-12 background">
		<div class="container">
			<div class="col-md-6 box-1">
				<h1><?php echo $static_content[4]->value; ?></h1>
				<p style="font-size: 18px;"><?php echo $static_content[5]->value; ?></p>
				<div class="col-md-12 no-padding text-right"><?php echo $static_content[6]->value; ?></div>
			</div>
			<div class="col-md-6 box-2">
				<h3>
					<span><?php echo $static_content[7]->value; ?></span>
					<section class="dot-home-2"></section>
				</h3>
				<p><?php echo $static_content[8]->value; ?></p>
				<a href="<?php echo site_url($lang_path.'profile'); ?>"><?php echo $static_content[9]->value; ?> <span class="arrow"><i class="fa fa-angle-right"></i></span></a>
			</div>
		</div>
	</div>
</section>
<section class="col-md-12 section-2 no-padding">
	<img src="<?php echo site_url('assets/front/images/content/SMP-map.jpg'); ?>">
</section>
<section class="col-md-12 section-15">
	<div class="container">
		<div class="col-md-2">
			<section class="dot-home-3"></section>
		</div>
		<div class="col-md-5 box-1 no-padding">
			<h3><?php echo $static_content[10]->value; ?></h3>
			<p><?php echo $static_content[11]->value; ?></p>
		</div>
		<div class="col-md-3 col-md-offset-2 box-2">
			<p><img src="<?php echo site_url('assets/front/images/map-1.png'); ?>"> <?php echo $static_content[85]->value; ?></p>
			<p><img src="<?php echo site_url('assets/front/images/map-2.png'); ?>"> <?php echo $static_content[84]->value; ?></p>
		</div>
	</div>
</section>
<section class="col-md-12 section-3">
	<div class="container">
		<div class="col-md-5 box-1">
			<section class="dot-home-5"></section>
			<h4><?php echo $static_content[12]->value; ?></h4>
			<p><?php echo $static_content[13]->value; ?></p>
			<section class="dot-home-6"></section>
		</div>
		<div class="col-md-6 box-2">
			<img src="<?php echo site_url('assets/front/images/content/home-why partnering with us.jpg'); ?>">
		</div>
	</h6>
</section>
<section class="col-md-12 section-4">
	<div class="container">
		<div class="col-md-1 no-padding"></div>
		<div class="col-md-11 no-padding">
			<div class="col-md-12 certification">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-1.png'); ?>">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-2.png'); ?>">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-3.png'); ?>">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-4.jpg'); ?>">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-5.png'); ?>">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-6.png'); ?>">
				<img src="<?php echo site_url('assets/front/images/content/SMP-certificate-7.png'); ?>" style="margin-left: -15px;">
			</div>
			<div class="col-md-6 box-1">
				<h3><?php echo $static_content[14]->value; ?></h3>
				<p><?php echo $static_content[15]->value; ?></p>
				<img src="<?php echo site_url('assets/front/images/content/SMP-product-coconut.jpg'); ?>">
			</div>
			<div class="col-md-6 box-2">
				<?php foreach ($products as $key => $product) { ?>
					<a class="single_image" href="<?php echo site_url($lang_path.'product?detail=' . $product->id); ?>#product-section">
						<div class="col-md-4 col-sm-6">
							<img src="<?php echo site_url('uploads/' . $product->image_name); ?>">
							<?php
								$product_name = 'name_' . $language;
								echo strtoupper($product->$product_name);
							?>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<section class="col-md-12 section-5">
	<div class="container">
		<h3>
			<span><?php echo $static_content[89]->value; ?></span>
			<section class="dot-home-4"></section>
		</h3>
		<div class="col-md-12 no-padding">
			<div class="row news_slider">
				<?php foreach ($posts as $post) { ?>
					<div class="col-md-12 col-sm-12 box">
						<div class="col-md-12 no-padding wrapper-date">
							<div class="date"><?php echo strtoupper(date("d", strtotime($post->created_at))); ?></div>
							<div class="month-year"><?php echo strtoupper(date("F Y", strtotime($post->created_at))); ?></div>
						</div>
						<a href="<?php echo site_url($lang_path.'post/detail/' . $post->slug); ?>" class="title-link">
							<p>
								<?php
									$title = 'title_' . $language;
									echo strtoupper($post->$title);
								?>
							</p>
						</a>
                        <?php
                            $cat = strtoupper($post->category_name);
                            if ($cat=="NEWS"){
                                if ($language=="rus"){ ?>
						                <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ Новости ]</span></a>
                                <?php } else if ($language=="eng"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ NEWS ]</span></a>
                                <?php } else if ($language=="ina"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ BERITA ]</span></a>
                                <?php } else if ($language=="chn"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ 消息 ]</span></a>
                                <?php } else if ($language=="kor"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ 뉴스 ]</span></a>
                                <?php }
                            } else if ($cat=="EVENTS"){
                                if ($language=="rus"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ событие ]</span></a>
                                <?php } else if ($language=="eng"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ EVENTS ]</span></a>
                                <?php } else if ($language=="ina"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ EVENT ]</span></a>
                                <?php } else if ($language=="chn"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ 事件 ]</span></a>
                                <?php } else if ($language=="kor"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ 이벤트 ]</span></a>
                                <?php }
                            } else if ($cat=="ARTICLES"){
                                if ($language=="rus"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ Статьи ]</span></a>
                                <?php } else if ($language=="eng"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ ARTICLES ]</span></a>
                                <?php } else if ($language=="ina"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ ARTIKEL ]</span></a>
                                <?php } else if ($language=="chn"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ 文章 ]</span></a>
                                <?php } else if ($language=="kor"){ ?>
                                        <a href="<?php echo site_url($lang_path.'post/category/' . $post->category_id); ?>"><span class="category">[ 기사 ]</span></a>
                                <?php }
                            }
                         ?>
            <div style="height:150px;">
						  <img src="<?php echo site_url('uploads/' . $post->image_name) . "?" . rand(0,999); ?>" style="height:100%; width: 100%; object-fit: contain;">
            </div>
						<a href="<?php echo site_url($lang_path.'post/detail/' . $post->slug); ?>"><?php echo $static_content[90]->value; ?> &nbsp;<span class="arrow"><i class="fa fa-angle-right"></i></span></a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<section class="wp-dialog">
	<div class="body">
		<div class="close">CLOSE</div>
		<div class="image">
			<img src="">
		</div>
		<div class="content">
			<h3></h3>
			<p></p>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function() {
		$('.slide').vegas({
		    slides: [
				{ src: '<?php echo site_url('assets/front/images/slideshow/home-slideshow1.jpg'); ?>' },
				{ src: '<?php echo site_url('assets/front/images/slideshow/home-slideshow2.jpg'); ?>' },
				{ src: '<?php echo site_url('assets/front/images/slideshow/home-slideshow3.jpg'); ?>' }
			],
		    transition: 'swirlLeft'
		});

		$(".news_slider").owlCarousel({
			items: 1,
			nav: true,
			loop: true,
			navText: ['<i class="fa fa-angle-left" id="arrow_left"></i>', '<i class="fa fa-angle-right"></i>'],
			responsive : {
			    900 : {
					items: 4,
					nav: true,
					loop: true,
					navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
			    }
			}
		});
	});
</script>
