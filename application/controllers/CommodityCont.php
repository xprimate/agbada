<?php
$form_valid=FALSE;

 $template = array(
        'table_open'            => '<table id="customers" border="1" cellpadding="4" cellspacing="0">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr class="alt">',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

class CommodityCont extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('commodity_model');
		$this->load->helper('url_helper');
		$this->load->library('table');
		$this->load->library('session');
		//$this->load->library('pagination');
	}



	public function index()
	{

		
	   $data['commodities'] = $this->commodity_model->get_commodity();
	   $data['row_count'] = $this->commodity_model->row_count();
	  // $comd = array($this->commodity_model->get_commodity());
	  // $row_count = array($this->commodity_model->row_count());
	  // $data['commodities'] = print_r(array_merge($comd, $row_count));
	
		
		$data['title'] = ucfirst('home'); 

	// for pagination
		//$this->load->library('pagination');
		//$config['base_url'] = 'http://localhost/agabda/index.php/CommodityCont/index/';
			//$config['total_rows'] = 9;
			//$config['per_page'] = 4;

			//$this->pagination->initialize($config);
			//echo $this->pagination->create_links();
	

	$this->load->view('templates/header', $data);
	$this->load->view('commodities/index', $data);
	$this->load->view('templates/footer', $data);

	}
	


	public function create()
	{
$user_id=$this->session->userdata('user_id');
if($user_id){
		

		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['error'] = ' ';

		$data['title'] = 'Post New Commodity';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('specie', 'specie');
		$this->form_validation->set_rules('quantity', 'Quantity', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('location', 'Location');
		//$this->form_validation->set_rules('userfile', 'Image', 'callback_do_upload');
		$this->form_validation->set_rules('userfile', 'Image', '');
		$this->form_validation->set_rules('description', 'Description', 'required');

		$this->form_validation->set_rules('action', 'Action', 'required');
		$this->form_validation->set_rules('lga', 'LGA or Place', 'required');

		//$this->form_validation->set_rules('aggregate', 'Aggregate', 'required');
		$this->form_validation->set_rules('payment', 'Payment Method');

		if ($this->form_validation->run() == FALSE)
		{
		    
			 
			$this->load->view('templates/header', $data);
			$this->load->view('commodities/create');
			$this->load->view('templates/footer');
		}

		else if ($this->do_upload()==FALSE) {
			//$this->load->view('templates/header', $data);
			//$this->load->view('commodities/create');
			//$this->load->view('templates/footer');

			break;
			# code...
		}
		else
		{	

			$this->commodity_model->set_comd();
			$this->load->view('commodities/success');
		}

	}
	else
	{
		$this->session->set_flashdata('error_msg', 'Please Login First');
		redirect('user/login_view');

	}


	}
		// method for uoloading the image
	public function do_upload()
	{			

				//$user_id =$this->session->userdata('user_id');
				$this->load->helper('string');
				$img_id=random_string('alnum', 16);
				$file_ext= ".jpg";
				$name=$this->input->post('name');

		  		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 600;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name']			= $name.$img_id.$file_ext;
                $config['overwrite']			=FALSE;
                $config['detect_mime']			=TRUE;

               
                $this->load->library('upload', $config);

               
                if (! $this->upload->do_upload('userfile'))

                {		

                        $error = array('error' => $this->upload->display_errors());
                        

                        //$this->load->view('upload_form', $error);
                	$this->form_validation->set_message('userfile', $error);
                        return FALSE;

                }
                
                 else
                {
                	return TRUE;
                }
	}




	public function test()
	{
		$this->load->view('pages/test');
	}
 


}