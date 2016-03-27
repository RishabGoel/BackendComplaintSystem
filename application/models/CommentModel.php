<?php

class CommentModel extends CI_Model{
   public function addComment($userId="1", $complaintId="1", $description="1"){
		$query_str="insert into comments (comment_id,user_id,description,complaint_id) values (UUID(),'".$userId."','".$description."','".$complaintId."');";
		echo($query_str);
		return $this->db->query($query_str);
	}	

	public function editComment($commentId="", $description=""){

		$query_str="update comments set description = '".$description."' where comment_id = '".$commentId."' ;";
		echo($query_str);
		return $this->db->query($query_str);

	}	

	public function getComments($complaintId=""){

		return $this->db->
    	select('*')->
    	from('comments')->
   		where('complaint_id', $complaintId)->
    	get()->result_array();
	}

	public function deleteComment($commentId){
		$query_str="delete from comments where comment_id = '".$commentId."' ;";
		echo($query_str);
		return $this->db->query($query_str);
	}
}
?>