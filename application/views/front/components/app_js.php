<script type="text/javascript">
	$(document).ready(function() {
		$('.search-button').on('click', function() {
			var search = $('.search-box').val();
			if (search != '') {
				window.location.replace('<?php echo site_url('post/search'); ?>' + '/' + search);
			}
		});
		$(".search-box").keypress(function(event) {
            if (event.which == 13) {
                var search = $('.search-box').val();
				if (search != '') {
					window.location.replace('<?php echo site_url('post/search'); ?>' + '/' + search);
				}
            }
        });
        $('.language').find('a').each(function() {
        	$(this).on('click', function() {
        		var lang = $(this).attr('data-value');
        		$.post('<?php echo site_url('home/language'); ?>', {language : lang}).done(function() {
        			location.reload(); 
        		});
        	});
        });
	});
</script>