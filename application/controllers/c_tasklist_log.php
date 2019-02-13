<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class C_tasklist_log extends CI_Controller
{

	public function __construct()
	{
		parent:: __construct();
		//$this -> load -> model("Tasklist_model");

		$this -> load -> library('form_validation');
		if($this->session->userdata('level')!="admin"){
      redirect('c_login');
    }
	}

	public function index()
	{
		//$data["task_list"] = $this->Tasklist_model->getAll(); //ambil data dari model
		$this -> load -> view("admin/tasklist_view/list_task");  //kirim data ke view
	}

	public function new_task()
	{
		$this->load->view("admin/tasklist_view/new_task");
	}

	public function list_task()
	{
		$this->load->view("admin/tasklist_view/list_task");
	}

	public function add()
	{
		$tasklist_mtd = $this -> Tasklist_model;
		$validation = $this -> form_validation;
		$validation -> set_rules($tasklist_mtd -> rules());

		if ($validation -> run()) {
			$tasklist_mtd -> save();
			$this -> session -> set_flashdata('success', 'Berhasil disimpan');
		}

		$this -> load -> view("admin/tasklist_view/new_task");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/tasklist_view');

		$tasklist_mtd = $this -> Tasklist_model;
		$validation = $this -> form_validation;
		$validation -> set_rules($tasklist -> rules());

		if ($validation -> run()){
			$tasklist_mtd -> update();
			$this -> session -> set_flashdata('success','Berhasil disimpan');
		}

		$data["task_list"] = $tasklist_mtd -> getById($id);
		if(!$data["task_list"]) show_404();

		$this -> load -> view("admin/tasklist_view/edit_task", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this -> Tasklist_model -> delete($id)) {
			redirect(site_url('admin/tasklist_view'));
		}
	}
}

 ?>
