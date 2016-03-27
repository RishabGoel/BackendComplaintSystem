<?php

class CommentModel extends CI_Model{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

   public function addComment($userId="", $complaintId="", $description=""){
		$query_str="insert into comments (comment_id,user_id,description,complaint_id) values (UUID(),".$user_id.",".$description.",".$complaint_id");";
		return $this->db->query($query_str);
	}

	public function editComment($commentId="", $description=""){


	}
	public function editComment($commentId="", $description=""){


	}
}

?>