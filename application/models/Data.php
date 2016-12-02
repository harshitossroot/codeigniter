<?php
class Data extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function pages()
  {
    $query = $this->db->query('SELECT `name`,`slug` FROM `pages`');
    $query_result = $query->result_array();
    return $query_result;
  }

}
