<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
			$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->library('session');
		$cek = $this->session->userdata('username');
		if (empty($cek)) {
			$this->load->model('Login_model');
			$this->load->view('login');
		}else{
			$st = $this->session->userdata('level');
			if($st == 'admin') {
				header('location:'.base_url().'Dashboard');
			}else {
				header('location:'.base_url().'Dashboard');
			}
		}

	}

	function aksi_login(){
		$user=$this->input->post('username');
		$pass=$this->input->post('password');

		$ceklogin=$this->Login_model->login($user,md5($pass));

		if ($ceklogin) {
			foreach ($ceklogin as $row);
			$this->session->set_userdata('username',$row->username);
			$this->session->set_userdata('nama',$row->nama);
			$this->session->set_userdata('level',$row->level);
			$this->session->set_userdata('status','login');

			if ($this->session->userdata('level')=="admin") {
				redirect('admin/Dashboard_admin');
			} elseif ($this->session->userdata('level') == "user") {
				redirect('Dashboard');
			}
		}else{
			echo "<script>alert('Username/Password anda Salah');history.go(-1);</script>";
		}
	}

}

?>
