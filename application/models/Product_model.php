<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model { 



	public function getAllProducts(){

		$this->db->select('*');
		$this->db->from('products');

		$query = $this->db->get();
		return $query->result();

	} 

	public function getProduct($id){

		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('id',$id);

		$query = $this->db->get();
		
		return $query->row_array();
  
		


	}




	// public function getAllArticles($limit = null)
	// {
	// 	$this->db->select('a.*, b.category_name');
	// 	$this->db->from('articles a');
	// 	$this->db->order_by('a.id', 'DESC');
	// 	$this->db->join('categories b', 'a.category_id = b.id');
	// 	if ($limit != null) {
	// 		$this->db->limit($limit);
	// 	}
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

}
