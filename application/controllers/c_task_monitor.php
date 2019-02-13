<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_task_monitor extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_tasklist');
    $this->load->library('form_validation');
  }

  public function index(){
    $data['t_tasklist']=$this->m_tasklist->getAll();
    $this->load->view("admin/v_tasklist_monitor", $data);
  }

  // public function new_task(){
  //   $this->load->view('admin/v_new_task_list');
  // }

  // public function list_task(){
  //   $this->load->view('admin/v_tasklist_monitor');
  // }

  public function add(){
  
    $tasklist=$this->m_tasklist;
    $validation=$this->form_validation;
    $validation->set_rules($tasklist->rules());

    if($validation->run()){
      $tasklist->save();
      $this->session->set_flashdata('success','Berhasil disimpan');
    }
    $this->load->view("admin/v_tasklist_monitor");
  }

  public function edit($id=null)
  {
    if (!isset($id)) redirect('admin/c_task_monitor');

    $tasklist = $this->m_tasklist;
    $validation=$this->form_validation;
    $validation->set_rules($tasklist->rules());

    if($validation->run()){
      $tasklist->update();
      $this->session->set_flashdata('success','Berhasil disimpan');
    }
    $data['t_tasklist']=$tasklist->getById($id);
    if(!$data['t_tasklist']) show_404();

    $this->load->view("admin/v_tasklist_monitor", $data);
  }

  public function delete($id=null){
    if(!isset($id)) show_404();

    if($this->m_tasklist->delete($id)){
      redirect(site_url('c_task_monitor'));
    }
  }
}
