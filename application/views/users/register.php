
<span style="background-color: red">
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
<div class="col-md-8 col-md-offset "><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
<div class="login-panel panel panel-success  ">
                  <div class="panel-heading">
                      <h3 class="panel-title">Registration</h3>
                  </div>
                  <div class="panel-body">

                 

  <?php
  $error_msg=$this->session->flashdata('error_msg');
  if($error_msg){echo $error_msg;}
?>
					 <?php echo validation_errors();?>
					<?php echo form_open('User/register_user'); ?>

                      
                          <fieldset>
                              <div class="form-group ">
                                  <input class="form-control" placeholder="First Name" name="user_first_name" value="<?php echo set_value('user_first_name'); ?>" type="text" autofocus>
                                   <div class="form-group ">
                                  <input class="form-control" placeholder="Surename" name="user_surename" value="<?php echo set_value('user_surename'); ?>" type="text" autofocus>
                              </div>
 
                              <div class="form-group">
                                  <input class="form-control" placeholder="E-mail" name="user_email" value="<?php echo set_value('user_email'); ?>" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                                   <input class="form-control" placeholder="Retype Password" name="user_password-retype" type="password" value="">
                              </div>

                              <div class="form-group">

                            

                                  
                                  <select name="user_state">
<option >Select State of Residence</option>
  <option value="abia" <?php echo  set_select('user_state', 'abia'); ?> >Abia</option>
   <option value="abuja" <?php echo  set_select('user_state', 'abuja'); ?> >Abuja</option>
    <option value="adamawa" <?php echo  set_select('user_state', 'adamawa'); ?> >Adamawa</option>
     <option value="akwa-ibom" <?php echo  set_select('user_state', 'akwa-ibom'); ?> >Akwa-Ibom</option>
      <option value="anambara" <?php echo  set_select('user_state', 'anambara'); ?> >Anambara</option>
       <option value="bauchi"<?php echo  set_select('user_state', 'bauchi'); ?> >Bauchi</option>
       <option value="bayelsa" <?php echo  set_select('user_state', 'bayelsa'); ?> >Bayelsa</option>
       <option value="benue" <?php echo  set_select('user_state', 'benue'); ?> >Benue</option>
       <option value="borno" <?php echo  set_select('user_state', 'borno'); ?> >Borno</option>
       <option value="cross-river" <?php echo  set_select('user_state', 'cross-river'); ?> >Cross-River</option>
       <option value="delta" <?php echo  set_select('user_state', 'delta'); ?> >Delta</option>
       <option value="ebonyi" <?php echo  set_select('user_state', 'ebonyi'); ?> >Ebonyi</option>
       <option value="edo" <?php echo  set_select('user_state', 'edo'); ?> >Edo</option>
       <option value="ekiti" <?php echo  set_select('user_state', 'ekiti'); ?> >Ekiti</option>
       <option value="enugu" <?php echo  set_select('user_state', 'enugu'); ?> >Enugu</option>
       <option value="gombe" <?php echo  set_select('user_state', 'gombe'); ?> >Gombe</option>
       <option value="imo" <?php echo  set_select('user_state', 'imo'); ?> >Imo</option>
       <option value="jigawa" <?php echo  set_select('user_state', 'jigawa'); ?> >Jigawa</option>
       <option value="kaduna" <?php echo  set_select('user_state', 'kaduna'); ?> >Kaduna</option>
       <option value="kano" <?php echo  set_select('user_state', 'kano'); ?> >Kano</option>
       <option value="katsina" <?php echo  set_select('user_state', 'katsina'); ?> >Katsina</option>
       <option value="kebbi" <?php echo  set_select('user_state', 'kebbi'); ?> >Kebbi</option>
       <option value="kogi" <?php echo  set_select('user_state', 'kogi'); ?> >Kogi</option>
       <option value="kwara" <?php echo  set_select('user_state', 'kwara'); ?> >Kwara</option>
       <option value="lagos" <?php echo  set_select('user_state', 'lagos'); ?> >Lagos</option>
       <option value="nassarawa" <?php echo  set_select('user_state', 'nassarawa'); ?> >Nassarawa</option>
       <option value="niger" <?php echo  set_select('user_state', 'niger'); ?> >Niger</option>
       <option value="ogun" <?php echo  set_select('user_state', 'ogun'); ?> >Ogun</option>
       <option value="ondo" <?php echo  set_select('user_state', 'ondo'); ?> >Ondo</option>
        <option value="osun" <?php echo  set_select('user_state', 'osun'); ?> >Osun</option>
        <option value="oyo" <?php echo  set_select('user_state', 'oyo'); ?> >Oyo</option>
        <option value="plateau" <?php echo  set_select('user_state', 'plateau'); ?> >Plateau</option>
        <option value="rivers" <?php echo  set_select('user_state', 'rivers'); ?> >Rivers</option>
        <option value="sokoto"<?php echo  set_select('user_state', 'sokoto'); ?> >Sokoto</option>
        <option value="taraba" <?php echo  set_select('user_state', 'taraba'); ?> >Taraba</option>
        <option value="yobe" <?php echo  set_select('user_state', 'yobe'); ?> >Yobe</option>
        <option value="zamfara" <?php echo  set_select('user_state', 'zamfara'); ?> >Zamfara</option>
							</select>
							
                              </div>
 
                              <div class="form-group">
                                  <input class="form-control" placeholder="Address" name="user_address" type="address"   value="<?php echo set_value('user_address'); ?>">

                              </div>


								<div class="radio">
								  <label>
								    <input  type="radio" name="user_type" id="optionsRadios1" value="buy" <?php echo  set_radio('user_type', 'buy', TRUE); ?> />
								    I want to Buy commodity
								  </label>
								</div>
								<div class="radio form-inline" >
								  <label>
								    <input type="radio" name="user_type" id="optionsRadios2" value="sell" <?php echo  set_radio('user_type', 'sell'); ?> />
								    I want to sell commodity

								    <div class="reveal-if-active" >
								    <select name="user_bank_sell">
								    <option >Select Your Bank</option>
								     <option value="Access Bank Plc"  <?php echo  set_select('user_bank_sell', 'Access Bank Plc'); ?>  >Access Bank Plc</option>
								     <option value="Citibank Nigeria Limited" <?php echo  set_select('user_bank_sell', 'Citibank Nigeria Limited'); ?> >Citibank Nigeria Limited </option>
								     <option value="Diamond Bank Plc" <?php echo  set_select('user_bank_sell', 'Diamond Bank Plc'); ?> >Diamond Bank Plc</option>
								     <option value="Ecobank Nigeria Plc"  <?php echo  set_select('user_bank_sell', 'Ecobank Nigeria Plc'); ?> >Ecobank Nigeria Plc</option>
								     <option value="Enterprise Bank"  <?php echo  set_select('user_bank_sell', 'Enterprise Bank'); ?>  >Enterprise Bank</option>
								     <option value="Fidelity Bank Plc" <?php echo  set_select('user_bank_sell', 'Fidelity Bank Plc'); ?>  >Fidelity Bank Plc</option>
								     <option value="First Bank Nigeria Plc" <?php echo  set_select('user_bank_sell', 'First Bank Nigeria Plc'); ?> > First Bank Nigeria Plc</option>
								     <option value="First City Monument Bank" <?php echo  set_select('user_bank_sell', 'First City Monument Bank'); ?>  >First City Monument Bank</option>
								     <option value="Guaranty Trust Bank Plc" <?php echo  set_select('user_bank_sell', 'Guaranty Trust Bank Plc'); ?> >Guaranty Trust Bank Plc(GTB)</option>
								     <option value="Heritage Bank Company Limited"  <?php echo  set_select('user_bank_sell', 'Heritage Bank Company Limited'); ?>  >Heritage Bank Company Limited</option>
								     <option value="Key Stone Bank" <?php echo  set_select('user_bank_sell', 'Key Stone Bank'); ?> >Key Stone Bank</option>
								     <option value="MainStreet Bank"  <?php echo  set_select('user_bank_sell', 'MainStreet Bank'); ?> >MainStreet Bank</option>
								     <option value="Sky Bank Plc" <?php echo  set_select('user_bank_sell', 'Sky Bank Plc'); ?> >Sky Bank Plc</option>
								     <option value="Stanbic IBTC Bank Ltd" <?php echo  set_select('user_bank_sell', 'Stanbic IBTC Bank Ltd'); ?> >Stanbic IBTC Bank Ltd</option>
								     <option value="Standard Chartered Bank Nigeria Ltd" <?php echo  set_select('user_bank_sell', 'Standard Chartered Bank Nigeria Ltd'); ?>>Standard Chartered Bank Nigeria Ltd</option>
								     <option value="Sterling Bank Plc" <?php echo  set_select('user_bank_sell', 'Sterling Bank Plc'); ?>>Sterling Bank Plc</option>
								     <option value="SunTrust Bank Nigeria Limited" <?php echo  set_select('user_bank_sell', 'SunTrust Bank Nigeria Limited'); ?>>SunTrust Bank Nigeria Limited</option>
								     <option value="Union Bank of Nigeria Plc"  <?php echo  set_select('user_bank_sell', 'United Bank for Africa Plc'); ?> >Union Bank of Nigeria Plc</option>
								     <option value="United Bank for Africa Plc" <?php echo  set_select('user_bank_sell', 'Sky Bank Plc'); ?> >United Bank for Africa Plc(UBA)</option>
								     <option value="Unity Bank Plc"  <?php echo  set_select('user_bank_sell', 'Unity Bank Plc'); ?> >Unity Bank Plc</option>
								     <option value="Wema Bank Plc" <?php echo  set_select('user_bank_sell', 'Wema Bank Plc'); ?> >Wema Bank Plc</option>
								     <option value="Zenith Bank Plc" <?php echo  set_select('user_bank_sell', 'Zenith Bank Plc'); ?>  >Zenith Bank Plc</option>
								    </select>
								       <input class="form-control"   placeholder="Type your Bank account Number " name="user_bank_accountNo_sell" type="tel"   value="<?php echo set_value('user_bank_accountNo_sell'); ?>">
								       <input class="form-control" placeholder="Re-type account No" name="user_bank_accountNo_retype_sell" >
								       </div>

								  </label>

								</div>

	
								<div class="radio form-inline">
								  <label>
								    <input type="radio" name="user_type" id="optionsRadios3"  value="Buy and Sell" <?php echo  set_radio('user_type', 'Buy and Sell'); ?> />
								    I want to buy and sell commodity

								    <div class="reveal-if-active">
								    <select name="user_bank_buy_sell">

								    <option >Select Your Bank</option>
								     <option value="Access Bank Plc"  <?php echo  set_select('user_bank_buy_sell', 'Access Bank Plc'); ?>  >Access Bank Plc</option>
								     <option value="Citibank Nigeria Limited" <?php echo  set_select('user_bank_buy_sell', 'Citibank Nigeria Limited'); ?> >Citibank Nigeria Limited </option>
								     <option value="Diamond Bank Plc" <?php echo  set_select('user_bank_buy_sell', 'Diamond Bank Plc'); ?> >Diamond Bank Plc</option>
								     <option value="Ecobank Nigeria Plc"  <?php echo  set_select('user_bank_buy_sell', 'Ecobank Nigeria Plc'); ?> >Ecobank Nigeria Plc</option>
								     <option value="Enterprise Bank"  <?php echo  set_select('user_bank_buy_sell', 'Enterprise Bank'); ?>  >Enterprise Bank</option>
								     <option value="Fidelity Bank Plc" <?php echo  set_select('user_bank_buy_sell', 'Fidelity Bank Plc'); ?>  >Fidelity Bank Plc</option>
								     <option value="First Bank Nigeria Plc" <?php echo  set_select('user_bank_buy_sell', 'First Bank Nigeria Plc'); ?> > First Bank Nigeria Plc</option>
								     <option value="First City Monument Bank" <?php echo  set_select('user_bank_buy_sell', 'First City Monument Bank'); ?>  >First City Monument Bank</option>
								     <option value="Guaranty Trust Bank Plc" <?php echo  set_select('user_bank_buy_sell', 'Guaranty Trust Bank Plc'); ?> >Guaranty Trust Bank Plc(GTB)</option>
								     <option value="Heritage Bank Company Limited"  <?php echo  set_select('user_bank_buy_sell', 'Heritage Bank Company Limited'); ?>  >Heritage Bank Company Limited</option>
								     <option value="Key Stone Bank" <?php echo  set_select('user_bank_buy_sell', 'Key Stone Bank'); ?> >Key Stone Bank</option>
								     <option value="MainStreet Bank"  <?php echo  set_select('user_bank_buy_sell', 'MainStreet Bank'); ?> >MainStreet Bank</option>
								     <option value="Sky Bank Plc" <?php echo  set_select('user_bank_buy_sell', 'Sky Bank Plc'); ?> >Sky Bank Plc</option>
								     <option value="Stanbic IBTC Bank Ltd" <?php echo  set_select('user_bank_buy_sell', 'Stanbic IBTC Bank Ltd'); ?> >Stanbic IBTC Bank Ltd</option>
								     <option value="Standard Chartered Bank Nigeria Ltd" <?php echo  set_select('user_bank_buy_sell', 'Standard Chartered Bank Nigeria Ltd'); ?>>Standard Chartered Bank Nigeria Ltd</option>
								     <option value="Sterling Bank Plc" <?php echo  set_select('user_bank_buy_sell', 'Sterling Bank Plc'); ?>>Sterling Bank Plc</option>
								     <option value="SunTrust Bank Nigeria Limited" <?php echo  set_select('user_bank_buy_sell', 'SunTrust Bank Nigeria Limited'); ?>>SunTrust Bank Nigeria Limited</option>
								     <option value="Union Bank of Nigeria Plc"  <?php echo  set_select('user_bank_buy_sell', 'United Bank for Africa Plc'); ?> >Union Bank of Nigeria Plc</option>
								     <option value="United Bank for Africa Plc" <?php echo  set_select('user_bank_buy_sell', 'Sky Bank Plc'); ?> >United Bank for Africa Plc(UBA)</option>
								     <option value="Unity Bank Plc"  <?php echo  set_select('user_bank_buy_sell', 'Unity Bank Plc'); ?> >Unity Bank Plc</option>
								     <option value="Wema Bank Plc" <?php echo  set_select('user_bank_buy_sell', 'Wema Bank Plc'); ?> >Wema Bank Plc</option>
								     <option value="Zenith Bank Plc" <?php echo  set_select('user_bank_buy_sell', 'Zenith Bank Plc'); ?>  >Zenith Bank Plc</option>

								    </select>
								       <input class="form-control" placeholder="Type your Bank account Number" name="user_bank_accountNo_buy_sell"  value="<?php echo set_value('user_bank_accountNo_buy_sell'); ?>">
								       <input class="form-control" placeholder="Re-type your Bank account Number" name="user_bank_accountNo_retype_buy_sell">
								       </div>

								  </label>
								</div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Phone No" name="user_phone"  value="<?php echo set_value('user_phone'); ?>">
                              </div>
 
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >
 
                         
                      
                      <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">Login here</a></center><!--for centered text-->
                      	 </fieldset>
                       </form>
                  </div>
              </div>
          </div>
      </div>
  
 
</span>
 <style type="text/css">
input[type="radio"]:checked ~ .reveal-if-active{
	opacity: 1;
	max-height: 100px;
	overflow: visible;
}

.reveal-if-active {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
}

	 p
     {
     color:red; 		
     }
 </style>
 
  </body>
 