<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->library('session');
    }

    function index(){
        return $this->load->view('halaman_login');
    }

    function cek_login(){
       $cek= $this->m_admin->cek_login();
    }
}
?>