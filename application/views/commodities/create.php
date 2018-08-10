


<div style=" font-size: 30px; margin-left: 80px; line-height: 50px;">
<?php echo validation_errors();?>
<?php  echo $error;?>
<?php echo form_open_multipart('commodities/create'); ?>

<?php
 $login_error=$this->session->flashdata('login_error');
                  if($login_error){
                    echo $login_error;
                  }
 ?>
<label for="name">Commodity Name</label>
<input type="input" name="name" size="40" placeholder="E.g Rice, beans, cassava ..." /><br />

<label for="specie">Specie</label>
<input type="input" name="specie" size="40" placeholder="E.g brown beans, yellow garri ..." /><br />

<label for="quantity">Quantity</label>
<input type="input" name="quantity" size="40" placeholder="E.g 200kg, 1 tonne, 50 bags(50kg each)..."  /><br/>

<label for="price">Price(Naira)</label>
<input type="input" name="price" size="40"  /><br/>

<label for="location">Location of Commodity
<select name="location">
<option value="state" selected>Select State</option>
  <option value="abia">Abia</option>
   <option value="abuja">Abuja</option>
    <option value="adamawa">Adamawa</option>
     <option value="akwa-ibom">Akwa-Ibom</option>
      <option value="anambara">Anambara</option>
       <option value="bauchi">Bauchi</option>
       <option value="bayelsa">Bayelsa</option>
       <option value="benue">Benue</option>
       <option value="borno">Borno</option>
       <option value="cross-river">Cross River</option>
       <option value="delta">Delta</option>
       <option value="ebonyi">Ebonyi</option>
       <option value="edo">Edo</option>
       <option value="ekiti">Ekiti</option>
       <option value="enugu">Enugu</option>
       <option value="gombe">Gombe</option>
       <option value="imo">Imo</option>
       <option value="jigawa">Jigawa</option>
       <option value="kaduna">Kaduna</option>
       <option value="kano">Kano</option>
       <option value="katsina">Katsina</option>
       <option value="kebbi">Kebbi</option>
       <option value="kogi">Kogi</option>
       <option value="kwara">Kwara</option>
       <option value="lagos">Lagos</option>
       <option value="nassarawa">Nassarawa</option>
       <option value="niger">Niger</option>
       <option value="ogun">Ogun</option>
       <option value="ondo">Ondo</option>
        <option value="osun">Osun</option>
        <option value="oyo">Oyo</option>
        <option value="plateau">Plateau</option>
        <option value="rivers">Rivers</option>
        <option value="sokoto">Sokoto</option>
        <option value="taraba">Taraba</option>
        <option value="yobe">Yobe</option>
        <option value="zamfara">Zamfara</option>


</select>
</label>
<label for="lga">LGA or Place
<input type="input" name="lga" size="40" placeholder="E.g Kaura, Nineth-mile..." />
</label>
<br />
<!-- file upload -->
<div>
<label for="userfile">Commodity Image
<input type="file" name="userfile" size="20" />
</label>
</div>

<div>
Commodity Description
<textarea class="form-control" name="description" placeholder="Text input" rows="3" ></textarea>
</div>



<label  for="aggregade" class="radio-inline">Aggregate

  <label for="no" class="radio-inline" />
    <input  type="radio" name="aggregate" id="optionsRadios1" value="No" checked />
    No
  </label>

  <label for="yes" class="radio-inline" >
    <input type="radio" name="aggregate" id="optionsRadios2" value="Yes" />
    Yes
  </label>
<br/>
<div>
<h2>Places you can Deliver and Cost:</h2>
<div class="checkbox" >
<h3>
  <label>
    <input type="checkbox" value="chb_withen_state">
    Withen The state:Cost
     <input type="input" name="withen_state" size="10" value="<?php echo set_value('withen_state'); ?>"> 
  Delivery Time<select name="days">
       <option value="one day">One day</option>
        <option value="Two days">Two days</option>
         <option value="Three days">Three days</option>
          <option value="Four days">Four days</option>
           <option value="Five days">Five days</option>
            <option value="Six days">Six days</option>
             <option value="Seven days">Seven days</option>
              <option value="One month">One months</option>
              <option value="Two month">Two months</option>
              <option value="Three month">Three months</option>
              <option value="Four month">Four months</option>

     </select>
     
     </input>
  </label>
  </h3>
</div>

<div class="checkbox" >
  <label><h3>
    <input type="checkbox" value="chb_outside_state">
    To other States: Price: <input type="input" name="outside_state" size="10" value="<?php echo set_value('outside_state'); ?>" /> 
 </h3> </label>
</div>

<div class="checkbox" >
  <label><h3>
    <input type="checkbox" value="chb_buyer_pickup">
    Buyers can come Pickup: Pickup Address<input type="text" name="buyer_pickup" size="40" value="<?php echo set_value('outside_state'); ?>" /> 
 </h3> </label>
</div>


</div>



<label  for="aggregate">Users can:</label>

<div class="radio">
  <label>
    <input  type="radio" name="action" id="optionsRadios1" value="Buy" checked>
    Buy(fixed price)
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="action" id="optionsRadios2" value="bargain">
    Bargain
  </label>
</div>

<label for="paymentMethod">Payment</label>
<input type="input" name="payment" size="4" disabled="yes" value="<?php echo set_value('payment', 'Escrow'); ?>" /><br/><br/>


<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Send"  />



</form>


</div>

<style type="text/css">
    #post-link a
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


