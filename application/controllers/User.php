<?php 
class User extends CI_Controller{

	public function __construct(){
		parent::__construct();
			$this->load->helper('url');
			$this->load->helper('url_helper');
			$this->load->model('user_model');
			$this->load->library('session');
			$this->load->model('commodity_model');
		
	}

public function index()
{
	
$this->load->helper('form');
$this->load->library('form_validation');

   $data['title'] = ucfirst('Register');

	$this->load->view('templates/header', $data);
	$this->load->view('users/register.php');
	$this->load->view('templates/footer');
}

public function register_user(){
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');

$data['title'] = 'Register';
$this->form_validation->set_rules('user_first_name', 'User first Name', 'trim|required|max_length[15]');
$this->form_validation->set_rules('user_surename', 'User Surename', 'trim|required|max_length[15]');


$this->form_validation->set_rules('user_password', 'Password', 'trim|required|min_length[5]|max_length[20]' );
$this->form_validation->set_rules('user_password-retype', 'Retype password', 'trim|required|matches[user_password]');
$this->form_validation->set_rules('user_email', 'User Email', 'trim|valid_email|required|callback_email_unique[users.user_email]');
$this->form_validation->set_rules('user_state', 'User State', 'required|callback_select_state[$this->input->post("user_state")]');
$this->form_validation->set_rules('user_address', 'Address', 'trim|required|min_length[5]|max_length[60]');
$this->form_validation->set_rules('user_phone', 'Phone Number', 'required|integer|min_length[6]|max_length[15]');
$this->form_validation->set_rules('user_type', '', '');
$this->form_validation->set_rules('user_bank_sell', 'Bank Name', 'callback_select_bank_sell[$this->input->post("user_bank_sell"),$this->input->post("user_type")]');
$this->form_validation->set_rules('user_bank_buy_sell', 'Bank Name', 'callback_select_bank_buy_sell[$this->input->post("user_bank_buy_sell"),$this->input->post("user_type")]');

$this->form_validation->set_rules('user_bank_accountNo_sell', 'Bank Account Number', 'trim|callback_is_sell_empty[$this->input->post("user_type"), $this->input->post("user_bank_accountNo_sell")]|integer|exact_length[10]' );
if($this->input->post("user_type")=='sell')
{
$this->form_validation->set_rules('user_bank_accountNo_retype_sell', 'Re-typeSell Account Number', 'trim|matches[user_bank_accountNo_sell]' );
}
$this->form_validation->set_rules('user_bank_accountNo_buy_sell', 'Bank Account Number', 'trim|callback_is_buy_sell_empty[$this->input->post("user_type"), $this->input->post("user_bank_accountNo_buy_sell")]|integer|exact_length[10]' );
if($this->input->post("user_type")=='Buy and Sell')
{
$this->form_validation->set_rules('user_bank_accountNo_retype_buy_sell', 'Re-typeBuySell Account Number', 'trim|matches[user_bank_accountNo_buy_sell]' );
}


$user_bank_sell=$this->input->post('user_bank_sell');
$user_bank_buy_sell=$this->input->post('user_bank_buy_sell');

$user_bank_accountNo_sell=$this->input->post('user_bank_accountNo_sell');
$user_bank_accountNo_buy_sell=$this->input->post('user_bank_accountNo_buy_sell');



$users=array(
'user_first_name'=>$this->input->post('user_first_name'),
'user_surename'=>$this->input->post('user_surename'),
'user_email'=>$this->input->post('user_email'),
'user_password'=>md5($this->input->post('user_password')),
'user_state'=>$this->input->post('user_state'),
'user_address'=>$this->input->post('user_address'),
'user_phone'=>$this->input->post('user_phone'),
'user_type'=>$this->input->post('user_type'));
//'user_bank_accountNo'=>$this->input->post('user_bank_accountNo'));


//checks to see if the bank selected is by a 'sell' user or  by a 'buy and sell' user and save it.
if($users['user_type']=='sell' )
{
	$users['user_bank']='';
	$users['user_bank']=$user_bank_sell;
}
else
{	$users['user_bank']='';
	$users['user_bank']=$user_bank_buy_sell;
}


// checks to see if the account no. type is by a 'sell' user or a 'buy and sell user' and save it.
if($users['user_type']=='sell')
{	
	//may bug out
	//$users['user_bank_accountNo']='';
	$users['user_bank_accountNo']=$user_bank_accountNo_sell;
}
else
{
	$users['user_bank_accountNo']='';
	$users['user_bank_accountNo']=$user_bank_accountNo_buy_sell;
}

print_r($users);



  if ($this->form_validation->run() == FALSE)
                {		

                		$this->load->view('templates/header', $data);
                        $this->load->view('users/register');
                        $this->load->view('templates/footer');
                }
                else
                {
                	$this->user_model->register_user($users);
					$this->session->set_flashdata('success_message', 'Registered Successfully. Now login to your account');
					redirect('user/login_view');
               }
}

// makes sure the email has not been registered before
public function email_unique($user_email)
{
		$email_unique=$this->user_model->email_check($user_email);
	if($email_unique==FALSE)
	{
		$this->form_validation->set_message('email_unique', 'The email you typed is in use');
                        return FALSE;
	}
		else
		{
			return TRUE;
		}
}

