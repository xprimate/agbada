

<head>
<style>
#aright
{
	align-content: right;
}
ul.msg
{
list-style-type:none;
margin:0;
padding:0;
}
a:link.msg,a:visited.msg
{
display:block;
font-weight:bold;
color:black;

width:120px;
text-align:center;
padding:4px;
text-decoration:none;
text-transform:uppercase;
}
a:hover.msg,a:active.msg
{
background-color:#337ab7;
}

a:link.full_msg
{

color:black;
}
</style>
</head>

<div class="container" style="border:2px solid #337ab7;">

<div class="row" >
  <div class="col-md-2 col-xs-5">
  <ul class="msg">
<li><a class="msg" href="<?php echo site_url('messages/message_home/'); ?>">Inbox<?php
//$_SESSION['newmail']=0;
 if(isset($_SESSION['newmail_count']) && $_SESSION['newmail_count']!==0) //$_SESSION['newmail']>0) $newmail_count!==0
 {
  echo "<b><font color='black'>(".$_SESSION['newmail_count'].")</font></b>";
  } ?></a></li>

<li><a class="msg" href="<?php echo site_url('messages/get_outbox/'); ?>">Sent Message</a></li>
<li><a class="msg" href="<?php echo site_url('user/user_logout/') ?>">Logout</a></li>
</ul></div>


  <div class="col-md-9 col-xs-5">
  	<?php 


  	// loops through the message title, body and date
  	if($msg_row!==0)
  	{
  	foreach ($msg_row as $row_data):?>
    <?php $message_id = $row_data['message_id']; ?>

  	<!-- creates a link for the full message --> 

  	<a class="full_msg" href="<?php echo site_url('messages/full_message/'); echo $message_id;  ?>">
  	<h5><strong><?php  echo $row_data['msg_title']; echo nbs(1)."-"; echo'<p class="text-muted" style="display:inline;">';
  	 echo substr($row_data['msg_body'], 0, 76); echo nbs(2);


    

  	if(isset($row_data['recieve_date']))
  	{
      
  	 echo $row_data['recieve_date']; echo"</p>";
  	 }
  	 else
  	 {
      
  	 	echo $row_data['send_date']; echo"</p>";
  	 }
  	
  

  	 ?>

  	 </strong></h5></a>


  
 
<?php endforeach; }  // end of 'foreach' and the mother 'if' statement

else
{
	echo "<h3>You have no Message</h3>";
}
 ?>

</div>
</div>
</div>


