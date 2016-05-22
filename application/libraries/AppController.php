<?php

class AppController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('AppAssets');
        $this->load->model('Menu_M');

        $assets = new AppAssets;
		$this->data['css_assets'] 	= $assets->load('css', ['bootstrap', 'animate', 'font-awesome', 'animsition', 'main', 'custom', 'sweetalert', 'datepicker', 'treegrid', 'redactor', 'semeru-uploader']);
		$this->data['js_assets'] 	= $assets->load('js', ['jquery', 'bootstrap', 'jrespond', 'jquery-sparkline', 'jquery-slimscroll', 'jquery-animsition', 'screenfull', 'main', 'datagrid', 'semeru-form', 'semeru-disabler', 'semeru-enabler', 'semeru-validate', 'sweetalert', 'momentjs', 'datepicker', 'treegrid', 'redactor', 'semeru-uploader']);
		$this->data['list_menu'] 	= $this->Menu_M->getMenu(1);
		$this->data['active_user'] 	= $this->session->userdata('name');
	}

}
