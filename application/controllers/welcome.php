<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('welcome_message');
	}

	function teste()
	{

		$this->load->view('teste');
	}


}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */