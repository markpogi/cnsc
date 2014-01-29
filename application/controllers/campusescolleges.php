<?php if (!defined('BASEPATH')) die();
class Campusescolleges extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('campusescolleges');
      $this->load->view('include/footer');
	}
   
}