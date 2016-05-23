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
        	<?php if (!empty($posts)) { ?>
	            <h4><?php echo $static_content[63]->value; ?></h4>
	            <span><?php echo $static_content[64]->value; ?></span>
	        <?php } else { ?>
	        	<h4><?php echo $static_content[65]->value; ?></h4>
	            <span><?php echo $static_content[66]->value; ?></span>
	        <?php } ?>
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
		<div class="col-md-6 search-text">
			<h2><?php echo $static_content[93]->value; ?></h2>
			<?php if (!empty($posts)) { ?>
				<div class="col-md-12 no-padding">YOUR SEARCH FOR "<?php echo $key; ?>" HAS <?php echo count($posts); ?> MATCHES</div>
			<?php } else { ?>
				<div class="col-md-12 no-padding">YOUR SEARCH FOR "<?php echo $key; ?>" DID NOT MATCH WITH ANY DOCUMENT</div>
			<?php } ?>
		</div>
	</div>
</section>
<section class="col-md-12">
	<div class="container">
		<section class="dot-search"></section>
	</div>
</section>
<section class="col-md-12 section-7">
	<?php if (!empty($posts)) { ?>
		<div class="container">
			<div class="col-md-12 box-2">
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
						<a href="<?php echo site_url('post/detail/' . $post->slug); ?>"><p><?php echo strtoupper($post->$title); ?></p></a>
						<span><?php echo substr(strip_tags($post->$content), 0, 450); ?> <a href="<?php echo site_url('post/detail/' . $post->slug); ?>">Read more</a></span>
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
	<?php } else { ?>
		<div class="container">
			<div class="col-md-12">
				<h4 style="font-weight: bold;"><?php echo $static_content[67]->value; ?></h4>
				<span><?php echo $static_content[68]->value; ?></span>
			</div>
		</div>
	<?php } ?>
</section>
<script type="text/javascript">
	$(document).ready(function() {
		$('.slide').vegas({
		    slides: [
				{ src: '<?php echo site_url('assets/front/images/slideshow/slider-search.jpg'); ?>' }
		    ]
		});
	});
</script>
