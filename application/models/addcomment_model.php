<?php
class Addcomment_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data2){
// Вставляем в таблицу
$id=$this->uri->segment(3); // получаем номер записи новости из URL то что после третьего слэша)
$this->db->where('news_id',$id);
$this->db->insert('comments', $data2);

}
}
?>