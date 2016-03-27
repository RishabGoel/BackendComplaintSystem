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
		echo("reached");
		$sql_querry = "Select id from user where username='".$username."' and password='".$password."';";
		echo($sql_querry);
		$result = $this->db->query($sql_querry)->result_array();
		//echo($result); 
		print_r($result);
	}
}
