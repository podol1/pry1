<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

	function get_news()
	{
		#$this->db->limit('5');
		#$query = $this->db->get('news');
		#$query = $this->db->query('SELECT title FROM news');
		$query = $this->db->query('SELECT title, id, category_id FROM news ORDER BY creation_date DESC ');

		return $query->result_array();
		
	}
	
	function category($id)
	{
	$this->db->where('category_id',$id);
	#$query = $this->db->query('SELECT * FROM news LEFT JOIN category USING(id)');
	$this->db->order_by("creation_date", "desc");
	$this->db->from('news');
	$query = $this->db->get();
	return $query->result_array();
	
	# $this->db->select('t1.field, t2.field2')
    #     ->from('table1 AS t1, table2 AS t2')
    #     ->where('t1.id = t2.table1_id')
    #    ->where('t1.user_id', $user_id);
	
	}
	
}
