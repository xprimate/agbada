<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <style>
ul.nav
{
list-style-type:none;
margin:0;
padding:0;
padding-top:6px;
padding-bottom:6px;

}
li.navx
{
display:inline;
}
a:link.nav,a:visited.nav
{
font-weight:bold;
color:#FFFFFF;
background-color:#98bf21;
text-align:center;
padding:6px;
text-decoration:none;
text-transform:uppercase;
}
a:hover.nav,a:active.nav
{
background-color:#7A991A;
}

</style>


    <title>Test Page</title>

    <!-- Bootstrap -->
    <?php 
    $this->load->helper('html');
    echo link_tag('css/bootstrap.min.css');
    echo link_tag('css/commodity_table.css');

    ?>



    <nav>
<ul class="nav"> 
 <li class="navx"><a href="#" class="nav">Home</a></li> 
<li class="navx"><a href="#" class="nav" >Link</a></li> 
<li class="navx"><a href="#" class="nav">Link</a></li>
 </ul>
 </nav>
</head>



