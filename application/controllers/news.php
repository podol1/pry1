<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('pagination');
	
	}
	
	
	public function index()
	{
	#получение новостей работает
	$this->load->model('news_model');
	$data['news'] = $this->news_model->get_news();
	$this->load->view('news_view',$data);
		
	}

		public function category($id)
	{
	#вывод новостей - работает
	$this->load->model('news_model');
	$data2['categorynews'] = $this->news_model->category($id);
	$this->load->view('category_view',$data2);
	
	}

}
