<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TasklistLog extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->model("Tasklist_model");
      $this->load->model("Tasklog_model");
      $this->load->library('form_validation');
  }

  public function index()
  {
      $data["tasklists"] = $this->Tasklog_model->getAll("Yes");
      $this->load->view("admin/tasklistlog/list_log", $data);
  }

  public function add()
  {
      $tasklist = $this->Tasklist_model;
      $validation = $this->form_validation;
      $validation->set_rules($tasklist->rules());

      if ($validation->run()) {
          $tasklist->save();
          $this->session->set_flashdata('success', 'Berhasil disimpan');
          // $this->session->view("admin/tasklist/list_task");
      }

      $this->load->view("admin/tasklist/new_task");
  }

  public function edit($id = null)
  {
      if (!isset($id)) redirect('admin/TasklistLog');

      $tasklist = $this->Tasklog_model;
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

  public function delete($id)
  {
      if (!isset($id)) show_404();

      if ($this->Tasklog_model->delete($id)) {
          redirect(site_url('admin/TaskListLog'));
      }
  }


}
