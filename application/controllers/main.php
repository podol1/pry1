<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
	
	}
	
	
	public function index()
	{
	
	$this->load->model('main_model');
	$data['news1'] = $this->main_model->get_lastnews_id1();
	$data['news2'] = $this->main_model->get_lastnews_id2();
	$data['news3'] = $this->main_model->get_lastnews_id3();
	$data['news4'] = $this->main_model->get_lastnews_id4();
	$data['news5'] = $this->main_model->get_lastnews_id5();
	$data['news6'] = $this->main_model->get_lastnews_id6();
	$data['slider'] = $this->main_model->slider();
	$data['slider2'] = $this->main_model->slider2();
	$data['user'] = $this->main_model->user();
	$this->load->view('main_view',$data);
	}
	
	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */