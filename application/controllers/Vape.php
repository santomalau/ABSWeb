<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Vape extends CI_Controller{
     
     public function __construct() {
         parent::__construct();
         
         // Load form helper library
         $this->load->helper('form');
         
         // Load form validation library
         $this->load->library('form_validation');
         
         // Load session library
         $this->load->library('session');
     }
     
  public function index(){
   $this->load->view('home');
  }
  
  public function home(){
    $this->load->model('m_kategori');
   $data['response'] = $this->m_kategori->get();
   $this->load->view('home', $data);
 }

  public function picoresin(){
   $this->load->view('picoresin'); 
  }
  
  public function contact(){
   $this->load->model('m_contact');
   $data['response'] = $this->m_contact->post();
   $this->load->view('contact', $data);
  }

 public function atomizer(){
   $this->load->view('atomizer'); 
  }

  public function battery(){
   $this->load->view('battery'); 
  }

  public function accessory(){
   $this->load->view('accessory'); 
  }

  public function link_category(){
    $id = $this->input->get('id');
      
      if ($id == "K001"){
         $this->load->view('picoresin');
      }
      else if ($id == "K002"){
         $this->load->view('atomizer');
      }
      else if ($id == "K003"){
         $this->load->view('battery');
      }
      else if ($id == "K004"){
         $this->load->view('accessory');
      }
      
  }

     
     
     // Check for user login process
  public function login() {
      $this->load->model('m_login');
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
   
   if ($this->form_validation->run() == FALSE) {
    if(isset($this->session->userdata['logged_in'])){
     return true;
    }
    else{
     $this->load->view('login');
    }
   } 
   else {
    $data = array(
    'username' => $this->input->post('username'),
    'password' => $this->input->post('password')
    );
    $result = $this->m_login->login($data);
    if ($result == TRUE) {
     $username = $this->input->post('username');
     $result = $this->m_login->read_user_information($username);
     if ($result != false) {
      $session_data = array(
      'username' => $result[0]->username
      );
      // Add user data in session
      $this->session->set_userdata('logged_in', $session_data);
      $this->home();
     }
    } 
    else {
     $data = array('error_message' => 'Invalid Username or Password');
     $this->load->view('login', $data);
    }
   }
  }
     public function logout(){
         $sess_array = array('username' => '');
         $this->session->unset_userdata('logged_in', $sess_array);
         $this->home();
     }

}
?>