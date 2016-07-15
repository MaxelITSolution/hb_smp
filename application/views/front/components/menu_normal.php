<nav class="col-md-9 wrapper-nav">
	<a href="javascript:;"><div class="menu nav-close">CLOSE</div></a>
	<a href="<?php echo site_url($lang_path.'/'); ?>"><div class="menu nav-main <?php echo $title == 'Home' ? 'active' : ''; ?>">MAIN MENU</div><div class="devider nav-normal"><div></div></div></a>
	<a href="<?php echo site_url($lang_path.'/'); ?>"><div class="menu nav-normal <?php echo $title == 'Home' ? 'active' : ''; ?>">HOME</div><div class="devider nav-normal"><div></div></div></a>
	<a href="<?php echo site_url($lang_path.'product'); ?>"><div class="menu nav-normal <?php echo $title == 'Product' ? 'active' : ''; ?>">PRODUCT</div><div class="devider nav-normal"><div></div></div></a>
	<a href="<?php echo site_url($lang_path.'profile'); ?>"><div class="menu nav-normal <?php echo $title == 'Profile' ? 'active' : ''; ?>">PROFILE</div><div class="devider nav-normal"><div></div></div></a>
	<a href="<?php echo site_url($lang_path.'expertise'); ?>"><div class="menu nav-normal <?php echo $title == 'Our Expertise' ? 'active' : ''; ?>">OUR EXPERTISE</div><div class="devider nav-normal"><div></div></div></a>
	<a href="<?php echo site_url($lang_path.'post/category/1'); ?>"><div class="menu nav-normal <?php echo $title == 'Post' ? 'active' : ''; ?>">NEWS</div><div class="devider nav-normal"><div></div></div></a>
	<a href="<?php echo site_url($lang_path.'contact'); ?>"><div class="menu nav-normal <?php echo $title == 'Contact' ? 'active' : ''; ?>">CONTACT</div></a>
</nav>
