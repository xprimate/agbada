
<?php $this->load->helper('html'); 
echo link_tag('application/css/bootstrap.css');
 ?>
 
<?php echo validation_errors(); ?>


<?php echo form_open('market/marketpost'); ?>

<div style=" margin-left: 10px">
<label for="title">Title</label>
<input type="input" name="title" size="84" /><br /><br />


<label for="text" style="vertical-align: 100px">Body</label>
<textarea rows="8" cols="80" name="text"></textarea><br /><br/>


<input  type="submit" name="submit" value="Post Commodity" style="margin-left: 36px" />
</div>

</form>

<style type="text/css">
    #market-link a
    {
      color: #fff;
      background-color: #337ab7;
      border-radius: 4px;
    }

     	p
     	{
     		color:red;
     		
     	}
    </style>
