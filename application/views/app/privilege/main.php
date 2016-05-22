<div class="page page-forms-common">
	<div class="pageheader">
		<h2><?php echo $page_title; ?> <span><?php echo $page_subtitle; ?></span></h2>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<a data-url="<?php echo site_url('app/home'); ?>" href="javascript:;" onclick="load_content(this)"><i class="fa fa-home"></i> App</a>
				</li>
				<li>
					<a href="#">Privilege</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<section class="tile">
				<div class="tile-header dvd dvd-btm">
					<h2 class="custom-font"><strong>Group</strong> Name</h2>
				</div>
				<div class="tile-body">
					<ul class="tabs-menu">
						<?php foreach ($groups as $key => $group) { ?>
							<li class="list" id="<?php echo $group->id; ?>"><a href="javascript:;"><?php echo $group->group_name; ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</section>
		</div>
		<div class="col-md-6 no-left-padding">
			<section class="tile">
				<div class="tile-header dvd dvd-btm">
					<h2 class="custom-font"><strong>List</strong> Menu</h2>
				</div>
				<div class="tile-body">
					<table class="table table-striped tree">
						<?php foreach ($menus as $key => $menu) { ?>
							<?php if ($menu->parent_id == 0) { ?>
				                <tr class="treegrid-<?php echo $menu->id; ?>">
				                    <td><input type="checkbox" id="checkbox-<?php echo $menu->id; ?>"> <?php echo $menu->title; ?></td>
				                </tr>
				                <?php foreach ($menus as $key => $submenu) { ?>
				                	<?php if ($submenu->parent_id == $menu->id) { ?>
						                <tr class="treegrid-<?php echo $submenu->id; ?> treegrid-parent-<?php echo $menu->id; ?>">
						                    <td><input type="checkbox" id="checkbox-<?php echo $submenu->id; ?>"> <?php echo $submenu->title; ?></td>
						                </tr>
			        				<?php } ?>
			        			<?php } ?>
			        		<?php } ?>
			        	<?php } ?>
		            </table>
				</div>
			</section>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		var group_id, arrId = [];

        $('.tree').treegrid({
            expanderExpandedClass: 'fa fa-folder-open',
            expanderCollapsedClass: 'fa fa-folder' 
        });

		$(".tree input[type='checkbox']").click(function() {
			var checked = $(this).is(':checked');
			if (checked) {
				if ($(this).closest('tr').treegrid('getParentNode') != null) {
					$(this).closest('tr').treegrid('getParentNode').find(":checkbox").prop('checked',true);
				}
				if ($(this).closest('tr').treegrid('getChildNodes') != null) {
					$(this).closest('tr').treegrid('getChildNodes').find(":checkbox").prop('checked',true);
				}
			} else {
				if ($(this).closest('tr').treegrid('getChildNodes') != null) {
					$(this).closest('tr').treegrid('getChildNodes').find(":checkbox").prop('checked',false);
				}
			}
		});

		$("input[type='checkbox']").each(function() {
			$(this).on("click", function() {
				arrId = [];
				$("input[type='checkbox']").each(function() {
					if ($(this).is(':checked')) {
						arrId.push(this.id.substr(9));
					}
				});
				$.post("<?php echo site_url('app/privilege/action'); ?>", {group_id: group_id, arr_id: arrId});
			});
		});

		$(".list").each(function() {
			$(this).on("click", function() {
				$(".list").each(function() {
					$(this).removeClass('active');
				});
				$(this).addClass('active');
				group_id = this.id;
				$("input[type='checkbox']").each(function() {
					$(this).prop('checked', false);
				});
				$.post("<?php echo site_url('app/privilege/load'); ?>", {group_id: this.id}).done(function(data) {
					for (var i = 0; i < data.length; i++) {
						$("#checkbox-" + data[i].menu_id).prop('checked', true);
					}
		        });
			});
		});
    });
    
</script>