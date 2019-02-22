<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tasklists extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("Tasklist_model");
        $this->load->library('form_validation');
    }

    public function index(){
        $data["tasklists"]= $this->Tasklist_model->getAll("No");
        $this->load->view("admin/tasklist/list_task", $data);
    }

    public function add(){
        $tasklist = $this->Tasklist_model;
        $validation = $this->form_validation;
        $validation->set_rules($tasklist->rules());

        if ($validation->run()) {
            $tasklist->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // $this->session->view("admin/tasklist/list_task");
            echo "<script>alert('Data Berhasil di Simpan.');history.go(-2)</script>";
        }

        $this->load->view("admin/tasklist/new_task");
    }

    public function edit($id = null){
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

    public function update($id = null){
      $tasklist = $this->Tasklist_model;
      $tasklist->update();
      echo "<script>alert('Data Berhasil di Update.');history.go(-2)</script>";
    }

    public function delete($id=null){
        if (!isset($id)) show_404();

        if ($this->Tasklist_model->delete($id=null)) {
            redirect(site_url('admin/TasklistsLog'));
        }
    }
}
