<div class="pageheader">
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li><a data-url="<?php echo site_url('app/home'); ?>" href="javascript:;" onclick="load_content(this)">App</a></li>
			<li><a data-url="<?php echo site_url('app/product'); ?>" href="javascript:;" onclick="load_content(this)">Product</a></li>
			<li><a href="javascript:;">Form</a></li>
		</ul>
	</div>
</div>

<form class="form-horizontal" id="form-action" role="form">
	<div class="row">
		<div class="col-md-8">
			<section class="tile">
			    <!-- tile header -->
			    <div class="tile-header dvd dvd-btm">
			        <h1 class="custom-font"><?php echo $page_subtitle; ?></h1>
			    </div>
			    <!-- /tile header -->

			    <!-- tile body -->
			    <div class="tile-body">

		        	<div class="form-group hidden">
						<div class="col-sm-12">
							<input type="text" name="id" class="form-control">
						</div>
					</div>

					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#eng">Eng</a></li>
						<li><a data-toggle="tab" href="#ina">Ina</a></li>
						<li><a data-toggle="tab" href="#chn">Chn</a></li>
						<li><a data-toggle="tab" href="#kor">Kor</a></li>
						<li><a data-toggle="tab" href="#rus">Rus</a></li>
					</ul>

					<div class="tab-content">
						<div id="eng" class="tab-pane fade in active">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" name="name_eng" class="form-control" placeholder="Product Name...">
									<div class="validation-message" data-field="name_eng"></div>
								</div>
							</div>

							<hr class="line-dashed line-full">

							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="description_eng" class="form-control" rows="10" placeholder="Description..."></textarea>
									<div class="validation-message" data-field="description_eng"></div>
								</div>
							</div>
						</div>
						<div id="ina" class="tab-pane fade">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" name="name_ina" class="form-control" placeholder="Product Name...">
									<div class="validation-message" data-field="name_ina"></div>
								</div>
							</div>

							<hr class="line-dashed line-full">

							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="description_ina" class="form-control" rows="10" placeholder="Description..."></textarea>
									<div class="validation-message" data-field="description_ina"></div>
								</div>
							</div>
						</div>
						<div id="chn" class="tab-pane fade">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" name="name_chn" class="form-control" placeholder="Product Name...">
									<div class="validation-message" data-field="name_chn"></div>
								</div>
							</div>

							<hr class="line-dashed line-full">

							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="description_chn" class="form-control" rows="10" placeholder="Description..."></textarea>
									<div class="validation-message" data-field="description_chn"></div>
								</div>
							</div>
						</div>
						<div id="kor" class="tab-pane fade">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" name="name_kor" class="form-control" placeholder="Product Name...">
									<div class="validation-message" data-field="name_kor"></div>
								</div>
							</div>

							<hr class="line-dashed line-full">

							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="description_kor" class="form-control" rows="10" placeholder="Description..."></textarea>
									<div class="validation-message" data-field="description_kor"></div>
								</div>
							</div>
						</div>
						<div id="rus" class="tab-pane fade">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" name="name_rus" class="form-control" placeholder="Product Name...">
									<div class="validation-message" data-field="name_rus"></div>
								</div>
							</div>

							<hr class="line-dashed line-full">

							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="description_rus" class="form-control" rows="10" placeholder="Description..."></textarea>
									<div class="validation-message" data-field="description_rus"></div>
								</div>
							</div>
						</div>
					</div>

					<hr class="line-dashed line-full">

					<div class="form-group">
						<div class="col-sm-12 text-right">
							<button type="button" class="btn btn-default action" title="cancel" onclick="form_routes('cancel')">Cancel</button>
							<button type="button" class="btn btn-success action" title="save" onclick="form_routes('save')">Save changes</button>
						</div>
					</div>

			    </div>
			    <!-- /tile body -->

			</section>
		</div>
		<div class="col-md-4">
			<section class="tile">
			    <!-- tile header -->
			    <div class="tile-header dvd dvd-btm">
			        <h1 class="custom-font">Gambar</h1>
			    </div>
			    <!-- /tile header -->

			    <!-- tile body -->
			    <div class="tile-body">
			    	<div id="wp-uploader">
						<button type="button" class="btn btn-sm btn-default">
							<i class="fa fa-plus"></i>
							<span>Add File</span>
						</button>
					</div>
					<div id="wp-preview"></div>
					<div class="validation-message" data-field="image_name"></div>
			    </div>
			</section>
		</div>
	</div>
</form>

<div class="image-upload-progressbar text-center">
	<div class="col-md-6 col-sm-offset-3">
		<div class="progress progress-sm m-t-sm">
			<div class="progress-bar bg-primary" data-toggle="tooltip" data-original-title="0%" style="width: 0%"></div>
		</div>
		Saving data, please wait... <span>10%</span>
	</div>
</div>

<script type="text/javascript">
	var onLoad = (function() {
		var fileUpload = $("#wp-uploader").uploader({
							filePreview : '#wp-preview',
							arrFileType : ["image/png", "image/jpeg"]
						});

		var index = "<?php echo $index; ?>";
		if (index != '') {
			var row = datagrid.getRowData(index);
			fileUpload.setData("<?php echo site_url('uploads'); ?>" + "/", row.image_name);
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
	        url: "<?php echo site_url('app/product/validate'); ?>", async: false, type: 'POST', data: formData,
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

	function save(formData, images) {
		$('#wp-loading').fadeIn('fast');
		$("button[title='save']").html("Saving data, please wait...");
		var formData = formData + "&image_name=" + images;

		$.post("<?php echo site_url('app/product/action'); ?>", formData).done(function(data) {
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

	function upload_images() {
		$('.image-upload-progressbar').fadeIn();
		var data = new FormData();

		$("#wp-uploader").find("input[type=file]").each(function() {
			data.append("images", this.files[0]);
		});

	    $.ajax({
			url: "<?php echo site_url('app/product/upload'); ?>",
			type: "POST",
			data: data,
			cache: false,
			dataType: "json",
			processData: false,
			contentType: false,
			complete: function(data) {
				$('.image-upload-progressbar').fadeOut();
				var data = JSON.parse(data.responseText);
				if (data['status'] == 'success') {
					var formData = $('#form-action').serialize();
					save(formData, data['images']);
				} else {
					alert('Error Uploading Images');
				}
			},
			progress: function(evt) {
				if (evt.lengthComputable) {
					$(".progress-bar").css("width",  parseInt( (evt.loaded / evt.total * 100), 10) + "%");
					$(".image-upload-progressbar").find('span').html(parseInt( (evt.loaded / evt.total * 100), 10) + "%");
				}
			}
		});
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
					upload_images();
				}); 
			}
		} else {
			cancel();
		}
	}
</script>