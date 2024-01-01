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
              <h1 class="page-title">Login</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Login</li>
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
          <form action="#" method="POST">
            <fieldset>
            <div class="row">
              
              <div class="col-md-12">
                <div class="form-field">
                  <label>Email <span class="red">*</span></label>
                  <input name="email" type="text">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-field">
                  <label>Password <span class="red">*</span></label>
                  <input name="pwd" type="password">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-field">
                  <input name="ck" type="checkbox">
                  <span class="crte-ac">Remember me?</span> </div>
              </div>
              <div class="row">
                    <div class="col-md-12 payment-bt">
                      <div class="center">
                        <button class="bt_main" name="login">Login</button>
                      </div>
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


 <?php 
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['pwd']; 
 
 include('db_connect.php');
    $result = mysql_query("SELECT * FROM login WHERE email='$email'AND password='$password' ",$con);
    $flag=0;
    $status='0';

    if($result)
    {
      $c=0;
        while($row = mysql_fetch_array($result))
        {
          $status=$row['sts'];
           $user=$row['user'];
           $id=$row['lid'];
           $c=$c+1;
           if($status==1)
           {
            $flag=1;
            session_start();
            $type=$row['type'];
            $_SESSION['user'] = $type;
            $_SESSION['lid'] = $lid;
            // $c=$c++;
          }
      
        }
    if($c>0)
    {
       setcookie("login",$id);

  
    if($user=='admin' )
  echo "<script>location.href='a_home.php'</script>";
  else if($user=="user")
  echo "<script>location.href='u_home.php'</script>";
else if($user=="shop")
  echo "<script>location.href='s_home.php'</script>";

  
  else if($status=='0')
      echo"<script>alert('Your account is not validated');location.href='index.php';</script>";
  
 
 
  else
      echo"<script>alert('Invalid Username or Password');location.href='index.php';</script>";
       
 }
}
mysql_close($con);
}
?> 