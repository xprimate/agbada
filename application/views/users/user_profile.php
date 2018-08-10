<?php
$user_id=$this->session->userdata('user_id');
if(!$user_id){
	redirect('user/login_view');	
}
?>
 <body>
 
<div class="container">
  <div class="row">
    <div class="col-md-4">
 
      <table class="table table-bordered table-striped">
 
 
        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>
 
        </tr>
          <tr>
            <td>User Name</td>
            <td><?php echo $this->session->userdata('user_first_name'); echo nbs(1); echo $this->session->userdata('user_surename'); ?></td>
          </tr>
          <tr>
            <td>User Email</td>
            <td><?php echo $this->session->userdata('user_email');  ?></td>
          </tr>
          
           <tr>
            <td>User ID</td>
            <td><?php echo $this->session->userdata('user_id');  ?></td>
          </tr>

          <tr>
            <td>User Phone</td>
            <td><?php echo $this->session->userdata('user_phone');  ?></td>
          </tr>
          <tr>
            <td>User Type</td>
            <td><?php echo $this->session->userdata('user_type'); ?></td>
          </tr>
          <tr>
            <td>User Address</td>
            <td><?php echo $this->session->userdata('user_address'); ?></td>
          </tr>
          <tr>
            <td>User State</td>
            <td><?php echo $this->session->userdata('user_state'); ?></td>
          </tr>
          <tr>
            <td>User Bank</td>
            <td><?php echo $this->session->userdata('user_bank'); ?></td>
          </tr>
          <tr>
            <td>User Bank Account Number</td>
            <td><?php echo $this->session->userdata('user_bank_accountNo'); ?></td>
          </tr>
      </table>
 
 
    </div>
  </div>
<a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
