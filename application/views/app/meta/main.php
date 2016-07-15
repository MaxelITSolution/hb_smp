<script type="text/javascript">
  function saveForm() {
    var formData = $('#form-action').serialize();

    $('#wp-loading').fadeIn('fast');
    $("button[title='save']").html("Saving data, please wait...");
    
    $.post("<?php echo site_url('app/meta/action'); ?>", formData).done(function(data) {
      $("#status_msg").slideDown();
      setTimeout("$('#status_msg').slideUp();",3000);
      $("button[title='save']").html("Save changes");
    });
    
      
  }

</script>
<div class="page page-forms-common">
	<div class="pageheader">
		<h2><?php echo $page_title; ?> <span><?php echo $page_subtitle; ?></span></h2>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<a data-url="<?php echo site_url('app/home'); ?>" href="javascript:;" onclick="load_content(this)"><i class="fa fa-home"></i> App</a>
				</li>
				<li>
					<a href="#">Meta</a>
				</li>
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
          <form class="form-horizontal" id="form-action" role="form" method="post">

            <div class="form-group">
              <div id="status_msg" class="alert alert-success" style="display:none">Data telah tersimpan</div>
            </div>
            
            <hr class="line-dashed line-full">

            <?php foreach($lang as $key => $value) { ?>
            <div class="form-group">
              <label class="col-sm-2"><b><?php echo $value; ?></b></label>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Title</label>
              <div class="col-sm-9">
                <input type="text" name="web_title_<?php echo $key; ?>" class="form-control" value="<?php echo $web_title['value_'.$key]; ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Description</label>
              <div class="col-sm-9">
                <textarea name="web_meta_<?php echo $key; ?>" class="form-control"><?php echo $web_meta['value_'.$key]; ?></textarea>
              </div>
            </div>

            <hr class="line-dashed line-full">

            <?php } ?>
            
            <div class="form-group">
              <div class="col-sm-4 col-sm-offset-2">
                <button type="button" class="btn btn-success action" title="save" onclick="saveForm();">Save changes</button>
              </div>
            </div>

          </form>

      </div>
      <!-- /tile body -->

  </section>  
</div>
