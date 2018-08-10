<?php 




echo '<table id="customers" class="alt">';
echo '<tr   >';
echo '<th>Commodity</th>';
echo '<th>Species</th>';
echo '<th>Quantity</th>';
echo '<th>Price(Naira)</th>';
echo '<th>Location</th>';
echo '<th>Aggregate</th>';
echo '<th>Payment</th>';
echo '<th>Action</th>';
echo '</tr>';


?>
<?php
 foreach ($commodities as $commodity_item):?>

 
<tr class="alt" >
<td><?php echo $commodity_item['name']; ?></td>
<td><?php echo $commodity_item['specie']; ?></td>
<td><?php echo $commodity_item['quantity']; ?></td>
<td><?php echo $commodity_item['price']; ?></td>
<td><?php echo $commodity_item['lga']; echo nbs(1); echo $commodity_item['location']; ?></td>
<td><?php echo $commodity_item['aggregate']; ?></td>
<td><?php echo $commodity_item['payment']; ?></td>

<!-- links the 'action' colums data to a specific row: the 'sn' is passed to 'Comdetailcont' and used fetch a row based on 'sn'   -->
<td><a href="<?php echo site_url('comdetailcont/view/'); ?><?php echo $commodity_item['sn']; ?>"><?php echo $commodity_item['action']; ?></td>




</a>
</tr>

<?php endforeach; ?>
<?php echo $row_count; ?>

<?php //echo $pages; ?>



<!-- to make the home link active  -->
  <style type="text/css">
    #home-link a
    {
      color: #fff;
      background-color: #337ab7;
      border-radius: 4px;
    }

 
    </style>
</table>