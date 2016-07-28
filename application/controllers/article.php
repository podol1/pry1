<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('article_model');
	}
	
	
	public function index()
	{
			
	}
	
	public function view($id)
	{
		$data['article'] = $this->article_model->view($id);
		$data['comment'] = $this->article_model->comment();
		$data['views'] = $this->article_model->currentviews();
		
		$this->load->view('article_view',$data);
		
		//комментарии добавление
		//Including validation library
		#$this->load->library('form_validation');
		#$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		//Validating Comment body field
		#$this->form_validation->set_rules('commenttext', 'commenttext', 'required|min_length[2]|max_length[1500]');

		#$id=$this->uri->segment(3);
		#$now = date("Y-m-d H:i:s");
		#$data2 = array( 
		#'body' => $this->input->post('commenttext'),
		#'creation_date' => $now    
		#);
		#//Loading View
		#$this->article_model->addcomment($data);
		#$data['addcomment'] = $this->article_model->addcomment($data);
		#$this->load->view('article_view',$data);
	}
	
		
	function commentadd()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('body', 'body', 'required|min_length[2]|max_length[1500]');
		#$this->db->insert('comments', $_POST);
		#$id=$this->uri->segment(3);
		$now = date("Y-m-d H:i:s");
		$data2 = array(
		'body' => $this->input->post('body'),
		'creation_date' => $now,
		'news_id' => $this->input->post('news_id')
		);
		$data2 = $this->article_model->commentadd($data2);
		redirect('article/view/'.$_POST['news_id']);
	}
	
	function plus()
	{
		$id=$this->uri->segment(3);
		$query = $this->db->get_where('comments', array('id' => $id));
		
		foreach ($query->result_array() as $row)
		$newsid = $row['news_id'];
		$this->article_model->plus();
		redirect('article/view/'.$newsid);
		#$this->load->view("plussuccess_view");
		#echo anchor(article/view/, 'Щёлк меня!');
		#redirect('article/view/'.$_POST['news_id']);
		#redirect('article/view/'.$id);
		#redirect('', 'refresh');
	}
	
	function minus()
	{
		$id=$this->uri->segment(3);
		$query = $this->db->get_where('comments', array('id' => $id));
		
		foreach ($query->result_array() as $row)
		$newsid = $row['news_id'];
		$this->article_model->minus();
		redirect('article/view/'.$newsid);
		#$this->load->view("plussuccess_view");
		#echo anchor(article/view/, 'Щёлк меня!');
		#redirect('article/view/'.$_POST['news_id']);
		#redirect('article/view/'.$id);
		#redirect('', 'refresh');
	}
		
}