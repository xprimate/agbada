<?php

$commodity_sn=0;
class Commodity_model extends CI_Model{
	

	public function __construct()
	{
		$this->load->database();
	}

public function get_commodity()
{
	
		//limits the number of row
		//$this->db->limit(10);
		//select the specified colums
		$this->db->select('name, specie, quantity, price, location, aggregate, payment, action, lga, sn');

$query = $this->db->get('commodity');
			return $query->result_array();
	
}

public function row_count(){
	$query = $this->db->query('SELECT * FROM commodity');

 return $query->num_rows();
}




// get a specific row from the table
public function specific_row($specific_row)

{
	$this->db->select('name, specie, quantity, price, location, aggregate, payment, lga, action, description, img_name');
	$query = $this->db->get('commodity');
	$row= $query->row_array($specific_row);
	return $row;


}
// get a  particular row by S/N for the commodity detail page
public function row_sn($sn)
{
$GLOBALS['commodity_sn'] = $sn;
 $sql = "SELECT name, specie, quantity, price,lga,  location, aggregate, payment,  action, description, img_name, user_id, user_email, user_first_name FROM commodity WHERE sn = ?";
$query= $this->db->query($sql, array($sn));
//$img_name = $query->row->img_name;
return $query->result_array();
}

public function get_img()
{
	$sql="SELECT img_name FROM commodity WHERE sn =?";
$query=$this->db->query($sql, $GLOBALS['commodity_sn']);
$row= $query->row();


$image = $row->img_name;
if (!isset($image)) {
	$image="default_img.jpg";
	$image_src = "uploads/".$image;
	return $image_src;


}
else{
$image_src = "uploads/".$image;
return $image_src;
}

}




// to store the commodity in database
public function set_comd()
{				// variables used to create the 'img_name'
				$user_id =$this->session->userdata('user_id');
				$file_ext= ".jpg";
				$name=$this->input->post('name');
	$data = array(
		
		'name' =>$this->input->post('name'),
		'specie' =>$this->input->post('specie'),
		'quantity' =>$this->input->post('quantity'),
		'price' =>$this->input->post('price'),
		'location' =>$this->input->post('location'),
		'img_name' =>  $user_id . $name .$file_ext,
		'lga' =>$this->input->post('lga'),
		'description' => $this->input->post('description'),
		'payment' => 'escrow',
		'aggregate' =>$this->input->post('aggregate'),
		'action' =>$this->input->post('action'),
		'user_id' => $this->session->userdata('user_id'),
		'user_surename' =>$this->session->userdata('user_surename'),
		'user_email' =>$this->session->userdata('user_email'),

		

		);

	return $this->db->insert('commodity', $data);
	

}
	// posts users message to databse
public function set_outbox($outbox)
{
$this->db->insert('pm_outbox', $outbox);
}

public function set_inbox($inbox)
{
	$this->db->insert('pm_inbox', $inbox);
}

public function check_new_mail($user_id)
{

$sql = "SELECT count(message_id) AS numbers FROM pm_inbox WHERE user_id=? AND viewed='0'";
$query = $this->db->query($sql, $user_id);
return $query->result_array();
}

public function get_inbox($user_id)
{
$this->db->select('from_user_id, from_user_first_name, msg_title, msg_body, message_id, recieve_date');
$this->db->where('user_id', $user_id);
$query = $this->db->get('pm_inbox');
if($query->num_rows()>0)
	{
		return $query->result_array();
	}
else
{
	return 0;
}

}

public function get_outbox($user_id)
{	
	$this->db->select('to_user_id, to_user_first_name, msg_title, msg_body, send_date');
	$this->db->from('pm_outbox');
	$this->db->where('user_id', $user_id);
	$query = $this->db->get();
	if($query->num_rows()>0)
	{
		return $query->result_array();
	}
else
{
	return 0;
}

}

public function get_specific_inbox($user_id, $message_id)
{	
	$this->db->select('from_user_id, from_user_first_name, msg_title, msg_body, recieve_date');
$this->db->where('user_id', $user_id);
$this->db->where('message_id', $message_id);

$query = $this->db->get('pm_inbox');
if($query->num_rows()>0)
	{
		return $query->result_array();
	}
else
{
	return 0;
}

}
// checks the number of new mails
public function check_newmail_count($user_id)
{
	//$query = $this->db->query('SELECT message_id FROM pm_inbox WHERE user_id="$user_id" AND viewed="0"');
	$viewed = 0;
	$my_id = 10;
	$this->db->select('user_id');
	$this->db->from('pm_inbox');
	$this->db->where('user_id', $user_id);
	$this->db->where('viewed', $viewed);  
	$query = $this->db->get();
if($query->num_rows()>0)
{
 return $query->num_rows();
}
else
{
	return 0;
}
}

//update users inbox with response message from the other user
public function inbox_update_set($update_inbox, $message_id)

{	$this->db->select('msg_body');
	$this->db->from('pm_inbox');
	$this->db->where('message_id', $message_id);
	$this->db->insert('pm_inbox', $update_inbox);
}


public function get_convers($message_id)
{
	$this->db->select('send_date, convers_body');
	$this->db->from('convers');
	$this->db->where('message_id',$message);
	$query = $this->db->get();

	if($query->num_rows()>0)
{
 return $query->num_rows();
}
else
{
	return 0;
}
}

}

