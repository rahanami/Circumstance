<?php
Class Login_model extends CI_Model

{

function __construct() {
parent::__construct();
}
	function login($username, $password)
	{
		
		$this -> db -> select('Username,Password,Q');
		$this -> db -> from('users');
		$this -> db -> where('Username = ' . "'" . $username . "'"); 
		$this -> db -> where('Password = ' . "'" . $password. "'"); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();
		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	public function add_user()
 {
  $data=array(
    'username'=>$this->input->post('user_name'),
    'email'=>$this->input->post('email_address'),
    'password'=>md5($this->input->post('password'))
  );
  $this->db->insert('users',$data);
 }

	


}
?>
