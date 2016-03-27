<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComplaintController extends CI_Controller {

   public function __construct()
   {
        parent::__construct();
        // Your own constructor code
        $this->load->model('complaintmodel');
   }	

	public function addComplaint($userId, $complaintId, $description){
		$db_resp = $this->complaintmodel->addComplaint($userId, $complaintId, $description);
		$response = array();
		$response['status'] = $db_resp;
		echo json_encode($response);
	}

	public function editComplaint($complaintId, $description){
		$temp = $this->complaintmodel->editComplaint($complaintId, $description);
		$response = array();

		if ($temp==1){

			$result['status'] = $temp;
			$result['data'] = $this->showComplaint($complaintId);
			echo json_encode($result);

		}
		else{

			$response['status']=$temp;
			echo json_encode($response);

		}
		// echo $temp;
	}

	public function showComplaint($complaintId){
		$temp = $this->complaintmodel->showComplaint($complaintId);
		echo json_encode($temp);
		return $temp;
	}

	public function getComplaint($userId){
		$temp = $this->complaintmodel->showComplaint($userId);
		echo json_encode($temp);
	}

	public function ressolveComplaint($complaintId){
		$temp = $this->complaintmodel->ressolveComplaint($complaintId);
		$response = array();
		$response['status'] = $temp;
		echo json_encode($response);
	}

	public function upvoteComplaint($complaintId,$upvotes){
		$temp = $this->complaintmodel->upvoteComplaint($complaintId,$upvotes);
		$response = array();
		$response['status'] = $temp;
		echo json_encode($response);
	}

	public function downvoteComplaint($complaintId,$downvotes){
		$temp = $this->complaintmodel->downvoteComplaint($complaintId,$downvotes);
		$response = array();
		$response['status'] = $temp;
		echo json_encode($response);
		
	}

	public function deleteComplaint($complaintId){
		
		$temp = $this->complaintmodel->deleteComplaint($complaintId);	
		$response = array();
		$response['status'] = $temp;
		echo json_encode($response);
	}
}
?>