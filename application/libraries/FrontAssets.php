<?php

class FrontAssets {

	public $js_assets;
	public $css_assets;

	public function __construct() {
		$this->css_assets = [
			'bootstrap' 		=> 'assets/front/css/bootstrap.min.css',
			'vegas' 			=> 'assets/front/plugins/vegas/vegas.min.css',
			'style' 			=> 'assets/front/css/style.css',
			'font-awesome' 		=> 'assets/front/fonts/font-awesome/css/font-awesome.min.css',
			'owl-carousel' 		=> 'assets/front/plugins/owl-carousel/owl.carousel.css',
			'owl-theme' 		=> 'assets/front/plugins/owl-carousel/owl.theme.css',
			'fancybox' 			=> 'assets/front/plugins/fancybox/source/jquery.fancybox.css'
		];

		$this->js_assets = [
			'jquery' 			=> 'assets/front/js/jquery-2.1.1.min.js',
			'bootstrap' 		=> 'assets/front/js/bootstrap.min.js',
			'vegas' 			=> 'assets/front/plugins/vegas/vegas.min.js',
			'app' 				=> 'assets/front/js/app.js',
			'owl-carousel'		=> 'assets/front/plugins/owl-carousel/owl.carousel.min.js',
			'jcarousel'			=> 'assets/front/plugins/jcarousel/jquery.jcarousel.min.js',
			'fancybox'			=> 'assets/front/plugins/fancybox/source/jquery.fancybox.js'
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
