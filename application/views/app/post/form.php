<div class="pageheader">
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li><a data-url="<?php echo site_url('app/home'); ?>" href="javascript:;" onclick="load_content(this)">App</a></li>
			<li><a data-url="<?php echo site_url('app/post'); ?>" href="javascript:;" onclick="load_content(this)">Post</a></li>
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
						<script type="text/javascript" src='<?php echo base_url(); ?>assets/tinymce/tinymce.min.js'></script>
						<script>tinymce.init({selector: 'textarea'});</script>
						<div id="eng" class="tab-pane fade in active">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" name="title_eng" class="form-control" placeholder="Title...">
									<div class="validation-message" data-field="title_eng"></div>
								</div>
							</div>

							<hr class="line-dashed line-full">

							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="content_eng" class="form-control" class="redactor" style="height: 500px;" placeholder="Content..."></textarea>
									<div class="validation-message" data-field="content_eng"></div>
								</div>
							</div>
						</div>
						<div id="ina" class="tab-pane fade">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" name="title_ina" class="form-control" placeholder="Title...">
									<div class="validation-message" data-field="title_ina"></div>
								</div>
							</div>

							<hr class="line-dashed line-full">

							<div class="form-group">
								<div class="col-sm-12">
									<textarea id="ta_ina" name="content_ina" class="form-control" class="redactor" style="height: 500px;" placeholder="Content..."></textarea>
									<div class="validation-message" data-field="content_ina"></div>
								</div>
							</div>
						</div>
						<div id="chn" class="tab-pane fade">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" name="title_chn" class="form-control" placeholder="Title...">
									<div class="validation-message" data-field="title_chn"></div>
								</div>
							</div>

							<hr class="line-dashed line-full">

							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="content_chn" class="form-control" class="redactor" style="height: 500px;" placeholder="Content..."></textarea>
									<div class="validation-message" data-field="content_chn"></div>
								</div>
							</div>
						</div>
						<div id="kor" class="tab-pane fade">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" name="title_kor" class="form-control" placeholder="Title...">
									<div class="validation-message" data-field="title_kor"></div>
								</div>
							</div>

							<hr class="line-dashed line-full">

							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="content_kor" class="form-control" class="redactor" style="height: 500px;" placeholder="Content..."></textarea>
									<div class="validation-message" data-field="content_kor"></div>
								</div>
							</div>
						</div>
						<div id="rus" class="tab-pane fade">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" name="title_rus" class="form-control" placeholder="Title...">
									<div class="validation-message" data-field="title_rus"></div>
								</div>
							</div>

							<hr class="line-dashed line-full">

							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="content_rus" class="form-control" class="redactor" style="height: 500px;" placeholder="Content..."></textarea>
									<div class="validation-message" data-field="content_rus"></div>
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
			<div class="col-md-12 no-padding">
				<section class="tile">
				    <!-- tile header -->
				    <div class="tile-header dvd dvd-btm">
				        <h1 class="custom-font">Kategori</h1>
				    </div>
				    <!-- /tile header -->

				    <div class="tile-body form-horizontal">
					    <!-- tile body -->
						<div class="form-group">
							<div class="col-sm-12">
								<select name="category_id" class="form-control" style="width: 100%;">
									<?php foreach ($categories as $key => $category) { ?>
										<option value="<?php echo $category->id; ?>"><?php echo $category->category_name; ?></option>
									<?php } ?>
								</select>
								<div class="validation-message" data-field="category_id"></div>
							</div>
						</div>
					</div>
				</section>
			</div>

			<div class="col-md-12 no-padding">
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

		$('.redactor').each(function() {
			$(this).redactor({
				imageUpload: "<?php echo site_url('app/post/redactorupload'); ?>",
				imageDeleteCallback: function(url) {
					var arrUrl = url.split('/');
					var filename = arrUrl[arrUrl.length-1];

					$.post("<?php echo site_url('app/post/redactordelete'); ?>", {filename : filename}).done(function(data) {
						console.log(data);
					});
				}
			});
		});

        /*$("#form-action").keypress(function(event) {
            if (event.which == 13) {
                form_routes('save');
            }
        });*/
		$('.form-panel').show();
	})();

	function validate(formData) {
		var returnData;
		$('#form-action').disable([".action"]);
		$("button[title='save']").html("Validating data, please wait...");
		$.ajax({
	        url: "<?php echo site_url('app/post/validate'); ?>", async: false, type: 'POST', data: formData,
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

		$.post("<?php echo site_url('app/post/action'); ?>", formData).done(function(data) {
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
			url: "<?php echo site_url('app/post/upload'); ?>",
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
			} else {
				alert('asd');
			}
		} else {
			cancel();
		}
	}
</script>
