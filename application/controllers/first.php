<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
	
	$this->load->model('articles_model');
	$data['articles'] = $this->articles_model->get_articles();
	$this->load->view('articles_view',$data);
	}
	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */