<div class="pageheader">
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li><a data-url="<?php echo site_url('app/home'); ?>" href="javascript:;" onclick="load_content(this)">App</a></li>
			<li><a data-url="<?php echo site_url('app/user'); ?>" href="javascript:;" onclick="load_content(this)">User</a></li>
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
				<label class="col-sm-2 control-label">Full Name</label>
				<div class="col-sm-9">
					<input type="text" name="name" class="form-control">
					<div class="validation-message" data-field="name"></div>
				</div>
			</div>

			<hr class="line-dashed line-full">

			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-9">
					<input type="text" name="email" class="form-control">
					<div class="validation-message" data-field="email"></div>
				</div>
			</div>

			<hr class="line-dashed line-full">

			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-9">
					<input type="password" name="password" class="form-control">
					<div class="validation-message" data-field="password"></div>
				</div>
			</div>

			<hr class="line-dashed line-full">

			<div class="form-group">
				<label class="col-sm-2 control-label">Phone Number</label>
				<div class="col-sm-9">
					<input type="text" name="phone_number" class="form-control">
					<div class="validation-message" data-field="phone_number"></div>
				</div>
			</div>

			<hr class="line-dashed line-full">

			<div class="form-group">
				<label class="col-lg-2 control-label">Gender</label>
				<div class="col-lg-9">
					<select name="gender" class="form-control" style="width: 100%;">
						<option value="male">Laki-Laki</option>
						<option value="female">Perempuan</option>
					</select>
					<div class="validation-message" data-field="gender"></div>
				</div>
			</div>

			<hr class="line-dashed line-full">

			<div class="form-group">
				<label class="col-lg-2 control-label">Group</label>
				<div class="col-lg-9">
					<select name="group_id" class="form-control" style="width: 100%;">
						<?php foreach ($groups as $key => $group) { ?>
							<option value="<?php echo $group->id; ?>"><?php echo $group->group_name; ?></option>
						<?php } ?>
					</select>
					<div class="validation-message" data-field="group_id"></div>
				</div>
			</div>

			<hr class="line-dashed line-full">

			<div class="form-group">
				<label class="col-sm-2 control-label">Birthday *</label>
				<div class="col-sm-9">
					<input type="text" name="birthday" class="form-control datepicker">
					<div class="validation-message" data-field="birthday"></div>
				</div>
			</div>

			<hr class="line-dashed line-full">

			<div class="form-group">
				<label class="col-sm-2 control-label">Address *</label>
				<div class="col-sm-9">
					<textarea name="address" class="form-control"></textarea>
					<div class="validation-message" data-field="address"></div>
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
		$('.datepicker').datetimepicker({ format : 'DD/MM/YYYY' });
		$('.form-panel').show();
	})();

	function validate(formData) {
		var returnData;
		$('#form-action').disable([".action"]);
		$("button[title='save']").html("Validating data, please wait...");
		$.ajax({
	        url: "<?php echo site_url('app/user/validate'); ?>", async: false, type: 'POST', data: formData,
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
		$.post("<?php echo site_url('app/user/action'); ?>", formData).done(function(data) {
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