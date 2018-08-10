<?php 

/**
* 
*/
class Messages_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_msg_receiver($sn)
	{

	$sql="SELECT img_name FROM commodity WHERE sn =?";
$query=$this->db->query($sql, $GLOBALS['commodity_sn']);
$row= $query->row();
	
$sql = "SELECT user_surename FROM user WHERE sn = ?";
$query=$this->db->query($sql, $sn);
$row= $query->row();



	}
}