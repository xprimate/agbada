<?php
echo ($specific_row);
//echo ($detail_row);





//unset($row_data[0]['description']);
//print_r($row_data);


	?>

	 <h2><b>Commodity Detail</b></h2>
	 

<?php echo $img_src;  ?>
 <div class="row">
 <div class="col-sm-6 col-md-4 col-xs-5" style="width: 25%"> <div class="thumbnail"  >
  <img alt="commodity_image"  style="height: 230px; width: 100%; display: block; " src="<?php echo base_url().$img_src ?>" >
 <div class="caption"> <h3>Commodity Image
</h3>
 <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
  </div> </div>
 </div> 

 <div class="col-sm-6 col-md-4 col-xs-8" style="width: 25%"> <div class="thumbnail">

 <h3>Commodity Description</h3>
 
  <textarea  readonly   
 style="height: 295px; width: 100%; font-size: 1.5em; display: block; font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;"
  data-holder-rendered="true">
 <?php echo($description);?>

 </textarea>
 <!-- for getting it -->
<?php echo'<span style="display:none;">';

echo $dummy+86;
echo "</span>"

?>
  
   </div> </div>

<iframe src="<?php echo site_url('detail/message/'); ?>"  frameborder="0" width="25%" height="320"   >

 <!-- for getting it -->
<?php echo'<span style="display:none;">';

echo $dummy+86;
echo "</span>";

?>
</iframe>  
 

</div>




 <style type="text/css">
    #home-link a
    {
      color: #fff;
      background-color: #337ab7;
      border-radius: 4px;
    }

 
    </style>
