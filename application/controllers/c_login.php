<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
			$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->library('session');
		$cek = $this->session->userdata('username');
		if (empty($cek)) {
			$this->load->model('m_login');
			$this->load->view('v_login');
		}else{
			$st = $this->session->userdata('level');
			if($st == 'admin') {
				header('location:'.base_url().'C_dashboard');
			}else {
				header('location:'.base_url().'C_dashboard');
			}
		}

	}

	function aksi_login(){
		$user=$this->input->post('username');
		$pass=$this->input->post('password');

		$ceklogin=$this->m_login->login($user,md5($pass));

		if ($ceklogin) {
			foreach ($ceklogin as $row);
			$this->session->set_userdata('username',$row->username);
			$this->session->set_userdata('nama',$row->nama);
			$this->session->set_userdata('level',$row->level);
			$this->session->set_userdata('status','login');

			if ($this->session->userdata('level')=="admin") {
				redirect('C_dashboard');
			} elseif ($this->session->userdata('level') == "user") {
				redirect('C_dashboard');
			}
		}else{
			echo "<script>alert('Username/Password anda Salah');history.go(-1);</script>";
		}
	}

}

?>
