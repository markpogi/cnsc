<?php if (!defined('BASEPATH')) die();
class Campusescolleges4 extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('campusescolleges4');
      $this->load->view('include/footer');
	}
   
}