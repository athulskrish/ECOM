 <?php
 include('head.php');
 ?>
     <!-- <title align="center">LOGIN</title> -->

 <div id="default_theme" class="it_serv_shopping_cart it_checkout checkout_page">

    <div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">User Register</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Register</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section padding_layout_1 checkout_section"> 
  <div class="container">
 <div class="row">
      <div class="col-md-12">
        <div class="checkout-form">
          <form action="u_reg.php" method="post">
            <fieldset>
            <div class="row">
              <div class="col-md-12">
                <div class="form-field">
                  <label>Name <span class="red">*</span></label>
                  <input name="fname" type="text" >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-field">
                  <label>Address <span class="red">*</span></label>
                  <textarea name="address"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-field">
                  <label>Town / City <span class="red">*</span></label>
                  <input name="town" type="text">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-field">
                  <label>State / County <span class="red">*</span></label>
                  <input name="state" type="text">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-field">
                  <label>Postcode / ZIP <span class="red">*</span></label>
                  <input name="zip" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Phone <span class="red">*</span></label>
                  <input name="ph" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Email address <span class="red">*</span></label>
                  <input name="email" type="email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Password <span class="red">*</span></label>
                  <input name="password" type="password">
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="form-field">
                  <label>Confirm Password <span class="red">*</span></label>
                  <input name="em" type="password">
                </div>
              </div> -->
              <div class="col-md-6">
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <input name="ck" type="checkbox">
                  <span class="crte-ac">Remember me?</span> </div>
              </div>
            </div>
            <div class="row">
                    <div class="col-md-12 payment-bt">-
                      <div class="center">
                        <button class="bt_main" name="reg">Register</button>
                      </div>
                    </div>
                  </div>

            </fieldset>
          </form>


        </div>
      </div>
     
             
    </div>
</div>
</div>
</div>
<!-- <?php
include('foot.php');
?> -->