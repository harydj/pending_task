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
    public $stat_lin;
    public $done;
    public $description;
    public $sum_mandays;
    public $level_task;
    public $type_task;

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

            ['field' => 'description',
            'label' => 'Description',
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

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["task_id" => $id])->row();
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
        $this->stat_lin = $post["stat_lin"];
        $this->done = $post["done"];
        $this->description = $post["description"];
        $this->sum_mandays = $post["sum_mandays"];
        $this->level_task = $post["level_task"];
        $this->type_task = $post["type_task"];
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
        $this->stat_lin = $post["stat_lin"];
        $this->done = $post["done"];
        $this->description = $post["description"];
        $this->sum_mandays = $post["sum_mandays"];
        $this->level_task = $post["level_task"];
        $this->type_task = $post["type_task"];

        $this->db->update($this->_table, $this, array('task_id' => $post['id']));
    }

    public function delete($id)
    {
      return $this->db->delete($this->_table, array("task_id" => $id));
    }

}
