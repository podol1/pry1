<?php

class Addcomment extends CI_Controller {

	function __construct() {
	parent::__construct();
	$this->load->model('article_model');
			}
function index() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Comment body field
$this->form_validation->set_rules('body', 'body', 'required|min_length[2]|max_length[1500]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('article_view');
} else {
//Setting values for tabel columns
$data = array(
'body' => $this->input->post('body')
);
//Transfering data to Model
$this->article_model->form_insert($data);
$data['message'] = 'Комментарий успешно добавлен!';
$data['news_id'] = $this->article_model->addcomment();
//Loading View
$this->load->view('article_view', $data);
		}
}



}

?>