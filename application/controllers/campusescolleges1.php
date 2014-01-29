<?php if (!defined('BASEPATH')) die();
class Campusescolleges1 extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('campusescolleges1');
      $this->load->view('include/footer');
	}
   
}