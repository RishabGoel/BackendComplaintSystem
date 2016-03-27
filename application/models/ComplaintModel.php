<?php

class ComplaintModel extends CI_Model{
   public function addComplaint($userId="1", $complaintId="1", $description="1"){
   		// $this->load->database();
		$query_str="insert into complaints (user_id,description) values ('".$description."','".$complaintId."');";
		echo($query_str);
		return $this->db->query($query_str);
	}	

	public function editComplaint($complaintId="", $description=""){
		$query_str="update complaints set description = '".$description."' where complaint_id = '".$complaintId."' ;";
		echo($query_str);
		return $this->db->query($query_str);
	}
	public function showComplaint($complaintId=""){
		return $this->db->
    	select('*')->
    	from('complaints')->
   		where('complaint_id', $complaintId)->
    	get()->row_array();
		
	}
	public function getComplaints($userId=" "){
		$query_str="select * from complaints where user_id='".$userId."');";
		echo($query_str);
		return $this->db->query($query_str);
	}
	public function ressolveComplaint($complaintId=""){
		$query_str="update complaints set is_ressolved = 1 where complaint_id = '".$complaintId."' ;";
		echo($query_str);
		return $this->db->query($query_str);
	}
	public function upvoteComplaint($complaintId="",$upvotes){
		$query_str="update complaints set upvotes='".$upvotes+1."' where complaint_id = '".$complaintId."' ;";
		echo($query_str);
		return $this->db->query($query_str);
	}
	public function downvoteComplaint($complaintId="",$downvotes){
		$query_str="update complaints set downvotes='".$downvotes+1."' where complaint_id = '".$complaintId."' ;";
		echo($query_str);
		return $this->db->query($query_str);
	}
	public function deleteComplaint($complaintId){
		$query_str="delete from complaints where complaint_id = '".$complaintId."' ;";
		echo($query_str);
		return $this->db->query($query_str);
	}
}

?>