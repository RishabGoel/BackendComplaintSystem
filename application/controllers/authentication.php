<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function signup($name="",$username="",$password="",$address="",$phone_number="",$designation="")
	{
		$this->load->model('auth');
		$this->auth->register_user($name,$username,$password,$address,$phone_number,$designation);
	}

	public function login($username="",$password="",$location="")
	{
		// echo("dasdsa");
		$this->load->model('auth');
		// //echo("dasdsasadadsasda");
		$db_resp = $this->auth->create_session($username,$password);
		$response = array();
		if (count($db_resp) == 0){

			$response['status'] = 0;

		}
		else{

			$response['status'] = 1;
			$response['user_id'] = $db_resp['id'];
			$response['designation'] = $db_resp['designation'];
			$response['location'] = $db_resp['address'];
			$this->load->model('complaintmodel');
			$complaints=$this->complaintmodel->getComplaints("1",$location);
			$response['data'] = json_encode($complaints);

		}
		// print_r($db_resp);
		echo (json_encode($response));
		// $this->load->model('ComplaintModel');
		// $temp=$this->ComplaintModel->getComplaints($userId);	

	}

	public function logout($username="",$password="")
	{
		$this->load->model('auth');
		$this->auth->exit_session($username,$password);
	}
	public function F($value='')
	{
		
	}
}