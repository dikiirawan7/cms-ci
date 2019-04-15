<?php
class M_admin extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

        public function cek_login(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');

            $passwordMd5=md5($password);

            $this->db->where('username',$username);
            $this->db->or_where('password',$passwordMd5);
            $cek=$this->db->get('admin')->num_rows();
            $data=$this->db->get('admin')->row();

            if($cek==1){
                $getdata['role']=$data->role;
                $getdata['username']=$username;

                $this->session->set_userdata($getdata);
                redirect(base_url("admin"));
            }
            else{
                echo "gagal";
            }




    }
}
?>