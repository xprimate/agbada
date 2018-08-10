<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  

    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <?php 
    $this->load->helper('html');
    echo link_tag('css/bootstrap.min.css');
    echo link_tag('css/commodity_table.css');

    ?>

   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  <body>
<!-- sub navigation bar-->
<nav>
<ul style="list-style-type:none;
text-align: right;
margin:0;
padding:0;
padding-top:2px;
padding-bottom:2px;
font-size:1.4em;"> 
<li style="display: inline">Hotline 0806603434</li>
 <li style="display: inline;" >
 <a href="<?php
 // wether to link to login or logout
if(isset($_SESSION["'user_id'"]))
{
  echo site_url('user/user_logout/');
}
else
{
  echo site_url('user/login_view/');
}

 ?>"style="a:link:font-weight:bold;
color:#000;
background-color:#EAF2D3;
text-align:right;
padding:2px;
text-decoration:none;
text-transform:uppercase;" >

<?php
// wether to display login or logout
if(isset($_SESSION['user_id']))
{
  echo 'logout';
}
else if(!isset($_SESSION['user_id']))
{
  echo 'login';
}
else
{
}
 ?></a></li> 


<li style="display: inline;" ><a class="top_bar" href="<?php echo site_url('messages/message_home/'); ?>" style="a:link:font-weight:bold;
color:#000;
background-color:#EAF2D3;
text-align:right;
padding:2px;
text-decoration:none;
text-transform:uppercase;" >Messages<?php
//$_SESSION['newmail']=0;
 if(isset($_SESSION['newmail_count']) && $_SESSION['newmail_count']!==0) //$_SESSION['newmail']>0) $newmail_count!==0
 {
  echo "<b><font color='red'>(".$_SESSION['newmail_count'].")</font></b>";
  } ?></a></li> 
<li style="display: inline;" ><a href="#" class="top_bar"  style="
background-color:#EAF2D3;
text-align:right;
padding:2px;
text-decoration:none;
text-transform:uppercase;" >Contact</a></li>

 </ul>
 </nav>

<br />

<nav class="navbar">
<div class="container-fluid">

  <!-- main navigation bar -->
 
 <ul class="nav nav-justified  nav-pills">
  <li role="presentation" id="home-link"><a href="<?php echo site_url(); ?>">Home</a></li>
  <li role="presentation" id="post-link"><a href="<?php echo site_url('commodities/create/'); ?>">Post Commodity</a></li>
  <li role="presentation" id="market-link"><a href="<?php echo site_url('market/'); ?>">Market Analysis</a></li>
</ul>
</div>
</nav>

 

 <?php

 //to check if the row count is available from the CommodityCount index method(for testing)
 if( isset($GLOBALS['row_count']))

{
// echo  '<p>'.'The new count is'.$row_count.'</p>'; 
}

?>

<?php 
if (!empty($title))
{
echo '<h2>'.$title.'</h2>';
}
 ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


 <style>
a:hover.top_bar,a:active.top_bar
{
background-color:#7A991A;
}
 </style>
 

