<div class="pageheader">
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li><a data-url="<?php echo site_url('app/home'); ?>" href="javascript:;" onclick="load_content(this)">App</a></li>
			<li><a data-url="<?php echo site_url('app/group'); ?>" href="javascript:;" onclick="load_content(this)">Group</a></li>
			<li><a href="javascript:;">Form</a></li>
		</ul>
	</div>
</div>

<section class="tile">
    <!-- tile header -->
    <div class="tile-header dvd dvd-btm">
        <h1 class="custom-font"><?php echo $page_subtitle; ?></h1>
    </div>
    <!-- /tile header -->

    <!-- tile body -->
    <div class="tile-body">

        <form class="form-horizontal" id="form-action" role="form">

        	<div class="form-group hidden">
				<div class="col-sm-12">
					<input type="text" name="id" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Group Name</label>
				<div class="col-sm-9">
					<input type="text" name="group_name" class="form-control">
					<div class="validation-message" data-field="name"></div>
				</div>
			</div>

			<hr class="line-dashed line-full">

			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-2">
					<button type="button" class="btn btn-default action" title="cancel" onclick="form_routes('cancel')">Cancel</button>
					<button type="button" class="btn btn-success action" title="save" onclick="form_routes('save')">Save changes</button>
				</div>
			</div>

        </form>

    </div>
    <!-- /tile body -->

</section>

<script type="text/javascript">
	var onLoad = (function() {
		var index = "<?php echo $index; ?>";
		if (index != '') {
			var row = datagrid.getRowData(index);
			$('#form-action').formLoad(row);
		}

        $("#form-action").keypress(function(event) {
            if (event.which == 13) {
                form_routes('save');
            }
        });
		$('.form-panel').show();
	})();

	function validate(formData) {
		var returnData;
		$('#form-action').disable([".action"]);
		$("button[title='save']").html("Validating data, please wait...");
		$.ajax({
	        url: "<?php echo site_url('app/group/validate'); ?>", async: false, type: 'POST', data: formData,
	        success: function(data, textStatus, jqXHR) {
				returnData = data;
	        }
	    });
        if (returnData != 'success') {
			$('#form-action').enable([".action"]);
			$("button[title='save']").html("Save changes");
            $('.validation-message').html('');
            $('.validation-message').each(function() {
                for (var key in returnData) {
                    if ($(this).attr('data-field') == key) {
                        $(this).html(returnData[key]);
                    }
                }
            });
        } else {
		    return 'success';	
        }
	}

	function save(formData) {
		$('#wp-loading').fadeIn('fast');
		$("button[title='save']").html("Saving data, please wait...");
		$.post("<?php echo site_url('app/group/action'); ?>", formData).done(function(data) {
        	$('.datagrid-panel').fadeIn();
			$('.form-panel').fadeOut();
			datagrid.reload();
	    	$('#wp-loading').fadeOut();
        });
	}

	function cancel() {
		$('#wp-loading').fadeIn('fast');
		$('.datagrid-panel').fadeIn();
		$('.form-panel').fadeOut();
    	$('#wp-loading').fadeOut();
	}

	function form_routes(action) {
		if (action == 'save') {
			var formData = $('#form-action').serialize();
			if (validate(formData) == 'success') {
				swal({   
					title: "Mohon periksa kembali data-data anda",   
					text: "Pilih SIMPAN untuk melanjutkan dan BATAL untuk batal",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					cancelButtonText: "Batal",
					confirmButtonText: "Simpan",
					closeOnConfirm: true 
				}, function() {
					save(formData);
				}); 
			}
		} else {
			cancel();
		}
	}
</script>