 public function select_state($str)
        {
                if ($str == 'Select State of Residence')
                {
                        $this->form_validation->set_message('select_state', 'Please Select State of Residence from the drop down menu');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

//checks to see if 'Select Your Bank' is  selected and if the selected radio button is 'Buy and Sell'
 public function select_bank_sell($str, $user_type)
        {
                if ($str == 'Select Your Bank' && $user_type=='sell')
                {
                        $this->form_validation->set_message('select_bank', 'Please Select your bank from the drop down menu');
                        return FALSE;
                }
                else
                {
                        return TRUE; 
                }
        }

//checks to see if 'Select Your Bank' is  selected and if the selected radio button is 'sell'
public function select_bank_buy_sell($str, $user_type)
{
	 if ($str == 'Select Your Bank' && $user_type=='Buy and Sell')
                {
                        $this->form_validation->set_message('select_bank', 'Please Select your bank from the drop down menu');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
}

// to check if the 'user_bank_accountNo_sell'  field is empty
public function is_sell_empty($user_type, $user_bank_accountNo_sell)
{
	if($user_type=='sell' && empty($user_bank_accountNo_sell))
	{
		$this->form_validation->set_message('user_bank_accountNo_sell', 'Bank Account Number field is required');
		return FALSE;
	}
	else
	{
		return TRUE;
	}
}

// to check if the 'user_bank_accountNo_buy_sell' field is empty
public function is_buy_sell_empty($user_type, $user_bank_accountNo_buy_sell)
{
	if($user_type=='sell' && empty($user_bank_accountNo_buy_sell))
	{
		$this->form_validation->set_message('user_bank_accountNo_buy_sell', 'Bank Account Number field is required');
		return FALSE;
	}
	else
	{
		return TRUE;
	}
}


public function login_view(){

	$data['title'] = ucfirst('Login');
	$this->load->view('templates/header', $data);
	$this->load->view('users/login.php');
	$this->load->view('templates/footer');
}


function login_user(){






	$user_login=array(

'user_email'=>$this->input->post('user_email'),
'user_password'=>md5($this->input->post('user_password')));
	$data=$this->user_model->login_user($user_login['user_email'], $user_login['user_password']);

	if($data)
	{
		$this->session->set_userdata('user_id', $data['user_id']);
		$this->session->set_userdata('user_email', $data['user_email']);
		$this->session->set_userdata('user_first_name', $data['user_first_name']);
		$this->session->set_userdata('user_surename', $data['user_surename']);
		$this->session->set_userdata('user_phone', $data['user_phone']);
		$this->session->set_userdata('user_phone', $data['user_phone']);
		$this->session->set_userdata('user_address', $data['user_address']);
		$this->session->set_userdata('user_state', $data['user_state']);
		$this->session->set_userdata('user_type', $data['user_type']);
		$this->session->set_userdata('user_bank', $data['user_bank']);
		$this->session->set_userdata('user_bank_accountNo', $data['user_bank_accountNo']);

		$this->session->set_userdata('newmail_count', $this->check_newmail_count($data['user_id'])); 
		//$data['newmail_count'] = $this->check_newmail_count($data['user_id']);


		$data['title'] = ucfirst('Dash Board');
		$this->load->view('templates/header', $data);
		$this->load->view('users/user_profile.php');
		$this->load->view('templates/footer');
		//unset($_SESSION['error_msg']);
		
	}

	else{
		$this->session->set_flashdata('error_msg', 'Error occured, Try again.');
		$data['title'] = ucfirst('Login');

		$this->load->view('templates/header', $data);
		$this->load->view('users/login.php');
		$this->load->view('templates/footer');

	}
}

function user_profile(){

	$data['title'] = ucfirst('Dash Board');
	$this->load->view('templates/header', $data);
		$this->load->view('users/user_profile');
	$this->load->view('templates/footer');

}



public function user_logout(){

		$this->session->sess_destroy();

	$this->load->view('templates/header');
	
	redirect('user/login_view', 'refresh');
	$this->load->view('templates/footer');
}


public function check_newmail_count($user_id)
{
  return $this->commodity_model->check_newmail_count($user_id);
}



}

?>