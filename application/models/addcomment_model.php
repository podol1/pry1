<?php
class Addcomment_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data2){
// ��������� � �������
$id=$this->uri->segment(3); // �������� ����� ������ ������� �� URL �� ��� ����� �������� �����)
$this->db->where('news_id',$id);
$this->db->insert('comments', $data2);

}
}
?>