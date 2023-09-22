<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article_model extends CI_Model {

	public function getAllArticles($limit = null)
	{
		$this->db->select('a.*, b.category_name');
		$this->db->from('articles a');
		$this->db->order_by('a.id', 'DESC');
		$this->db->join('categories b', 'a.category_id = b.id');
		if ($limit != null) {
			$this->db->limit($limit);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function getArticle($seo)
	{
		$this->db->select('a.*, b.category_name');
		$this->db->from('articles a');
		$this->db->where('a.seo', $seo);
		$this->db->order_by('a.id', 'DESC');
		$this->db->join('categories b', 'a.category_id = b.id');
		$query = $this->db->get();
		return $query->result();

	}

}
