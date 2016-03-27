<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function signup($name="",$username="",$password="",$address="",$phone_number="",$designation="")
	{
		$this->load->model('auth');
		$this->auth->register_user($name,$username,$password,$address,$phone_number,$designation);
	}

	public function login($username="",$password="")
	{
		//echo("dasdsa");
		$this->load->model('auth');
		//echo("dasdsasadadsasda");
		$this->auth->create_session($username,$password);
		$this->load->model('ComplaintModel');
		$this->ComplaintModel->getComplaints($username,$password);	
	}

	public function logout($username="",$password="")
	{
		$this->load->model('auth');
		$this->auth->exit_session($username,$password);
	}
}