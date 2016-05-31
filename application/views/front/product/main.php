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
            <h4><?php echo $static_content[16]->value; ?></h4>
            <span><?php echo $static_content[17]->value; ?></span>
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
		<div class="col-md-3 col-md-offset-9 slide-text no-padding product-slide-text wp-slide-profile" id="slider_caption_box">
			<section class="dot-product-1"></section>
			<div class="slide-product slide-profile">
                <?php
                    if ($language=="rus"){?>
                        <h2 style="font-family: Arial; font-weight: bold;"><?php echo $static_content[18]->value; ?></h2>
                <?php } else if ($language=="kor") { ?>
                        <h2 style="font-family: Dotum; font-weight: bold;"><?php echo $static_content[18]->value; ?></h2>
                <?php } else if ($language=="chn") { ?>
                        <h2 style="font-family: Simhei; font-weight: bold;"><?php echo $static_content[18]->value; ?></h2>
                <?php } else { ?>
                        <h2><?php echo $static_content[18]->value; ?></h2>
                <?php }
                 ?>
				<div class="col-md-12 no-padding"><?php echo $static_content[19]->value; ?></div>
			</div>
		</div>
	</div>
</section>
<section class="col-md-12 section-10 wp-product">
	<div class="container">
		<div class="col-md-6 box-1 text-right">
			<iframe class="main-image" src="http://www.youtube.com/embed/WurY94fmHw8" id="video"></iframe>
			<a target="blank" href="<?php echo $static_content[51]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/facebook2.png'); ?>"></a>
			<a target="blank" href="<?php echo $static_content[52]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/twitter2.png'); ?>"></a>
			<a target="blank" href="<?php echo $static_content[53]->value; ?>"><img class="social-media" src="<?php echo site_url('assets/front/images/linkedin2.png'); ?>"></a>
		</div>
		<div class="col-md-6 box-2">
			<h3 style="margin-top: -15px;">
				<span><?php echo $static_content[20]->value; ?></span>
				<section class="dot-product-2" style="margin-left: 300px;"></section>
			</h3>
			<p><?php echo $static_content[21]->value; ?></p>
			<a href="<?php echo site_url('expertise'); ?>"><?php echo $static_content[91]->value; ?> <span class="arrow"><i class="fa fa-angle-right"></i></span></a>
		</div>
	</div>
</section>
<section class="col-md-12 section-4 detail-product">
	<div class="container">
		<div class="col-md-5 box-1 text-center">
			<section class="dot-product-3"></section>
			<h3><?php echo $static_content[22]->value; ?></h3>
		</div>
		<div class="col-md-7 box-1">
			<p><?php echo $static_content[23]->value; ?></p>
		</div>
    
    
    
		<div class="col-md-12 box-2" id="product-section">
			<div class="row">
				<?php foreach ($products as $key => $product) { ?>
					<?php
						$product_name = 'name_' . $language;
						$product_description = 'description_' . $language;
					?>
					<a class="single_image" href="javascript:;" data-title="<?php echo $product->$product_name; ?>" data-desc="<?php echo nl2br($product->$product_description); ?>" data-href="<?php echo site_url('uploads/' . $product->image_name); ?>">
						<div class="col-md-3 col-sm-5">
							<img src="<?php echo site_url('uploads/' . $product->image_name); ?>">
              <p style="font-size: 14px;"> <?php echo strtoupper($product->$product_name); ?> </p>
						</div>
					</a>
					<?php if ($key == 3) { ?>
						<div class="devider"></div>
					<?php } ?>
				<?php } ?>
			</div>
<!--      Paging -->
      <?php if ($page_count > 1) { ?>
			<ul>
        <li class="active"><a href="#">Page</a></li>

        <?php if ($current_page > 1 ) { ?>
        <li><a href="<?php echo site_url('product?page='.($current_page - 1)); ?>"><</a></li>
        <?php } ?>

        <?php for ($i=1 ; $i <= $page_count; $i++) { ?>
        <li><a href="<?php echo site_url('product?page='.$i); ?>"><?php echo $i; ?></a></li>        
        <?php } ?>
        
        <?php if ($current_page < $page_count) { ?>
        <li><a href="<?php echo site_url('product?page='.($current_page + 1)); ?>">></a></li>
        <?php } ?>
			</ul>
      <?php } ?>
		</div>
    
    
    
	</div>
</section>
<section class="wp-dialog" <?php echo $detail ? 'style="display: block;"' : '' ?>>
	<div class="body">
		<div class="close">CLOSE</div>
		<div class="image">
			<img src="<?php echo $detail ? site_url('uploads/' . $detail->image_name) : ''; ?>">
		</div>
		<?php
			$product_name = 'name_' . $language;
			$product_description = 'description_' . $language;
		?>
		<div class="content">
			<h3 style="font-weight: bold;"><?php echo $detail ? strtoupper($detail->$product_name) : ''; ?></h3>
			<p><?php echo $detail ? $detail->$product_description : ''; ?></p>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function() {
		$('.slide').vegas({
		    slides: [
				{ src: '<?php echo site_url('assets/front/images/slideshow/slider-product.jpg'); ?>' }
			]
		});
		$('.single_image').each(function() {
			$(this).on('click', function() {
				$('.wp-dialog').find('img').attr('src', $(this).attr('data-href'));
				$('.wp-dialog').find('h3').html($(this).attr('data-title'));
				$('.wp-dialog').find('p').html($(this).attr('data-desc'));
				$('.wp-dialog').fadeIn();
			});
		});
		$('.close').on('click', function() {
			$('.wp-dialog').fadeOut();
		});
	});
</script>
