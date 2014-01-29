<?php if (!defined('BASEPATH')) die();
class Campusescolleges3 extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('campusescolleges3');
      $this->load->view('include/footer');
	}
   
}