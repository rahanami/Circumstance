<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {

  function __construct()
  {
  	 
    parent::__construct();
  }

  function index()
  {
if($this->session->userdata('logged_in'))
{
    if ($this->session->userdata('Q')==1) 
      {
        $this->load->helper('form');
      $this->load->view('questions_landing');
      }
  		else if ($this->session->userdata('Q')==2) 
  		{
  			$this->load->helper('form');
			$this->load->view('question2');
  		}
      else if ($this->session->userdata('Q')==3) 
      {
        $this->load->helper('form');
      $this->load->view('question3');
      }
      else if ($this->session->userdata('Q')==4) 
      {
        $this->load->helper('form');
      $this->load->view('question4');
      }
      else if ($this->session->userdata('Q')==5) 
      {
        $this->load->helper('form');
      $this->load->view('question5');
      }
      else if ($this->session->userdata('Q')==6) 
      {
        $this->load->helper('form');
      $this->load->view('question6');
      }
      else if ($this->session->userdata('Q')==7) 
      {
        $this->load->helper('form');
      $this->load->view('question7');
      }
      else if ($this->session->userdata('Q')==8) 
      {
        $this->load->helper('form');
      $this->load->view('question8');
      }
      else if ($this->session->userdata('Q')==9) 
      {
        $this->load->helper('form');
      $this->load->view('question9');
      }
      else if ($this->session->userdata('Q')==10) 
      {
        $this->load->helper('form');
      $this->load->view('question10');
      }

  	
}
else
{   
redirect('Login', 'refresh');
} 
  		
  		
  }
}
?>
