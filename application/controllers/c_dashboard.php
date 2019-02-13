
<?php

class C_dashboard extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
    if($this->session->userdata('level')!="admin"){
      redirect('c_login');
    }
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/v_dashboard");
	}
}

?>
