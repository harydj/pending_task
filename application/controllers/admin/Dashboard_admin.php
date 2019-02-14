
<?php

class Dashboard_admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
    if($this->session->userdata('level')!="admin"){
      redirect('Login');
    }
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/dashboard");
	}
}

?>
