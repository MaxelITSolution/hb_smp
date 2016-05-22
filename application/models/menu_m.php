<?php

class Menu_M extends CI_Model {

	function __construct()
    {
    	parent::__construct();
    }

    public function getMenu($group_id)
    {
    	$this->db->select('*');
		$this->db->from('privileges as p');
		$this->db->join('menus as m', 'm.id = p.menu_id');
		$this->db->where('p.group_id', $group_id);
		$this->db->order_by('m.id asc');
		return $this->db->get()->result();
    }

}