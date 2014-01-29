<?php if (!defined('BASEPATH')) die();
class Campusescolleges2 extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('campusescolleges2');
      $this->load->view('include/footer');
	}
   
}