<?php 
class Messages extends CI_Controller {

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

    public function message_home()

{
        if(isset($_SESSION['user_id'])){
           $data['msg_row'] =$this->commodity_model->get_inbox($_SESSION['user_id']);
           if($data['msg_row']!==0)
           {
        $data['title'] = ucfirst("Message"); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('messages/message_home', $data);
        $this->load->view('templates/footer', $data);
    }
    else
    {
       
         $data['title'] = ucfirst("Message"); // Capitalize the first letter
         $this->load->view('templates/header', $data);
        $this->load->view('messages/message_home', $data);
        $this->load->view('templates/footer', $data);
         
         return;

    }

    }
    else
    {
                    $this->session->set_flashdata('error_msg', 'Please Login fist');
                    redirect('user/login_view');
    }

}


public function get_outbox()
{
     if(isset($_SESSION['user_id'])){
    $data['msg_row'] =$this->commodity_model->get_outbox($_SESSION['user_id']);
    if($data['msg_row']!==0)
    {
    var_dump($data['msg_row']);
     $data['title'] = ucfirst("Message"); // Capitalize the first letter

     $this->load->view('templates/header', $data);
        $this->load->view('messages/message_home', $data);
        $this->load->view('templates/footer', $data);
    }
    else
    {    
        
         $data['title'] = ucfirst("Message"); // Capitalize the first letter
         $this->load->view('templates/header', $data);
        $this->load->view('messages/message_home', $data);
        $this->load->view('templates/footer', $data);
        
        return;
    }
}

else
{
     $this->session->set_flashdata('error_msg', 'Please Login fist');
                    redirect('user/login_view');
}

}


public function full_message($message_id)
{
    if (isset($_SESSION['user_id'])) {
    
   echo $message_id;

    $data['title'] = ucfirst("Message Detail"); // Capitalize the first letter
    
     $data['inbox_msg_row'] =$this->commodity_model->get_specific_inbox($_SESSION['user_id'], $message_id);
     echo current_url();
     $data['message_id'] =  substr(current_url(), 46);


    $this->load->view('templates/header', $data);
    $this->load->view('messages/full_message', $data);
    $this->load->view('templates/footer', $data);

   
    //echo current_url();
        }
         else{ redirect('user/login_view');}

//}

//public function convers()
//{ 
        //$this->load->view('detail/message');
         $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('msg_body', 'Message', 'required|min_length[2]|max_length[200]');

        if (isset( $_POST['submit']) && !isset($_SESSION['user_id'])) {
          echo '<h4><span class="label label-warning">Please Login before you send message.</span></h4>';
         return;
        }

          if (isset( $_POST['submit'] ) )                         // if ($this->form_validation->run() == FALSE)
        {  
          
           if ($this->form_validation->run() == FALSE){
        echo form_error('msg_body');
        }
    else {
      

        $msg_body_append =$this->input->post('msg_body');
     // $data['msg_body_append'] = $this->input->post('msg_body');

        // $update_inbox = array('receiver_first_name' =>$_SESSION['user_first_name'],
                      //  'convers_body'=>$this->input->post('msg_body'),
                       // 'receiver_email'=>$_SESSION['user_email'],
                       // );

                    $update_inbox = array('msg_body' => $this->input->post('msg_body'));
                    $this->commodity_model->inbox_update_set($update_inbox, $message_id);
                  echo '<h4><span class="label label-success">Message Sent</span></h4>';




         }
    
        }
        else if(!isset( $_POST['submit'] ))
        {

        }

        }

public function append_msg()
{
    if(isset($msg_body_append))
    {
    $data['msg_body_append'] =$msg_body_append;
    }
}


    }


