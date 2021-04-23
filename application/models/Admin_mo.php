<?php
class Admin_mo extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function getwhere($table,$row)
	{
		$query = $this->db->get_where($table, $row);
		return $query->result();
	}
	
	public function get($table)
	{
		$query = $this->db->get($table);
		return $query->result();
	}
	
	public function set($table,$row)
	{
		$this->db->insert($table,$row);
		return $this->db->insert_id();
	}
	
	public function update($table,$row,$where)
	{
		foreach($where as $key => $value)
		{
			$this->db->where($key, $value);
		}
		$this->db->update($table, $row);
	}
	
	public function del($table,$row)
	{
		$this->db->delete($table, $row);
	}
}
?>