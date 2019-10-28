<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Crud extends CI_Model {

	public function getData($table)
	{
		return $this->db->get($table);
	}

	public function getDataWhere($table,$query)
	{
		$this->db->where($query);
		return $this->db->get($table);
	}


}