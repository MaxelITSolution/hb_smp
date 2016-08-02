<div class="page page-forms-common">
	<section class="form-panel"></section>
	<section class="datagrid-panel">
		<div class="pageheader">
			<h2><?php echo $page_title; ?> <span><?php echo $page_subtitle; ?></span></h2>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<a data-url="<?php echo site_url('app/home'); ?>" href="javascript:;" onclick="load_content(this)"><i class="fa fa-home"></i> App</a>
					</li>
					<li>
						<a href="#">Product</a>
					</li>
				</ul>
			</div>
		</div>

		<section class="tile">
			<div class="tile-widget">
				<div class="row">
					<div class="col-sm-5">
						<button class="btn btn-sm btn-default" onclick="main_routes('create', '')"><i class="fa fa-plus"></i> New Product</button>
					</div>
					<div class="col-sm-3"></div>
					<!-- Search -->
					<div class="col-sm-4 form-inline text-right">
						<div class="form-group">
							<select class="input-sm form-control input-s-sm inline v-middle option-search" id="search-option"></select>
						</div>
						<div class="form-group">
							<input type="text" class="input-sm form-control" placeholder="Search" id="search">
						</div>
					</div>
				</div>
			</div>
			<!-- /tile widget -->

			<!-- tile body -->
			<div class="tile-body p-0">
				<div class="table-responsive">
					<table class="table mb-0" id="datagrid"></table>
				</div>
			</div>
			<!-- /tile body -->

			<!-- tile footer -->
			<div class="tile-footer dvd dvd-top">
				<div class="row">
					<div class="col-sm-5 hidden-xs">
						<select class="input-sm form-control w-sm inline" id="option"></select>
					</div>
					<div class="col-sm-3 text-center">
						<small class="text-muted" id="info"></small>
					</div>
					<div class="col-sm-4 text-right">
						<ul class="pagination pagination-sm m-0" id="paging"></ul>
					</div>
				</div>
			</div>
			<!-- /tile footer -->

		</section>
	</section>
</div>
<script type="text/javascript">
	var datagrid = $("#datagrid").datagrid({
		url						: "<?php echo site_url('app/product/data'); ?>",
		primaryField			: 'id', 
		rowNumber				: true,
		itemsPerPage			: 10,
		searchInputElement 		: '#search',
		searchFieldElement 		: '#search-option',
		pagingElement 			: '#paging',
		optionPagingElement 	: '#option',
		pageInfoElement 		: '#info',
		columns					: [
        	{field: 'name_eng', title: 'Name', editable: true, sortable: true, width: 650, align: 'left', search: true},
        	{field: 'menu', title: 'Menu', sortable: false, width: 200, align: 'center', search: false, 
        		rowStyler: function(rowData, rowIndex) {
        			return menu(rowData, rowIndex);
        		}
        	}
        ]
	});

	datagrid.run();

	function menu(rowData, rowIndex) {
		var menu = '<a href="javascript:void(0);" onclick="main_routes(\'update\', ' + rowIndex + ')" class="btn-sm datagrid-link"><i class="fa fa-pencil"></i></a> ' +
				   '<a href="javascript:void(0);" onclick="main_routes(\'delete\', ' + rowIndex + ')" class="btn-sm datagrid-link"><i class="fa fa-trash-o"></i></a>';
		return menu;
	}

	function create_update_form(rowIndex) {
		$('#wp-loading').fadeIn('fast');
		$.post("<?php echo site_url('app/product/form'); ?>", {index : rowIndex}).done(function(data) {
			$('.form-panel').html(data);
			$('.datagrid-panel').fadeOut();
	    	$('#wp-loading').fadeOut();
        });
	}

	function delete_action(rowIndex) {
		swal({   
			title: "Apakah anda yakin ingin menghapus data ini?",   
			text: "Data yang telah dihapus tidak dapat dikembalikan!",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			cancelButtonText: "Batal",
			confirmButtonText: "Hapus",
			closeOnConfirm: true 
		}, function() {
			var row = datagrid.getRowData(rowIndex);
			$.post("<?php echo site_url('app/product/delete'); ?>", {id : row['id']}).done(function(data) {
				datagrid.reload();
	        });
		});
	}

	function main_routes(action, rowIndex) {
		if (action == 'create') {
			create_update_form(rowIndex);
		} else if (action == 'update') {
			create_update_form(rowIndex);
		} else {
			delete_action(rowIndex);
		}
	}
</script>