<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct(){
    parent::__construct();

    $this->load->model('buku_model');
  }

  public function index(){
    if($this->session->userdata('authenticated'))
        redirect('index.php/buku/index');

    $this->load->view('login');
  }

  public function login(){
    $username = $this->input->post('username'); 
    $password = md5($this->input->post('password')); 

    $user = $this->buku_model->get($username); 

    if(empty($user)){ 
      $this->session->set_flashdata('message', 'Username tidak ditemukan'); 
      echo "Username atau password salah !!!";
      redirect(''); 
    }else{
      if($password == $user->password){
        $session = array(
          'authenticated'=>true, 
          'username'=>$user->username,  
          'nama'=>$user->nama
        );

        $this->session->set_userdata($session); 
        redirect('index.php/buku/index');
      }else{
        $this->session->set_flashdata('message', 'Password salah');
        redirect(''); 
      }
    }
  }

  public function logout(){
    $this->session->sess_destroy(); 
    redirect(''); 
  }
}