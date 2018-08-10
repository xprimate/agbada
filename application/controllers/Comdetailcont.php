<?php
 

class Comdetailcont extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('commodity_model');
		$this->load->helper('url_helper');
		$this->load->library('table');
        $this->load->helper('array');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
		
	}

        public function view($sn=false, $detail = 'detail')
        {

        	 if ( ! file_exists(APPPATH.'views/detail/'.$detail.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
               
        }

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
        'cell_end'              => '</a></td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
												);
        $this->table->set_template($template);
        $sn;
      	// get the following  colums from the database table
		$this->table->set_heading('Commodity', ' Specie', 'Quantity', 'Price', 'Area', 'Location', 'Aggregate', 'Payment', 'Action');
      	//$data['a_row'] =  array($this->commodity_model->specific_row($specific_row));
      	//$data['specific_row'] =   $this->table->generate($data['a_row']);

      $this->session->set_userdata('sn', $sn);
        //Holds a specific row data
      	$data['a_row'] = array($this->commodity_model->row_sn($sn));
     
        $reduced_row = $data['a_row'];
        $descp= $data['a_row'];

        //extracts description text
        $data['description']=$descp[0][0]['description'];
       // passes receivers detail to an array
        $msg_data= array(
        'to_user_id'  => $descp[0][0]['user_id'],
        'to_user_email'     => $descp[0][0]['user_email'],
        'to_user_first_name' => $descp[0][0]['user_first_name']
);
         $this->session->set_userdata($msg_data);
        //extracts image name
        $data['img_name'] = $descp[0][0]['img_name'];
        (!empty($data['img_name']) ?  $data['img_src'] = "uploads/".$data['img_name'] : $data["img_src"]="uploads/default_img.jpg" );
        unset($reduced_row[0][0]['description']);
         unset($reduced_row[0][0]['img_name']);
         unset($reduced_row[0][0]['user_id']);
         unset($reduced_row[0][0]['user_email']);
         unset($reduced_row[0][0]['user_first_name']);
        $data['reduced_row'] = $reduced_row;


       // $data['row'] = array($this->commodity_model->row_sn($sn));
      
      
     
        
        //contains the table without 'description' and 'img_name'
      	$data['specific_row'] = $this->table->generate($data['reduced_row']);
       
        //$this->session->set_userdata('data', $data);
      

        $data['title'] = ucfirst($detail); // Capitalize the first letter
        $data['detail'] = $detail;

        $this->load->view('templates/header', $data);
        $this->load->view('detail/'.$detail, $data);
        $this->load->view('templates/footer', $data);
        //echo($dummy);
       

       // add to session
        $data1 = array
        (
            "description"=>array
           ($data['description']),
           "specific_row"=>array
           ($data['specific_row']),
           "title"=>array
           ($data['title']),
           "img_src"=>array
           ($data['img_src']),
           "detail"=>array
           ($detail)

            );

      
        }
        
       
        public function users_msg()
        {

        
         
        $this->load->view('detail/message');
         $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('msg_title', 'Title', 'required|min_length[2]|max_length[65]');
        $this->form_validation->set_rules('msg_body', 'Message', 'required|min_length[2]|max_length[800]');


//var_dump($this->session->userdata());


        if (isset( $_POST['submit']) && !isset($_SESSION['user_id'])) {
          echo '<h4><span class="label label-warning">Please Login before you send message.</span></h4>';
         return;
        }

          if (isset( $_POST['submit'] ) )                         // if ($this->form_validation->run() == FALSE)
        {  


          if($_SESSION['to_user_id']==$_SESSION['user_id'])
          {
             echo '<h4><span class="label label-warning">Sorry you can not send message to yourself</span></h4>';
             return;
          }

          
           if ($this->form_validation->run() == FALSE){
          
          
            
        //$this->session->set_flashdata('$error_msg', 'Please Try again, something went wrong');
       echo form_error('msg_title');
        echo form_error('msg_body');

    }



    else {
         $outbox = array('msg_title'=>$this->input->post('msg_title'),
                        'msg_body'=>$this->input->post('msg_body'),
                        'to_user_id'=>$_SESSION['to_user_id'],
                        'to_user_email'=>$_SESSION['to_user_email'],
                        'to_user_first_name'=>$_SESSION['to_user_first_name'],
                        //the user_id of  the user that sent the message
                        'user_id'=>$_SESSION['user_id']
                        );

         $inbox = array('msg_title'=>$this->input->post('msg_title'),
                        'msg_body'=>$this->input->post('msg_body'),
                        'from_user_id'=>$_SESSION['user_id'],
                        'from_user_email'=>$_SESSION['user_email'],
                        'from_user_first_name'=>$_SESSION['user_first_name'],
                        //user_id of the user that is to view the message
                        'user_id'=>$_SESSION['to_user_id']
                        );
                    $this->commodity_model->set_outbox($outbox);
                    $this->commodity_model->set_inbox($inbox);

                  echo '<h4><span class="label label-success">Message Sent</span></h4>';

    }
    

        //$this->load->view('detail/message'); 
        }
        else if(!isset( $_POST['submit'] ))
        {

        }

        }

      public function check_new_mail()
      {
       $user_id= $_SESSION['user_id'];
     $result= $this->commodity_model->check_new_mail($user_id);
     $data['new_mail']=$result;
     $data['new_mail_count']=$result['numbers'];
     return $result['numbers'];


      }

      public function check_all_mail()
      {
        $user_id= $_SESSION['user_id'];
        $result= $this->commodity_model->check_all_mail($user_id);
     $data['all_mail']=$result;
     $data['all_mail_count']=$result['numbers'];

     return $result['numbers'];


      }

public function check_outbox()
{

   $user_id= $_SESSION['user_id'];
        $result= $this->commodity_model->check_outbox($user_id);
     $data['outbox_count']=$result;
     $data['outbox_count']=$result['numbers'];
     return $result['numbers'];

}
public function check_all_mail2()
{
  return $this->commodity_model->check_all_mail2();
}







}