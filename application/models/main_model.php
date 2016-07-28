<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

	function slider()
	{
		$query = $this->db->query('SELECT title,id, picture FROM news WHERE picture IS NOT NULL ORDER BY creation_date DESC LIMIT 1');
		return $query->result_array();
	
	}
	
	function slider2()
	{
		$query = $this->db->query('SELECT title,id, picture FROM news WHERE picture IS NOT NULL ORDER BY creation_date DESC LIMIT 3');
		return $query->result_array();
	
	}
	
	function user()
	{
		$query = $this->db->query('SELECT author, author_id FROM comments WHERE author IS NOT NULL ORDER BY creation_date DESC LIMIT 3');
		return $query->result_array();
	
	}
	
	
	
	function get_lastnews_id1()
	{
		#$this->db->limit('5');
		#$query = $this->db->get('news');
		#$query = $this->db->query('SELECT title FROM news');
		$query = $this->db->query('SELECT title,id,category_id FROM news WHERE category_id=1 ORDER BY creation_date DESC LIMIT 5');

		return $query->result_array();
		
	}
	
		function get_lastnews_id2()
	{
		#$this->db->limit('5');
		$query2 = $this->db->query('SELECT title,id,category_id FROM news WHERE category_id=2 ORDER BY creation_date DESC LIMIT 5');
		return $query2->result_array();
	}
	
			function get_lastnews_id3()
	{
		#$this->db->limit('5');
		$query3 = $this->db->query('SELECT title,id,category_id FROM news WHERE category_id=3 ORDER BY creation_date DESC LIMIT 5');
		return $query3->result_array();
	}
	
			function get_lastnews_id4()
	{
		#$this->db->limit('5');
		$query4 = $this->db->query('SELECT title,id,category_id FROM news WHERE category_id=4 ORDER BY creation_date DESC LIMIT 5');
		return $query4->result_array();
	}
		
			function get_lastnews_id5()
	{
		#$this->db->limit('5');
		$query5 = $this->db->query('SELECT title,id,category_id FROM news WHERE category_id=5 ORDER BY creation_date DESC LIMIT 5');
		return $query5->result_array();
	}
	
				function get_lastnews_id6()
	{
		#$this->db->limit('5');
		$query6 = $this->db->query('SELECT title,id,category_id FROM news WHERE category_id=6 ORDER BY creation_date DESC LIMIT 5');
		return $query6->result_array();
	}
	
}
