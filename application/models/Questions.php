<?php
Class Questions extends CI_Model

{

function __construct() {
parent::__construct();
}
	function anschk1($answer,$name)
	{
		
			$this -> db -> select('Q_No,Answer');
		$this -> db -> from('questions');
		$this -> db -> where("Q_No = '1'");  
		$this -> db -> where('Answer = ' . "'" . $answer. "'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$data=array('Q'=>'2');
			$this->db->where('Username', $name);
   			$b= $this->db->update('users',$data);
			return $query->result();
			 
		}
	}
	function anschk2($answer,$name)
	{
		
			$this -> db -> select('Q_No,Answer');
		$this -> db -> from('questions');
		$this -> db -> where("Q_No = '2'");  
		$this -> db -> where('Answer = ' . "'" . $answer. "'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$data=array('Q'=>'3');
			$this->db->where('Username', $name);
   			$b= $this->db->update('users',$data);
			return $query->result();
			 return $query->result();
			 
		}
	}
	function anschk3($answer,$name)
	{
		
			$this -> db -> select('Q_No,Answer');
		$this -> db -> from('questions');
		$this -> db -> where("Q_No = '3'");  
		$this -> db -> where('Answer = ' . "'" . $answer. "'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$data=array('Q'=>'4');
			$this->db->where('Username', $name);
   			$b= $this->db->update('users',$data);
			return $query->result();
			 return $query->result();
			 
		}
	}
	function anschk4($answer,$name)
	{
		
			$this -> db -> select('Q_No,Answer');
		$this -> db -> from('questions');
		$this -> db -> where("Q_No = '4'");  
		$this -> db -> where('Answer = ' . "'" . $answer. "'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$data=array('Q'=>'5');
			$this->db->where('Username', $name);
   			$b= $this->db->update('users',$data);
			return $query->result();
			 return $query->result();
			 
		}
	}
	function anschk5($answer,$name)
	{
		
			$this -> db -> select('Q_No,Answer');
		$this -> db -> from('questions');
		$this -> db -> where("Q_No = '5'");  
		$this -> db -> where('Answer = ' . "'" . $answer. "'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$data=array('Q'=>'6');
			$this->db->where('Username', $name);
   			$b= $this->db->update('users',$data);
			return $query->result();
			 return $query->result();
			 
		}
	}
	function anschk6($answer,$name)
	{
		
			$this -> db -> select('Q_No,Answer');
		$this -> db -> from('questions');
		$this -> db -> where("Q_No = '6'");  
		$this -> db -> where('Answer = ' . "'" . $answer. "'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$data=array('Q'=>'7');
			$this->db->where('Username', $name);
   			$b= $this->db->update('users',$data);
			return $query->result();
			 return $query->result();
			 
		}
	}
	function anschk7($answer,$name)
	{
		
			$this -> db -> select('Q_No,Answer');
		$this -> db -> from('questions');
		$this -> db -> where("Q_No = '7'");  
		$this -> db -> where('Answer = ' . "'" . $answer. "'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$data=array('Q'=>'8');
			$this->db->where('Username', $name);
   			$b= $this->db->update('users',$data);
			return $query->result();
			 return $query->result();
			 
		}
	}
	function anschk8($answer,$name)
	{
		
			$this -> db -> select('Q_No,Answer');
		$this -> db -> from('questions');
		$this -> db -> where("Q_No = '8'");  
		$this -> db -> where('Answer = ' . "'" . $answer. "'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$data=array('Q'=>'9');
			$this->db->where('Username', $name);
   			$b= $this->db->update('users',$data);
			return $query->result();
			 return $query->result();
			 
		}
	}
	function anschk9($answer,$name)
	{
		
			$this -> db -> select('Q_No,Answer');
		$this -> db -> from('questions');
		$this -> db -> where("Q_No = '9'");  
		$this -> db -> where('Answer = ' . "'" . $answer. "'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$data=array('Q'=>'10');
			$this->db->where('Username', $name);
   			$b= $this->db->update('users',$data);
			return $query->result();
			 return $query->result();
			 
		}
	}
	function anschk10($answer,$name)
	{
		
			$this -> db -> select('Q_No,Answer');
		$this -> db -> from('questions');
		$this -> db -> where("Q_No = '10'");  
		$this -> db -> where('Answer = ' . "'" . $answer. "'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$data=array('Q'=>'1');
			$this->db->where('Username', $name);
   			$b= $this->db->update('users',$data);
			return $query->result();
			 return $query->result();
			 
		}
	}
}
?>
