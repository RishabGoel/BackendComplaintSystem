<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {
	public function register_user($name="ysdf",$username="dgd",$password="",$address="",$phone_number="",$designation="")
	{
		$sql_querry = "Insert into user(id,name,username,password,address,phone,designation) values (UUID(),'".$name."','".$username."','".$password."','".$address."','".$phone_number."','".$designation."');";
		echo($sql_querry);
		$this->db->query($sql_querry);
	}

	public function create_session($username="",$password="")
	{
		
		$sql_querry = "Select * from user where username='".$username."' and password='".$password."';";
		
		$result = $this->db->query($sql_querry)->row_array();
		return $result;
	}
}
