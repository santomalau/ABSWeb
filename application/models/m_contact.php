<?php
class m_contact extends CI_Model{
 
 public function __construct(){
  $this->load->database();
 }
 
 public function post(){
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email']; // this is the sender's Email address
    $phonenumber = $_POST['phonenumber'];
    $saran = $_POST['saran'];
    $this->db->query("INSERT INTO contact(name, email_adress, phone_number, saran) VALUES('$name','$email','$phonenumber', '$saran')");
   }
 }
 
}