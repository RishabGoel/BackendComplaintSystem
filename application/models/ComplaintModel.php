<?php

class ComplaintModel extends CI_Model{
   public function addComplaint($userId="1", $location="1", $description="1"){
   		// $this->load->database();
   		date("h:i:sa")
		$query_str="insert into complaints (user_id,author_id,description,created,upvotes,downvotes,is_ressolved,ressolved_by,admin,image_loc,complaint_type,title,location) values ('".$description."','".$complaintId."','jwala');";
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
	public function getComplaints($userId=" ",$location=" ",){
		$query_str="select c.name,d.designation,a.title,a.description,a.upvotes,a.downvotes, 
		a.created,a.complaint_id,a.resolving_admin,a.is_ressolved,count(b.comment_id) as total_comments from complaints a 
		left join user c on a.user_id=c.id 
		left join authority d on a.author_id=d.auth_id
		left join comments b on a.user_id=b.user_id
		where user_id='".$userId."' or location='".$location."' or complaint_type='3' order by upvotes desc,is_ressolved asc;";
		// 
		// left join authority d  a.author_id=d.auth_idwhere user_id='1' and location='".$location."' and complaint_type='0' order by upvotes desc,is_ressolved asc
		$data = $this->db->query($query_str)->result_array();
		return $data;
		
	}
	public function ressolveComplaint($complaintId=""){
		$query_str="update complaints set is_ressolved = 1 where complaint_id = '".$complaintId."' ;";
		echo($query_str);
		return $this->db->query($query_str);
	}
	public function upvoteComplaint($complaintId="",$upvotes){
		$query_str="update complaints set upvotes='".$upvotes."' where complaint_id = '".$complaintId."' ;";
		echo($query_str);
		return $this->db->query($query_str);
	}
	public function downvoteComplaint($complaintId="",$downvotes){
		$query_str="update complaints set downvotes='".$downvotes."' where complaint_id = '".$complaintId."' ;";
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