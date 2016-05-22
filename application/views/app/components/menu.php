<ul id="navigation">
	<li class="active"><a data-url="<?php echo site_url('app/home/ajax'); ?>" onclick="load_content(this)"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
	<?php foreach ($list_menu as $key => $menu) { ?>
		<?php if ($menu->parent_id == 0) { ?>
			<li>
				<a role="button" tabindex="0"><i class="<?php echo $menu->icon; ?>"></i> <span><?php echo $menu->title; ?></span></a>
				<ul>
					<?php foreach ($list_menu as $key => $submenu) { ?>
						<?php if ($submenu->parent_id == $menu->id) { ?>
			                <li><a data-url="<?php echo site_url($submenu->link); ?>" onclick="load_content(this)"><i class="fa fa-caret-right"></i> <?php echo $submenu->title; ?></a></li>
						<?php } ?>
					<?php } ?>
				</ul>
			</li>
		<?php } ?>
	<?php } ?>
</ul>
<script type="text/javascript">
	function load_content(element) {
		$('#navigation').find('li').each(function() {
			$(this).removeClass('active');
			$(this).find('.ul').hide();
		});
		$(element).parent().addClass('active');
		$(element).parent().parent().parent().addClass('active');
		$('title').html($(element).find('.title').html());
		
		$('#wp-loading').fadeIn('fast');
		var url = $(element).attr('data-url');
		$.post(url).done(function(data) {
			$('#content').html(data);
	    	$('#wp-loading').fadeOut();
		});
	}
</script>
