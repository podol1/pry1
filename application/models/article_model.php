<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class article_model extends CI_Model {
	
	function view($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('news');
		return $query->result_array();
		#$this->db->where('id', $id);
		#$query = $this->db->get('news');
		#$query = $this->db->query('SELECT title FROM news');
		#$query = $this->db->query('SELECT title, id, category_id, body FROM news');
		#return $query->result_array();
		
	}
	
	public function currentviews()
	{
		$id=$this->uri->segment(3); // получаем номер записи новости из URL то что после третьего слэша
		$query = $this->db->get_where('news', array('id' => $id));
		$nRandomMin = 1; // в диапазоне от 1
		$nRandomMax = 5; // до 5
		foreach ($query->result_array() as $row)
		$beforeviews = $row['views'];
		$currentviews = mt_rand($nRandomMin, $nRandomMax);
		$views = $currentviews+$beforeviews;
		$this->db->set('views',$views);
		$this->db->set('current_views',$currentviews);
		$this->db->where('id', $id);
		$this->db->update('news');
		
		
	}
	function comment()
	{
		$id=$this->uri->segment(3); // получаем номер записи новости из URL то что после третьего слэша)
		$this->db->where('news_id',$id);
		$this->db->order_by("rating", "desc"); 
		$query = $this->db->get('comments');
		return $query->result_array();
	
		
	}
	
	
	function commentadd($data2)
	{
	
		$this->db->insert('comments', $data2); 
		#$now = date("Y-m-d H:i:s");
		#$id=$this->uri->segment(3); // получаем номер записи новости из URL то что после третьего слэша)
		#$this->db->set('creation_date',$now);
		#$this->db->set('news_id',$id);
		#$this->db->insert('comments', $data2);
		#$this->db->where('news_id',$id);
		// Вставляем в таблицу
		#$id=$this->uri->segment(3); // получаем номер записи новости из URL то что после третьего слэша)
		#$this->db->set('news_id',$id);
	#$this->db->insert('comments', $data2);


	}
	
		function plus()
	{
		
		$id=$this->uri->segment(3);
		$query = $this->db->get_where('comments', array('id' => $id));
		foreach ($query->result_array() as $row)
		$beforerating = $row['rating'];
		$plusedrating = $beforerating+1;
		$this->db->set('rating',$plusedrating);
		$this->db->where('id', $id);
		$this->db->update('comments');


	}
	
	function minus()
	{
		
		$id=$this->uri->segment(3);
		$query = $this->db->get_where('comments', array('id' => $id));
		foreach ($query->result_array() as $row)
		$beforerating = $row['rating'];
		$plusedrating = $beforerating-1;
		$this->db->set('rating',$plusedrating);
		$this->db->where('id', $id);
		$this->db->update('comments');


	}
	
}
