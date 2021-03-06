<?php 

class Login extends CI_Model
{

	function __construct(){
		parent::__construct();		
	}

	function create(){
		$this->db->insert("t_produk",array("nama_produk"=>""));
		return $this->db->insert_id();
	}


	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("t_produk");
		return $query->result_array();
	}

	function read_where($where){
		$query = $this->db->get_where('t_produk',$where);

		return $query->result_array();
	}

	function update($id,$value,$modul){
		$this->db->where(array("id"=>$id));   
		$this->db->update("t_produk",array($modul=>$value));
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("t_produk");
	}

	function get_data($table,$where){
		return $query = $this->db->get_where($table,$where);
		
	}
}