<?php
class Market_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();

	}
// gets market information post from the database
	public function get_market($slug=FALSE)
	{
		if($slug===FALSE)
		{
			$query = $this->db->get('market');
			return $query->result_array();
		}

		$query = $this->db->get_where('market', array('slug'=>$slug));
		return $query->row_array();
	}

	public function set_marketPost()
	{
		$this->load->helper('url');
		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' =>$this->input->post('text')
			);
		return $this->db->insert('market', $data);
	}

}