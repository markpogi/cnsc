<?php if (!defined('BASEPATH')) die();
class Facilities extends CI_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('facilities');
      $this->load->view('include/footer');
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
