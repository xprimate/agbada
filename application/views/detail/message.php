<?php
$this->load->helper('html');
 echo link_tag('css/bootstrap.min.css');  ?>


<div class="col-sm-6 col-md-4"> 



 <?php echo validation_errors();?>

<?php echo form_open('Comdetailcont/users_msg'); ?>



<?php 

 echo $this->session->flashdata('error_msg'); ?>


<div class="thumbnail"  >

 <div class="caption"> <h3>Message to <?php echo $_SESSION['to_user_first_name'] ?></h3>
 <input type="text" class="form-control" name="msg_title" placeholder="Title" value="<?php echo set_value('msg_title'); ?>" autofocus>
 <br>
 <textarea class="form-control" name="msg_body" rows="3" placeholder="Message" value="<?php echo set_value('msg_body'); ?>" autofocus></textarea>
<br>
<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Send"   />

</div>
</div>
</form>


</div>