<?php

class Login_model extends CI_Model
{

  public function getLoginData($usr,$pwd){
    $u = $this->db->escape_str($usr);
    $p = md5($this->db->escape_str($pwd));

    $cek_login = $this->db->get_where('t_user',array('username'=>$u, 'password'=>$p));
    if($cek_login->num_rows()>0){
      $qad = $cek_login->row();
      if($u == $qad->username && $p == $qad->password){
        $sess = array(
          'nik' => $qad->nik,
          'username' => $qad->username,
          'level' => $qad ->levl,
        );
        $this->session->set_userdata($sess);
        if($qad->level == 'admin')
        redirect('Dashboard_admin');
        elseif ($use->level = 'user')
        redirect('Dashboard');
        else
        echo "<script>alert('Username/Password anda Salah');history.go(-1);</script>";

    }
  }
}

  function login($user, $pass){
    $this->db->select('*');
    $this->db->from('t_user');
    $this->db->where('username',$user);
    $this->db->where('password',$pass);
    $this->db->limit(1);

    $query = $this->db->get();

    if($query->num_rows()==1){
      return $query->result();
    }else {
      return false;
    }
  }

}
