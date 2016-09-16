<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verify extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Login_model','',TRUE);
  }

  function index()
  {
	   $this->load->helper('form');
    if(!($this->session->userdata('user_name')!="")){
  
   $this->load->view('login');
  
  }   

  }
  public function login() {
     $email=$_POST['email'];
        $password=$_POST['password'];

        $this->load->library('form_validation');
  $this->form_validation->set_rules('email', 'Email', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');
   if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
      $this->load->view('login');
    }
    else
    {
      //Go to private area
  echo("Loading.....");
      redirect('Landing', 'refresh');
    }
  }
  public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]');
  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

  if($this->form_validation->run() == FALSE)
  {
    $this->index();

  }
  else
  {
   $this->Login_model->add_user();
   redirect('Landing', 'refresh');
   //$this->thank();
  }
 }
  
  function check_database($password)
  {
    //Field validation succeeded.  Validate against database
    $username = $this->input->post('email');
    $password=md5($this->input->post('password'));
    //query the database
    $result = $this->Login_model->login($username, $password);
    
    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array('Q' => $row->Q,'Username' => $row->Username,
	//'Name'=>$row->Name
        );
        $num=$sess_array['Q'];
        $name=$sess_array['Username'];
        $this->session->set_userdata('Q', $num);
        $this->session->set_userdata('logged_in', $sess_array);
        $this->session->set_userdata('name', $name);
      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', "The email and password you entered don't match.");
      return false;
    }
  }
 
}
?>
