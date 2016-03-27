<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

	
	public function getComments($complaintId){
		$this->load->model('CommentModel');
		$data['records'] = $this->CommentModel->getComments($complaintId);
		print_r($data['records']);
	}

	public function addComment($userId, $complaintId, $description){
		$this->load->model('CommentModel');echo $userId;
		$temp = $this->CommentModel->addComment($userId, $complaintId, $description);
		
		echo $temp;
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