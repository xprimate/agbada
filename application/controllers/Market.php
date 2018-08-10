<?php
class Market extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('market_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{



		
		$data['market'] = $this->market_model->get_market();
		$data['title'] = 'Market Analysis Archive';

		$this->load->view('templates/header', $data);
		$this->load->view('market/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL)
	{
		$data['market_item'] = $this->market_model->get_market($slug);
		if (empty($data['market_item']))
		{
			show_404();
		}
		$data['title'] = $data['market_item']['title'];
		$this->load->view('templates/header', $data);
		$this->load->view('market/view', $data);
		$this->load->view('templates/footer');

	}

	public function marketPost()// method to post commodity market infomation/guides
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Post an Article';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
	
	if($this->form_validation->run() ===FALSE)
	{
	$this->load->view('templates/header', $data);
	$this->load->view('market/marketPost');
	$this->load->view('templates/footer');
	}
	else
	{
		$this->market_model->set_marketPost();
		$this->load->view('market/success');
	}

}	}

