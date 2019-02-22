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
      $this->load->model("Tasklog_model");
      $this->load->model("Costsaving_model");
      $this->load->library('form_validation');
  }

  public function index()
  {
      $data["tasklists"] = $this->Costsaving_model->getAll("Yes","Yes")->result();
      $data["total_cost"] = $this->Costsaving_model->getTotalCost()->result();
      $this->load->view("admin/costsaving/cost_log", $data);
  }


}
