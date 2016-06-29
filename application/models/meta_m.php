<?php

class User_M extends CI_Model {

	function __construct()
    {
    	parent::__construct();
		$this->load->library('lionade');
    }

    public function signin($email, $password)
    {
    	return $this->db->where('email', $email)
		    			->where('password', $password)
		    			->from('users')->get()->result();
    }

    public function getJson($input) {
		$table 	= 'users as a';
        $select = 'a.*, g.group_name';
		
		$replace_field  = [
            ['old_name' => 'name', 'new_name' => 'a.name']
        ];

		$param = [
			'input' 		=> $input,
			'select' 		=> $select,
			'table' 		=> $table,
			'replace_field' => $replace_field
		];

		$data = $this->lionade->lionade_query($param, function($data) {
			return $data->join('groups as g', 'g.id = a.group_id', 'left');
		});

		foreach ($data["rows"] as $key => $row) {
            $data["rows"][$key]['birthday'] = date('d/m/Y', strtotime($row['birthday']));
        }

		return $data;
	}

}