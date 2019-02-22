<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tasklist_model extends CI_Model
{
    private $_table = "tasklists";

    public $task_id;
    public $task_name;
    public $application;
    public $pj;
    public $category;
    public $mandays;
    public $frekuensi;
    public $start_date;
    public $end_date;
    public $priority;
    public $stat_now;
    public $done;
    public $description;
    public $sum_mandays;
    public $level_task;
    public $type_task;
    public $cost_saving;

    public function rules()
    {
        return [
            ['field' => 'task_name',
            'label' => 'Taskname',
            'rules' => 'required'],

            ['field' => 'application',
            'label' => 'Application',
            'rules' => 'required'],

            ['field' => 'pj',
            'label' => 'Pj',
            'rules' => 'required'],

            ['field' => 'category',
            'label' => 'Category',
            'rules' => 'required'],

            ['field' => 'mandays',
            'label' => 'Mandays',
            'rules' => 'required'],

            ['field' => 'frekuensi',
            'label' => 'Frekuensi',
            'rules' => 'required'],

            ['field' => 'start_date',
            'label' => 'Start_date',
            'rules' => 'required'],

            ['field' => 'end_date',
            'label' => 'End_date',
            'rules' => 'required'],

            ['field' => 'priority',
            'label' => 'Priority',
            'rules' => 'required'],

            ['field' => 'stat_now',
            'label' => 'Stat_now',
            'rules' => 'required'],

            ['field' => 'done',
            'label' => 'Done',
            'rules' => 'required'],

            ['field' => 'sum_mandays',
            'label' => 'Sum_mandays',
            'rules' => 'required'],

            ['field' => 'level_task',
            'label' => 'Level_task',
            'rules' => 'required'],

            ['field' => 'type_task',
            'label' => 'Type_task',
            'rules' => 'required']
        ];
    }

    public function getAll($where)
    {
        $data = $this->db->get($this->_table)->result();
        $data = $this->db->get_where($this->_table, ["done" => $where])->result();
        return $data;
    }

    public function getAll2($where)
    {
        $data = $this->db->get($this->_table)->result_array();
        $data = $this->db->get_where($this->_table, ["done" => $where])->result_array();
        return $data;
    }

    function stLinier($today,$start,$end){
      require "vendor/autoload.php";
      $start1 = $start;
      $today_date = new datetime($today);
      $start_date = new datetime($start);
      $end_date = new datetime($end);
      $mandays = $end_date->diff($start_date);
      $mandays2 = $today_date->diff($start_date);
      $manday = $mandays->d;
      $manday2 = $mandays2->d;
      while (strtotime($start) <= strtotime($end)) {
              $libur = new Grei\TanggalMerah("assets/jquery/calendar.json");
              $startd = date("Ymd",strtotime($start));
              $libur->set_date($startd);
              $ceklibur = $libur->check();
              if($ceklibur){
                $manday--;
                $start = date ("Y-m-d", strtotime("+1 day", strtotime($start)));
              }else{
                $start = date ("Y-m-d", strtotime("+1 day", strtotime($start)));
              }
             }
      while (strtotime($start1) <= strtotime($today)) {
              $libur2 = new Grei\TanggalMerah("assets/jquery/calendar.json");
              $startd = date("Ymd",strtotime($start1));
              $libur2->set_date($startd);
              $ceklibur2 = $libur2->check();
              if($ceklibur2){
                  $manday2--;
                  $start1 = date ("Y-m-d", strtotime("+1 day", strtotime($start1)));
              }else{
                  $start1 = date ("Y-m-d", strtotime("+1 day", strtotime($start1)));
                  }
                  }
      $statlin1 = 100/$manday;
      $statlin2 = $manday2 * $statlin1;
      $hasil = intval($statlin2);
      return $hasil;
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["task_id" => $id])->row();
    }

    public function hitung_cost($sum_mandays){
      $cost_saving = $sum_mandays * 2500000;
      return $cost_saving;
    }

    

    public function save()
    {
        $post = $this->input->post();
        // $this->task_id = uniqid();
        $this->task_name = $post["task_name"];
        $this->application = $post["application"];
        $this->pj = $post["pj"];
        $this->category = $post["category"];
        $this->mandays = $post["mandays"];
        $this->frekuensi = $post["frekuensi"];
        $this->start_date = $post["start_date"];
        $this->end_date = $post["end_date"];
        $this->priority = $post["priority"];
        $this->stat_now = $post["stat_now"];
        $this->done = $post["done"];
        $this->description = $post["description"];
        $this->sum_mandays = $post["sum_mandays"];
        $this->level_task = $post["level_task"];
        $this->type_task = $post["type_task"];
        if($this->mandays == "Yes" AND $this->done == "Yes"){
        $this->cost_saving = $this->hitung_cost($this->sum_mandays);
        }else{
        $this->cost_saving = 0;
        }
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->task_id = $post["id"];
        $this->task_name = $post["task_name"];
        $this->application = $post["application"];
        $this->pj = $post["pj"];
        $this->category = $post["category"];
        $this->mandays = $post["mandays"];
        $this->frekuensi = $post["frekuensi"];
        $this->start_date = $post["start_date"];
        $this->end_date = $post["end_date"];
        $this->priority = $post["priority"];
        $this->stat_now = $post["stat_now"];
        $this->done = $post["done"];
        $this->description = $post["description"];
        $this->sum_mandays = $post["sum_mandays"];
        $this->level_task = $post["level_task"];
        $this->type_task = $post["type_task"];
        if($this->mandays == "Yes" AND $this->done == "Yes"){
        $this->cost_saving = $this->hitung_cost($this->sum_mandays);
        }else{
        $this->cost_saving = 0;
        }

        $this->db->update($this->_table, $this, array('task_id' => $post['id']));
    }

    public function delete($id)
    {
      return $this->db->delete($this->_table, array("task_id" => $id));
    }

}
