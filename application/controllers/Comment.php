<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

	
	
	public function index()
	{
		//$this->load->view('test');
	}
	public function ind()
	{
		//$this->load->view('test');
		//echo(b);
	}

	public function getComments($complaintId){

		$temp = $this->Comment->getComplaints($complaintId);
		echo $temp;
	}

	public function addComment($userId, $complaintId, $description){
		$this->load->model('comment_model');
		$temp = $this->comment_model->addComment($userId, $complaintId, $description);
		echo $temp;
		return $temp;
	}

	public function editComment($commentId, $description){
		
		$temp = $this->Comment->editComment($commentId, $description);
		echo $temp;
	}
}
?>