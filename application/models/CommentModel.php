<?php

class CommentModel extends CI_Model{
   public function addComment($userId="1", $complaintId="1", $description="1"){
		$query_str="insert into comments (user_id,description,complaint_id,time_created) values (UUID(),'".$userId."','".$description."','".$complaintId."','CURRENT_TIMESTAMP');";
		return $this->db->query($query_str);
	}	

	public function editComment($commentId="", $description=""){

		$query_str="update comments set description = '".$description."' where comment_id = '".$commentId."' ;";
		echo($query_str);
		return $this->db->query($query_str);

	}	

	public function getComments($commentId=""){

		
    	$query_str="select b.name,a.description,a.time_created from complaints a 
		left join user b on a.user_id=b.id 
		where complaint_id='".$complaintId."';";
		return $this->db->query($query_str)->result_array();

	}

	public function deleteComment($commentId){
		$query_str="delete from comments where comment_id = '".$commentId."' ;";
		echo($query_str);
		return $this->db->query($query_str);
	}
}
?>