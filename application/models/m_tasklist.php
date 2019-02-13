<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tasklist extends CI_Model
{
  private $table = "t_tasklist";

  public $task_id;
  public $task_name;
  public $aplikasi;
  public $username;
  public $kategori;
  public $mandays;
  public $frekuensi;
  public $start_date;
  public $end_date;
  public $prioritas;
  public $status_sekarang;
  public $status_liniear
  public $done;
  public $keterangan;
  public $jml_mandays;
  public $jns_task_id;

  public function rules(){
    return [
      ['field'=>'task_name',
        'label'=>'task_name',
        'rules'=>'required'],

      ['field'=>'aplikasi',
        'label'=>'aplikasi',
        'rules'=>'required'],

      ['field'=>'username',
       'label'=>'username',
        'rules'=>'required'],

      ['field'=>'kategori',
        'label'=>'task_name',
        'rules'=>'required'],

      ['field'=>'start_date',
        'label'=>'start_date',
        'rules'=>'required'],

      ['field'=>'end_date',
        'label'=>'end_date',
        'rules'=>'required'],

      ['field'=>'prioritas',
        'label'=>'prioritas',
        'rules'=>'required'],

      ['field'=>'status_sekarang',
        'label'=>'status_sekarang',
        'rules'=>'required'],

      ['field'=>'status_liniar',
        'label'=>'status_liniar',
        'rules'=>'required'],

      ['field'=>'done',
        'label'=>'done',
        'rules'=>'required'],

      ['field'=>'jns_task_id',
        'label'=>'jns_task_id',
        'rules'=>'required'],
    ];
  }

  public function getAll(){
    return $this->db->get($this->_table)->result();
  }

  public function getById($id){
    return $this->db->get_where($this->_table,["task_id"=>$id])->row();
  }

  public function save(){
    $post=$this->input->post();
    $this->task_id=uniqid();
    $this->task_name=$post["task_name"];
    $this->aplikasi=$post["aplikasi"];
    $this->username=$post["username"];
    $this->kategori=$post["kategori"];
    $this->mandays=$post["mandays"];
    $this->frekuensi=$post["frekuensi"];
    $this->start_date=$post["start_date"];
    $this->end_date=$post["end_date"];
    $this->prioritas=$post["prioritas"];
    $this->status_sekarang=$post["status_sekarang"];
    $this->$status_liniear=$post["status_liniear"];
    $this->done=$post["done"];
    $this->keterangan=$post["keterangan"];
    $this->jml_mandays=$post["jml_mandays"];
    $this->jns_task_id=$post["jns_task_id"];
    $this->db->insert($this->_table, $this);
  }

  public function update(){
    $post=$this->input->post();
    $this->task_id=$post["id"];
    $this->task_name=$post["task_name"];
    $this->aplikasi=$post["aplikasi"];
    $this->username=$post["username"];
    $this->kategori=$post["kategori"];
    $this->mandays=$post["mandays"];
    $this->frekuensi=$post["frekuensi"];
    $this->start_date=$post["start_date"];
    $this->end_date=$post["end_date"];
    $this->prioritas=$post["prioritas"];
    $this->status_sekarang=$post["status_sekarang"];
    $this->$status_liniear=$post["status_liniear"];
    $this->done=$post["done"];
    $this->keterangan=$post["keterangan"];
    $this->jml_mandays=$post["jml_mandays"];
    $this->jns_task_id=$post["jns_task_id"];
    $this->db->update($this->_table, $this, array('task_id'=>$post['id']));
  }

  public function delete(){
    return $this->db->delete($this->_table, array("task_id"=$id));
  }

}
