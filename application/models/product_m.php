<?php

class Product_M extends CI_Model {

	function __construct()
    {
    	parent::__construct();
		$this->load->library('lionade');
    }

    public function getJson($input)
	{
		$table 	= 'products as a';
		$select = 'a.*';
		
		$replace_field 	= [
			['old_name' => 'name', 'new_name' => 'a.name']
		];

		$param = [
			'input' 		=> $input,
			'select' 		=> $select,
			'table' 		=> $table,
			'replace_field' => $replace_field
		];

		$data = $this->lionade->lionade_query($param, function($data) {
			return $data;
		});

		return $data;
	}

}