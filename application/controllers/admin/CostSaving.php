<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class CostSaving extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      $this->load->model("Tasklist_model");
      $this->load->library('form_validation');
  }

  public function index()
  {
      $data["tasklists"] = $this->Tasklist_model->getAll();
      $this->load->view("admin/costsaving/cost_log", $data);
  }

  public function edit($id = null)
  {
      if (!isset($id)) redirect('admin/tasklists');

      $tasklist = $this->Tasklist_model;
      $validation = $this->form_validation;
      $validation->set_rules($tasklist->rules());

      if ($validation->run()) {
          $tasklist->update();
          $this->session->set_flashdata('success', 'Berhasil disimpan');
      }

      $data["tasklist"] = $tasklist->getById($id);
      if (!$data["tasklist"]) show_404();

      $this->load->view("admin/tasklist/edit_task", $data);
  }

  public function delete($id=null)
  {
      if (!isset($id)) show_404();

      if ($this->Tasklist_model->delete($id)) {
          redirect(site_url('admin/tasklists'));
      }
  }

}