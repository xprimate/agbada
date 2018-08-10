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

  <div class="col-md-3 col-xs-5">

  <div class="list-group">
    <h4 class="list-group-item-heading">Enquiry From:
       <?php if($inbox_msg_row!==0)
	{ echo $inbox_msg_row[0]['from_user_first_name']; }  ?> </h4>
    <h5 class="list-group-item-text">To:  <?php echo $_SESSION['user_first_name'];?></h5>
    
  
</div>



  </div>
 

<div class="col-md-8 col-xs-5">


<div style="background-color:#ECF0FC; min-height:80px; padding: 8px; border-radius: 10px; margin-left: 20px ">
<?php 
//var_dump($msg_row);
  	// loops through the message title, body and date
if($inbox_msg_row!==0)
{
	 echo "<span style='float:right; font-size: 12px;'>";
	    //$from_user_first_name = $inbox_msg_row[0]['from_user_first_name'];
	echo $inbox_msg_row[0]['from_user_first_name']; echo nbs(2);
	 echo $inbox_msg_row[0]['recieve_date'];
	 echo "</span>";

	 echo "<br>";

  	 echo $inbox_msg_row[0]['msg_body']; echo nbs(2);
  	}
  	
  	else
  	{
  		echo "<p>Error getting Message, please try again later.</p>";
  	}

  
?>
<span style="text-align: right; float:left; font-size: 15px;"></span>
  	
</div>
<br>
<div>
<?php echo validation_errors();?>


<?php
echo $message_id;
$form_url = "messages/full_message/".$message_id;

 echo form_open_multipart($form_url);  ?>



<div  style="width: 90%; display: inline-flex;">
<textarea class="form-control" rows="3" name="msg_body" >

</textarea>
<input type="submit" class="btn btn-primary btn-sm pull-right" name="submit" value="Send"  />

</form>

</div>

</div>
</div>
</div>
</div>