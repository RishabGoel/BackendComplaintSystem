<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

	
	public function getComments($complaintId){
		$this->load->model('CommentModel');
		$response['status']="1"
		$response['data'] = $this->CommentModel->getComments($complaintId);
		echo json_encode($response);
	}

	public function addComment($complaintId, $description){
		$this->load->model('CommentModel');
		$temp = $this->CommentModel->addComment($_POST['user_id'], $complaintId, $description);
		$response['status']=$temp;
		echo json_encode($response);
	}

	public function editComment($commentId, $description){
		
		$this->load->model('CommentModel');
		$temp = $this->CommentModel->editComment($commentId, $description);	
		echo $temp;
	}

	public function deleteComment($commentId){
		$this->load->model('CommentModel');
		$temp = $this->CommentModel->deleteComment($commentId);	
		echo $temp;
	}
}

?>