<nav class="col-md-9 wrapper-nav home-nav">
	<a href="javascript:;"><div class="menu nav-close">CLOSE</div></a>
	<a href="<?php echo site_url('/'); ?>"><div class="menu nav-main">MAIN MENU</div><div class="devider nav-normal"><div></div></div></a>
	<a href="<?php echo site_url('product'); ?>"><div class="menu nav-normal <?php echo $title == 'Product' ? 'active' : ''; ?>">PRODUCT</div><div class="devider nav-normal"><div></div></div></a>
	<a href="<?php echo site_url('profile'); ?>"><div class="menu nav-normal <?php echo $title == 'Profile' ? 'active' : ''; ?>">PROFILE</div><div class="devider nav-normal"><div></div></div></a>
	<a href="<?php echo site_url('expertise'); ?>"><div class="menu nav-normal <?php echo $title == 'Our Expertise' ? 'active' : ''; ?>">OUR EXPERTISE</div><div class="devider nav-normal"><div></div></div></a>
	<a href="<?php echo site_url('post/category/1'); ?>"><div class="menu nav-normal <?php echo $title == 'Post' ? 'active' : ''; ?>">NEWS</div><div class="devider nav-normal"><div></div></div></a>
	<a href="<?php echo site_url('contact'); ?>"><div class="menu nav-normal <?php echo $title == 'Contact' ? 'active' : ''; ?>">CONTACT</div></a>
</nav>
<script type="text/javascript">
	$(document).ready(function() {
		$(window).resize(function() {
			if ($(window).width() < 1350) {
				$('.nav-main').off();
				$('.wrapper-nav').off();
				$('nav').hide();
			} else {
				$('nav').show();
				$('.nav-main').hover(function() {
					$('.nav-normal').fadeIn();
				});
				$('.wrapper-nav').mouseleave(function() {
					$('.nav-normal').fadeOut();
				});
			}
		});

		if ($(window).width() > 1350) {
			$('.nav-main').hover(function() {
				$('.nav-normal').fadeIn();
			});
			$('.wrapper-nav').mouseleave(function() {
				$('.nav-normal').fadeOut();
			});
		}
	});
</script>