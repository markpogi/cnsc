<?php if (!defined('BASEPATH')) die();
class Columns extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('columns');
      $this->load->view('include/footer');
	}
   
}