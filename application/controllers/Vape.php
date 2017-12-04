<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Vape extends CI_Controller{
  
  public function index(){
   $this->load->view('home');
  }
  
  public function home(){
   $this->load->view('home');
 }

  public function picoresin(){
   $this->load->view('picoresin'); 
  }
  
  public function contact(){
   $this->load->model('m_contact');
   $data['response'] = $this->m_contact->post();
   $this->load->view('contact', $data);
  }

  public function login(){
    $this->load->view('login');
  }

}
?>