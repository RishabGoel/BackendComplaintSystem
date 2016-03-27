<?php

class Comment_model extends CI_Model{
   public function addComment($userId="1", $complaintId="1", $description="1"){
   		// $this->load->database();
		$query_str="insert into comments (comment_id,user_id,description,complaint_id) values (UUID(),'".$userId."','".$description."','".$complaintId."');";
		echo($query_str);
		return $this->db->query($query_str);
	}	

	public function editComment($commentId="", $description=""){


	}
	
}

?>