<?php

class AppAssets {

	public $js_assets;
	public $css_assets;

	public function __construct() {
		$this->css_assets = [
			'bootstrap' 		=> 'assets/app/css/vendor/bootstrap.min.css',
			'animate' 			=> 'assets/app/css/vendor/animate.css',
			'font-awesome' 		=> 'assets/app/css/vendor/font-awesome.min.css',
			'animsition' 		=> 'assets/app/js/vendor/animsition/css/animsition.min.css',
			'main'				=> 'assets/app/css/main.css',
			'lionade-uploader'	=> 'assets/app/js/vendor/lionade/file-manager/lionade-uploader.css',
			'custom'	 		=> 'assets/app/css/custom.css',
			'sweetalert'		=> 'assets/app/js/vendor/sweetalert/dist/sweetalert.css',
			'datepicker'		=> 'assets/app/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css',
			'treegrid'			=> 'assets/app/js/vendor/jquery-treegrid/jquery.treegrid.css',
			'redactor'			=> 'assets/app/js/vendor/redactor/redactor.css',
			'semeru-uploader'	=> 'assets/app/js/vendor/semeru/css/uploader.css'
		];

		$this->js_assets = [
			'jquery' 			=> 'assets/app/js/jquery-2.1.1.min.js',
			'bootstrap' 		=> 'assets/app/js/vendor/bootstrap/bootstrap.min.js',
			'jrespond' 			=> 'assets/app/js/vendor/jRespond/jRespond.min.js',
			'jquery-sparkline' 	=> 'assets/app/js/vendor/sparkline/jquery.sparkline.min.js',
			'jquery-slimscroll' => 'assets/app/js/vendor/slimscroll/jquery.slimscroll.min.js',
			'jquery-animsition' => 'assets/app/js/vendor/animsition/js/jquery.animsition.min.js',
			'screenfull' 		=> 'assets/app/js/vendor/screenfull/screenfull.min.js',
			'main' 				=> 'assets/app/js/main.js',
			'semeru-detail'		=> 'assets/app/js/vendor/semeru/detail.js',
			'semeru-validate'	=> 'assets/app/js/vendor/semeru/validate.js',
			'semeru-disabler'	=> 'assets/app/js/vendor/semeru/disabler.js',
			'semeru-enabler'	=> 'assets/app/js/vendor/semeru/enabler.js',
			'semeru-form'		=> 'assets/app/js/vendor/semeru/form.js',
			'semeru-uploader'	=> 'assets/app/js/vendor/semeru/uploader.js',
			'datagrid'			=> 'assets/app/js/vendor/lionade/datagrid/datagrid.min.js',
			'lionade-uploader'	=> 'assets/app/js/vendor/lionade/file-manager/lionade-uploader.js',
			'sweetalert'		=> 'assets/app/js/vendor/sweetalert/dist/sweetalert.min.js',
			'momentjs'			=> 'assets/app/js/vendor/daterangepicker/moment.min.js',
			'datepicker'		=> 'assets/app/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js',
			'treegrid'			=> 'assets/app/js/vendor/jquery-treegrid/jquery.treegrid.bootstrap3.js',
			'treegrid'			=> 'assets/app/js/vendor/jquery-treegrid/jquery.treegrid.js',
			'redactor'			=> 'assets/app/js/vendor/redactor/redactor.min.js'
		];
	}

	public function load($type, $assets)
	{
		$data = [];
		if ($type == "css") {
			foreach ($assets as $key => $value) {
				$data[] = $this->css_assets[$value];	
			}
		} else {
			foreach ($assets as $key => $value) {
				$data[] = $this->js_assets[$value];	
			}
		}
		return $data;
	}
}
