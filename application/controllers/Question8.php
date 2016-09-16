<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question8 extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Questions','',TRUE);
     $this->load->helper('url');
  }
  function index()
  {
    if ($this->session->userdata('Q')==8)
    { 
	$this->load->helper('form');
        $answer=$_POST['answer'];
        $this->load->library('form_validation');
	
         $this->form_validation->set_rules('answer', 'answer', 'required|callback_check_database');
	 if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
      $this->load->view('question8');
    }
    else
    {
	echo("Loading.....");
      
      redirect('landing', 'refresh');
    }
  }
  else
    redirect('landing', 'refresh');

  }
  
  function check_database($answer)
  {
    if($this->session->userdata('logged_in'))
    {
    //Field validation succeeded.  Validate against database
    
    //query the database
     // $answer=md5($answer);
    $name=$this->session->userdata('name');
    $result = $this->Questions->anschk8($answer,$name);
    
   if($result)
    {  
      $this->session->set_userdata('Q', '9');
        return TRUE;
  }
    else
    {
      $this->form_validation->set_message('check_database', "The answer is incorrect");
      return false;
    }
  }
    else
redirect('Login', 'refresh');
  }
 
}
?>
