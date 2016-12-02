<?php
class Aboutus extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model('Data');
  }

  private function reusable(){
    $data['data'] = $this->Data->pages();
    $this->load->view('includes/header',$data);
    $this->load->view('pages');
    $this->load->view('includes/footer');
  }

  public function index(){
      $this->reusable();
  }

  public function companies(){
      $this->reusable();
  }

}
